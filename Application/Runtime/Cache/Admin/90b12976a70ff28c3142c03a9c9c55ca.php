<?php if (!defined('THINK_PATH')) exit();?><section class="container-fulid white main">
  	<h5><a data-toggle="modal" data-target="#myColumn" class="btn btn-primary-outline"><i class="fa fa-plus"></i>添加栏目</a></h5>
  	<table class="table table-hover">
		<tr>
			<th>ID</th>
			<th>栏目名称</th>
			<th>状态</th>
			<th>排序</th>
			<th>操作</th>
		</tr>
		<tr>
			<td>2</td>
			<td>Javascript</td>
			<td>显示</td>
			<td><input type="text" class="form-control"></td>
			<td><a href="#" class="tip-top" title="修改">修改</a> | <a href="#" class="tip-top" title="删除">删除</a></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td><a href="#" class="tip-top" title="更新排序"><i class="fa fa-refresh"></i>更新排序</a></td>
			<td></td>
		</tr>
	</table>
</section>


<!-- Modal -->
<div class="modal fade" id="myColumn" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<h4 class="modal-title" id="myModalLabel">添加栏目</h4>
			</div>
			<div class="modal-body">
				<form class="form-horizontal" role="form">
					<div class="form-group">
						<label for="name" class="col-sm-2 control-label">栏目名称</label>
						<div class="col-sm-10">
						<input type="email" class="form-control" name="name">
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
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Save changes</button>
			</div>
		</div>
	</div>
</div>

<script src="/iwebsite/CDN/js/bootstrap-tooltip.js"></script>
<script>
	$(function() {
		$('.tip-top').tooltip({
			placement:'top',
		})
	})
</script>