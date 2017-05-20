  $(function()
    {    	
    	$('#top_pic').jCarouselLite(
		{
			btnNext: '#video_l',
			btnPrev: '#video_r',
			speed:500,
			visible: 6,
			scroll:6

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