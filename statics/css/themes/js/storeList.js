$(function () {
    var flag = true;
    $(".sL_header_city").on("click",function () {
        if(flag==true){
            $(".sL_select_city").css("display","block")
            flag = false;
        }else {
            $(".sL_select_city").css("display","none")
            flag = true;
        }
    })
})