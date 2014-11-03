<?php if (!defined('THINK_PATH')) exit();?><link rel="stylesheet" href="/iwebsite/CDN/css/datatables.css">
<section class="container-fulid white main">
  	<h5><a data-toggle="modal" data-target="#myColumn" class="btn btn-primary-outline"><i class="fa fa-plus"></i>添加栏目</a></h5>
  	<table class="table table-bordered table-striped dataTable" id="tables" width="100%" cellspacing="0">
		<thead>
			<tr>
			<th>ID</th>
			<th>栏目名称</th>
			<th>状态</th>
			<th>排序</th>
			<th>操作</th>
			</tr>
		</thead>
		<tbody>
			<?php if(is_array($list)): foreach($list as $key=>$column): ?><tr>
				<td><?php echo ($column["id"]); ?></td>
				<td><a href="#" class="tip-top" title="<?php echo ($column["name"]); ?>"><?php echo ($column["name"]); ?></a></td>
				<td>
					<?php if($column["state"] == 1): ?>显示<?php else: ?><span class="red">隐藏</span><?php endif; ?>
				</td>
				<td><input type="text" class="form-control" value="<?php echo ($column["sort"]); ?>"></td>
				<td><a href="#" class="tip-top" title="修改">修改</a> | <a href="#" class="tip-top" title="删除">删除</a></td>
			</tr><?php endforeach; endif; ?>
		</tbody>
	</table>
</section>


<!-- 添加栏目 -->
<div class="modal fade" id="myColumn" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<h4 class="modal-title" id="myModalLabel">添加栏目</h4>
			</div>
			<form class="form-horizontal" role="form" action="<?php echo U('addColumn');?>" method="post">
				<div class="modal-body">				
					<div class="form-group">
						<label for="name" class="col-sm-2 control-label">栏目名称</label>
						<div class="col-sm-10">
						<input type="text" class="form-control" name="name" value="">
						</div>
					</div>
					<div class="form-group">
						<label for="list_type" class="col-sm-2 control-label">列表页模版</label>
						<div class="col-sm-10">
							<select name="list_type" class="form-control">
								<option value="list.html">list.html</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="content_type" class="col-sm-2 control-label">内容页模版</label>
						<div class="col-sm-10">
							<select name="content_type" class="form-control">
								<option value="content.html">content.html</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="sort" class="col-sm-2 control-label">排序</label>
						<div class="col-sm-10">
							<input type="text" name="sort" value="10" class="form-control">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">状态</label>
						<div class="col-sm-10">
							<label class="radio-inline"><input name="state" type="radio" value="1" checked="checked"><span>显示</span></label>
							<label class="radio-inline"><input name="state" type="radio" value="0"><span>隐藏</span></label>
						</div>
					</div>	
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default-outline" data-dismiss="modal">关闭</button>
					<button type="submit" id="add-submit" class="btn btn-primary-outline">保存</button>
				</div>
			</form>
		</div>
	</div>
</div>
<script src="/iwebsite/CDN/js/bootstrap-tooltip.js"></script>
<script src="/iwebsite/CDN/js/jquery.dataTables.min.js"></script>
<script>
	$(function() {
		$('.tip-top').tooltip({
			placement:'top',
		})
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
</script>