$(function(){
	$("body").prepend("<div id='pageLoad' style='width:100%; height:100%; display:block; background:#fff; font-family:Georgia;opacity: 0.9; color:#ccc; font-size:20px; line-height:40px;  font-weight:bold; text-align:center; padding-top:300px;  position:fixed; left:0px; top:0px; z-index:10000;'><img src='/iwebsite/CDN/images/load.gif' /><br/>正在努力加载中...<br/><b>0</b>%</div>");
	var length,mod,loadCount=0;
	window.setInterval(function(){
		loadImg();
	},200);
	function loadImg(){
		loadCount++;

		$("#pageLoad b").html(parseInt(loadCount*mod)); 
		if(parseInt(loadCount*mod)>94){   
			$("#pageLoad").fadeOut(300,function(){
				$(this).remove();
			});		
			return; 
		}
		if(loadCount==length){     
			$("#pageLoad").fadeOut(300,function(){
				$(this).remove();
			});		
			return;
		}		
	}
	length=$("img").size();
	mod=100/parseFloat(length);
	$("img").each(function(){
		this.onload=loadImg;
		this.onerror= loadImg;
	});
});