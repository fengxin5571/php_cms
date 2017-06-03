var region = new Object();
region.loadRegions = function(parent,target,type,selected)
{
  $.ajax({
	  url:'index.php?m=content&c=index&a=ajax_linkage',
      type:'get',
      dataType:'json',
      data:{region_id:parent},
      success:function(res){
    	  if(res.code=="200"&&res.areas){
    		  var area_div=$('#area_div');
    		  var select = $("select[id='"+target+"']");
    		  console.log(select);
    		  if(select){
    			  select.remove();
    		  }
    		  select = $('<select id="'+target+'" class="area_select"><select/>');
    		  select.empty();
    		  var option=$("<option value='0'>请选择</option>");
    		  select.append(option);
    		  $.each(res.areas,function(i,v){
    			  if(selected==v.value){
    				  var option=$('<option value='+v.value+' selected>'+v.name+'</option>');
    			  }else{
    				  var option=$('<option value='+v.value+'>'+v.name+'</option>');
    			  }
    			  select.append(option);
    		  });
    		  select.on('change',function(){
    			  location.href="index.php?m=content&c=index&a=lists&catid=8&region="+$(this).val();
    			  
    		  });
    		  area_div.append(select);
    	  }
    	  
      }
  });
}

/* *
 * 处理下拉列表改变的函数
 *
 * @obj     object  下拉列表
 * @type    2市级 3地区
 * @selName string  目标列表框的名称
 */
region.changed = function(obj,selName,type)
{
  var parent = obj.options[obj.selectedIndex].value;
  if(type == 1){
	  region.loadRegions(parent,selName,type,0);
  }else{
	  location.href="index.php?m=content&c=index&a=lists&catid=8&region="+parent;
  }
  
}


