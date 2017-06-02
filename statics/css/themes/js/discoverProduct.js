$(function () {
    function lunbo() {
        var num = 0;
        $(".disPro_one").eq(0).css("background", "#9dc919");
        $(".disPro_one").on("mouseover", function () {
            $(".disPro_one").css("background", "");
            $(this).css("background", "#9dc919");
            $(".banner_a_yyt").css("opacity", "0");
            $(".banner_a_yyt").eq($(this).index()).css("opacity", 1);
            clearInterval(tt);
            num = $(this).index();
        })
        $(".disPro_one").on("mouseout", function () {
            tt = setInterval(circle, 4000);
        })
        var tt = setInterval(circle, 4000);

        function circle() {
            num++
            if (num >= $(".disPro_one").length) {
                num = 0
            }
            $(".disPro_one").css("background", "");
            $(".disPro_one").eq(num).css("background", "#9dc919");
            $(".banner_a_yyt").css("opacity", "0");
            $(".banner_a_yyt").eq(num).css("opacity", 1);
        }

        $(".arrow_left").on("click", function () {
            num--;
            if (num < 0) {
                num = $(".disPro_one").length - 1
            }
            $(".disPro_one").css("background", "");
            $(".disPro_one").eq(num).css("background", "#9dc919");
            $(".banner_a_yyt").css("opacity", "0");
            $(".banner_a_yyt").eq(num).css("opacity", 1);
        })
        $(".arrow_right").on("click", function () {
            num++
            if (num >= $(".disPro_one").length) {
                num = 0
            }
            $(".disPro_one").css("background", "");
            $(".disPro_one").eq(num).css("background", "#9dc919");
            $(".banner_a_yyt").css("opacity", "0");
            $(".banner_a_yyt").eq(num).css("opacity", 1);
        })
        $(".banner_a_yyt").on("mouseover", function () {
            clearInterval(tt)
        })
        $(".banner_a_yyt").on("mouseout", function () {
            tt = setInterval(circle, 4000);
        })
        $(".arrow_left").on("mouseover", function () {
            clearInterval(tt)
        })
        $(".arrow_left").on("mouseout", function () {
            tt = setInterval(circle, 4000);
        })
        $(".arrow_right").on("mouseover", function () {
            clearInterval(tt)
        })
        $(".arrow_right").on("mouseout", function () {
            tt = setInterval(circle, 4000);
        })
    }
    lunbo()
})