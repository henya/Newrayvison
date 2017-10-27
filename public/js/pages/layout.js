// 菜单事件
$("#nav_more").mouseover(function () {
    $("#more_nav").stop().animate({right:'-130px'},100);
});
$("#nav_more").mouseout(function () {
    $("#more_nav").stop().animate({right:'-380px'},100);
});
$("#more_nav").mouseover(function () {
    $("#more_nav").stop().animate({right:'-130px'},100);
})
$("#more_nav").mouseout(function () {
    $("#more_nav").stop().animate({right:'-380px'},100);
})
$("#header-bg").mouseover(function () {
    console.log("hhhh");
    $("#header-bg").stop().css("backgroundColor",'rgba(0, 0, 0, 0.6)');
});
$("#header-bg").mouseout(function () {
    $("#header-bg").stop().css("backgroundColor",'rgba(0, 0, 0, 0)');
})
//菜单滚动事件
function scroll(){
    pos = 0;
    ticking = false;
    var header = document.querySelector(".header");
    window.addEventListener("scroll", function(e){
        pos = window.scrollY;
        if(pos > 100&&!ticking){
            header.classList.add("scrolledDown");
            ticking = true;
        }
        if(pos < 100 && ticking){
            header.classList.remove("scrolledDown");
            ticking = false;
        }
    });
};
scroll();


//关于瑞云顶部菜单事件
$('body').scrollspy({ target: '#navbar-example' });

//网站底部事件
$(".weibo").mouseover(function () {
    $(this).css({'background-image':'url(../img/common/weibo2.png)'});
});
$(".weibo").mouseout(function () {
    $(this).css({'background-image':'url(../img/common/weibo.png)'});
});
$(".wechat").mouseover(function () {
    $(this).css({'background-image':'url(../img/common/wechat2.png)'});
    $(".wechatq").css("display","block");
});
$(".wechat").mouseout(function () {
    $(this).css({'background-image':'url(../img/common/wechat.png)'});
    $(".wechatq").css("display","none");
});
$(".facebook").mouseover(function () {
    $(this).css({'background-image':'url(../img/common/facebook2.png)'});
});
$(".facebook").mouseout(function () {
    $(this).css({'background-image':'url(../img/common/facebook.png)'});
});
$(".linkedin").mouseover(function () {
    $(this).css({'background-image':'url(../img/common/linkedin2.png)'});
});
$(".linkedin").mouseout(function () {
    $(this).css({'background-image':'url(../img/common/linkedin.png)'});
});