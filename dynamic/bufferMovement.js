/**
 * Created by Muc on 15/11/15.
 */
// 获取元素属性框架说明：（为兼容IE 6 7 8）
// getStyle(元素,带获取属性)
function getStyle(box,attr){
    if(box.currentStyle){
        return box.currentStyle[attr];
    }else{
        if(getComputedStyle(box,null)[attr]=="auto"){
            return 0;
        }else{
            return getComputedStyle(box,null)[attr];
        }
    }
}
//多功缓冲能运动框架说明：（需要配合获取元素属性框架）
//move(运动物体，｛属性：目标值，属性：目标值。。。｝，运动速率，回调函数)
function move(box,json,rate,fnend){
    clearInterval(box.timer);
    box.timer = setInterval(moveBox, 30);
    function moveBox(){
        var mStop=true;
        for (var attr in json) {
            if(attr=="opacity"){
                box.current=Math.round(parseFloat(getStyle(box,attr))*100);
            }else{
                box.current=parseInt(getStyle(box,attr))
            }
            var distance=(json[attr]-box.current);
            var speed=distance/500*rate;
            speed=speed>0?Math.ceil(speed):Math.floor(speed);
            if(speed<0&&speed>=-5){
                speed=-5;
            }else if(speed>0&&speed<=5){
                speed=5;
            }
            if((distance<=5&&distance>=0)||(distance<=0&&distance>=-5)){
                speed=distance;
            }
            if(parseInt(box.style[attr])!=json[attr]){
                mStop=false;
            }
            if(attr=="opacity"){
                box.style[attr]=(box.current+speed)/100;
                box.style.filter='alpha(opacity:'+(box.current+speed)+')'
            }else{
                box.style[attr]=box.current+speed+"px";
            }
        }
        if(mStop){
            clearInterval(box.timer);
            if(fnend)fnend();
        }
    }
}