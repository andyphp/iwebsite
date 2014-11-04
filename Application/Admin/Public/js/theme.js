
// 处理loading动画
function loading() {
	content.html("<div id='pageLoad' style='width:100%; height:100%; display:block; background:#fff;opacity: 0.9; text-align:center; position:fixed; left:0px; top:0px;padding-top:350px; z-index:10000;'><img src='/iwebsite/CDN/images/load.gif' /><br />Loading ...</div>");
}


$(function() {
	// 提示
	$('.tip-top').tooltip({
		placement:'top',
	})
	// table
	$('#tables').dataTable();
	// 表单验证
	$('#add-submit').click(function(){
		var name = $('input[name=name]');
		if (name.val() == '') {
			name.focus();
			return false;
		};			
	})


})

