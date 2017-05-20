//右侧电影壁纸切换
	$(function()
	{
		var tab_a=$('#xz2 a');
		tab_a.mouseover(function()
		{
			var j=tab_a.index($(this)[0]);
			tab_a.eq(j).addClass('ph_lhover').siblings().removeClass('ph_lhover');			
			$('.nzy_list').eq(j).show().siblings('.nzy_list').hide();
		});
	});
// 游戏下载typename全部游戏
/*$(function()
	{
		var tab_a=$('.sub_list li');
		tab_a.onclick(function()
		{
			var j=tab_a.index($(this)[0]);
			$(this).find('li').first().removeClass('sub_hover');			
		});
	});
*/
//周月下载排行
$(function()
	{
		var tab_a=$('#download a');
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
