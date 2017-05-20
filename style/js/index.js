  $(function()
    {    	
    	$('#top_pic').jCarouselLite(
		{
			btnNext: '#video_l',
			btnPrev: '#video_r',
			speed:500,
			visible: 8,
			scroll:8

		});
    });

  $(function()
    {    	
    	$('#ttop_pic').jCarouselLite(
		{
			btnNext: '#video1_l',
			btnPrev: '#video1_r',
			speed:500,
			visible: 7
		});
    });
//最新最热tab切换
	$(function()
	{
		var tab_a=$('.new_btn a');
		tab_a.mouseover(function()
		{
			var j=tab_a.index($(this)[0]);
			tab_a.eq(j).addClass('hover').siblings().removeClass('hover');			
			$('.app_list').eq(j).show().siblings('.app_list').hide();
		});
	});

	

//刷机教程
$(function()
	{
		var tab_a=$('#sj li');
		tab_a.mouseover(function()
		{
			var j=tab_a.index($(this)[0]);
			tab_a.eq(j).addClass('jc_hover0').siblings().removeClass();
			$('#div_sj>ul').eq(j).show().siblings().hide();
		});
	});


//右侧周下载排行月下载排行
$(function()
	{
		var tab_a=$('.ph_link a');
		tab_a.mouseover(function()
		{
			var j=tab_a.index($(this)[0]);			
			$('.ph_list').eq(j).show().siblings('.ph_list').hide();
			tab_a.eq(j).addClass('ph_lhover').siblings().removeClass();
		});

	});
	$(function()
	{
		$('.ph_list li').mouseover(function()
		{
			var j=$('.ph_list li').index($(this)[0]);			
			$('.ph_list li').eq(j).removeClass('ph_img_a').siblings().addClass('ph_img_a');	
		});
		$('.ph_list').each(function(i){
			$(this).find('li').first().removeClass('ph_img_a');
		});
	});
	
	/*$(function()
	{ 
		$('.ph_list li').eq(0).find('.ph_img>a,.ph_img span').show();
		$('.ph_list li').eq(10).find('.ph_img>a,.ph_img span').show();
		$('.ph_list li').eq(20).find('.ph_img>a,.ph_img span').show();
		$('.ph_list li').eq(30).find('.ph_img>a,.ph_img span').show();
		var kk=0;
		$('.ph_list li .n_red').each(function(i){	
			if(kk==10)
			{
				kk=0;
			}				
			if((kk>2&&kk<10))
			{
				$(this).attr('class','n_blue');
			}
			kk++;
		});
		$('.ph_list li').mouseover(function()
		{
			var j=$('.ph_list li').index($(this)[0]);			
			$('.ph_list li').eq(j).find('.ph_img>a,.ph_img span').show();
			$('.ph_list li').eq(j).siblings().find('.ph_img>a,.ph_img span').hide();	
		});
	});
*/



var flash_i=1;
var div_flash=$('.eye_pag a');
var cl=setInterval('goIndexFlash()',4000);
div_flash.mouseover(function()
{
    clearInterval(cl);
    var j=div_flash.index($(this)[0]);
    setIndexFlash(j);
    flash_i=j+1;
});

div_flash.mouseout(function()
{
    cl=setInterval('goIndexFlash()',4000);
});

function goIndexFlash()
{
    if(flash_i>3)
    {
        flash_i=0;
    }
    setIndexFlash(flash_i);
    flash_i++;
}

function setIndexFlash(j)
{
    div_flash.eq(j).attr('class','e_ahov').siblings().removeClass('e_ahov');
    $('.title1 a').eq(j).show().siblings().hide();
    $('#a_flash a').eq(j).show().siblings().hide();
}