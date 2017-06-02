$(function () {
    $(".proIntro_one").on("click",function () {
        $(".proIntro_one").css("borderBottom","2px solid #fff");
        $(".proIntro_one").eq($(this).index()).css("borderBottom","2px solid #f69c1c");
        $(".proIntro_two").css("display","none");
        $(".proIntro_two").eq($(this).index()).css("display","block");
    })
})