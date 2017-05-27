<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><div class="footer">
	<div class="footer_con">
        <div class="footer_one">
            <div class="contact_us">
                <div class="contact_a">联系我们</div>
                <div class="contact_b">CONTACT US</div>
            </div>
            <div class="our_tell">公司热线:  <?php echo siteinfo_d($siteid,'company_phone');?></div>
            <div class="our_adress">公司地址: <?php echo siteinfo_d($siteid,'company_address');?></div>
        </div>
        <div class="footer_one footer_two">
            <div class="contact_us">
                <div class="contact_a">关于我们</div>
                <div class="contact_b">ABOUT US</div>
            </div>
            <a href="<?php echo $CATEGORYS['7']['url'];?>" class="our_tell">公司介绍</a>
            <a href="" class="our_adress">媒体报道</a>
        </div>
        <div class="footer_one footer_two">
            <div class="contact_us">
                <div class="contact_a">招商加盟</div>
                <div class="contact_b">CHINA MERCHANTS</div>
            </div>
            <div class="our_tell">市场合作: <?php echo siteinfo_d($siteid,'investment_phone');?></div>
            <a href="<?php echo $CATEGORYS['15']['url'];?>" class="our_adress">招商须知</a>
        </div>
        <div class="look_at">
            <div class="look_me">扫我关注</div>
            <img class="erWeiMa" src="<?php echo siteinfo_d($siteid,'qccode');?>" alt="">
        </div>
    </div>
</div>
<script type="text/javascript">
$(function(){
	$(".picbig").each(function(i){
		var cur = $(this).find('.img-wrap').eq(0);
		var w = cur.width();
		var h = cur.height();
	   $(this).find('.img-wrap img').LoadImage(true, w, h,'<?php echo IMG_PATH;?>msg_img/loading.gif');
	});
})
</script>
</body>
</html>