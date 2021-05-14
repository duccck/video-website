/**
 * Created by Muc on 15/11/15.
 */
function slide(){
    var oBox=document.getElementById("slide");
    var index=1;
    function slideMove(){
        var target=parseInt(getStyle(oBox,"width"))/4;
        if(index!=3){
            move(oBox,{"left":-index*target},30);
            index++;
        }else{
            move(oBox,{"left":-index*target},30,reset);
            function reset(){
                oBox.style.left=0+"px";
                index=1;
            }
        }
    }
    setTimeout(slideMove,2500);
    function begin(){
        timer=setInterval(slideMove,4000);
        oBox.onmouseover = function () {
            clearInterval(timer);
        };
        oBox.onmouseout = function () {
            timer = setInterval(slideMove,4000);
        };
    }
    setTimeout(begin,2500);
}slide();