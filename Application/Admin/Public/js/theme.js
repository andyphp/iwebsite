var content = $('#show-content');

// 处理loading动画
function loading() {
	content.html("<div id='pageLoad' style='width:100%; height:100%; display:block; background:#fff;opacity: 0.9; text-align:center; position:fixed; left:0px; top:0px;padding-top:350px; z-index:10000;'><img src='/iwebsite/CDN/images/load.gif' /><br />Loading ...</div>");
}

// 处理url请求
function request(url) {
	$.ajax({
		type:'POST',
		url:url,
		cache:false,
		data:'',
		dataType:'html',
		beforeSend:function() {
			loading();
		},
		success:function(data) {
			content.html(data);
		}
	})
}