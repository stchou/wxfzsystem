<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title><?php echo ($title); ?> - <?php echo C('cfg_sitetitle');?> </title>
    
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link rel="stylesheet" href="/Public/css/bootstrap.min.css">
	<link href="/Public/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="/Public/css/adminlte.min.css">
	<link rel="stylesheet" href="/Public/css/_all-skins.min.css">
	<link rel="stylesheet" href="/Public/css/blue.css">
	<link rel="stylesheet" href="/Public/css/bootstrap-datetimepicker.min.css">
	<link href="https://novel.youshuge.com/img/favicon.ico" rel="icon" type="image/x-icon">
	<link rel="stylesheet" href="/Public/css/layer.css">
	<script src="/Public/js/jquery-2.2.3.min.js"></script>
	<script src="/Public/js/bootstrap.min.js"></script>
	<script src="/Public/js/bootstrap-datetimepicker.min.js"></script>
	<script src="/Public/js/app.min.js"></script>
	<script src="/Public/js/layer.js"></script>
	<style type="text/css">
		.skin-purple-light .wrapper, .skin-purple-light .main-sidebar, .skin-purple-light .left-side {
			background-color: #f9f9f9;
		}

		.skin-purple-light .sidebar-menu > li > .treeview-menu {
			background-color: #e8e8e8;
		}

		.skin-purple-light .sidebar-menu > li > a {
			font-weight: unset;
		}

		.skin-purple-light .treeview-menu > li.active > a, .skin-purple-light .sidebar-menu > li.active > a, .skin-purple-light .treeview-menu > li.active > a {
			background-color: #e6f7ff;
			border-right: 2px solid #168fff;
			color: #57b6ff;
			font-weight: unset;
		}

		.skin-purple-light .sidebar-menu > li:hover > a, .skin-purple-light .sidebar-menu > li:hover > a, .skin-purple-light .treeview-menu > li > a:hover, .skin-purple-light .sidebar-menu > li > a:hover {
			color: #57b6ff;
		}

		.sidebar-menu .treeview-menu > li > a {
			padding-left: 40px;
			padding-top: 10px;
			padding-bottom: 10px;
		}

		.sidebar-menu .treeview-menu {
			padding-left: 0;
		}

		.skin-purple-light .sidebar a {
			color: #666;
		}

		.wysiwyg-color-black {
			color: black !important;
		}

		.wysiwyg-color-silver {
			color: silver !important;
		}

		.wysiwyg-color-gray {
			color: gray !important;
		}

		.wysiwyg-color-maroon {
			color: maroon !important;
		}

		.wysiwyg-color-red {
			color: red !important;
		}

		.wysiwyg-color-purple {
			color: purple !important;
		}

		.wysiwyg-color-green {
			color: green !important;
		}

		.wysiwyg-color-olive {
			color: olive !important;
		}

		.wysiwyg-color-navy {
			color: navy !important;
		}

		.wysiwyg-color-blue {
			color: blue !important;
		}

		.wysiwyg-color-orange {
			color: orange !important;
		}
		.glyphicon {
			margin-right: 6px;
		}
		.wechat{
			line-height: 50px;
			width: 100%;
			display: block;
			text-align: center;
			font-size: 24px;
			color: #ecfd02;
		}
	</style>
	<link rel="stylesheet" href="/Public/css/laydate.css" id="layuicss-laydate">
	<style type="text/css">
		.jqstooltip { position: absolute;left: 0px;top: 0px;visibility: hidden;background: rgb(0, 0, 0) transparent;background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;padding: 5px;border: 1px solid white;z-index: 10000;}.jqsfield { color: white;font: 10px arial, san serif;text-align: left;}
	</style>
</head>
<body class="sidebar-mini skin-purple-light" style="height: auto;">
<div class="wrapper" style="height: auto;">

    <header class="main-header">
  <a href="<?php echo U(GROUP_NAME.'/Main_index');?>" class="logo">
    <span class="logo-mini"><b>演</b>示</span>
    <span class="logo-lg">
      <img src="/Public/css/img/logo.png">
      <b>电销联盟系统</b>
    </span>

  </a>
  <nav class="navbar navbar-static-top">
    <a href="<?php echo U(GROUP_NAME.'/Main_index');?>" class="sidebar-toggle" data-toggle="offcanvas" role="button">
      <span class="sr-only">Toggle navigation</span>
    </a>
    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <li class="dropdown user user-menu">
          <a href="<?php echo U(GROUP_NAME.'/Main_index');?>" class="user-panel dropdown-toggle" data-toggle="dropdown" style="height: 50px; display: flex;">
            <img src="/Public/css/img/avatar2.png" class="user-image" alt="User Image">
            <span class="hidden-xs"><?php echo session('admin_name');?> </span>
            <span>
              <i class="fa fa-angle-down"></i>
              <i class="fa fa-angle-up hidden"></i>
            </span>
          </a>
          <ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close" style="width: 150px;">
            <!--li>
              <a href="<?php echo U(GROUP_NAME.'/Admin_chagemypass');?>"><i class="fa fa-fw fa-key"></i> 修改密码</a>
            </li-->
            <li class="divider"></li>
            <li class="divider"></li>
            <li>
              <a href="<?php echo U(GROUP_NAME.'/logout');?>">
                <i class="fa fa-fw fa-power-off"></i> 安全退出
              </a>
            </li>
          </ul>
        </li>


      </ul>
    </div>
    <b class="wechat">管理后台</b>
  </nav>
</header>
    <!-- dcHead 结束 -->
    <aside class="main-sidebar">
	<section class="sidebar" style="height: auto;">
		<ul class="sidebar-menu">
			<li>
				<a href="<?php echo U(GROUP_NAME.'/Main_index');?>">
					<i class="fa fa-home"></i> <span>首页</span>
				</a>
			</li>
	<?php $m=D('admin'); $id=session("admin_user"); $admin=$m->where(array('id'=>$id))->find(); $gid=$admin['gid']; if($gid==1){ ?>
            	<li class="treeview">
				<a href="#">
					<i class=" fa fa-tasks"></i> 
					<span>系统设置</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
				<ul class="treeview-menu">
                  	<li>
						<a href="<?php echo U(GROUP_NAME.'/System_index');?>">
							<i class="fa fa-angle-right"></i> 
							系统设置
						</a>
					</li>
                   	<li>
						<a href="<?php echo U(GROUP_NAME.'/Img_index');?>">
							<i class="fa fa-angle-right"></i> 
							轮播图管理
						</a>
					</li>
                </ul>
			</li>
              <li class="treeview">
				<a href="#">
					<i class=" fa fa-money"></i> 
					<span>财务管理</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
				<ul class="treeview-menu">
                  	<li>
						<a href="<?php echo U(GROUP_NAME.'/Caiwu_index');?>">
							<i class="fa fa-angle-right"></i> 
							分成记录
						</a>
					</li>
					<li>
						<a href="<?php echo U(GROUP_NAME.'/jiesuan');?>">
							<i class="fa fa-angle-right"></i> 
							提现管理
						</a>
					</li>
								</ul>
			</li>
			<li class="treeview">
				<a href="#">
					<i class=" fa fa-registered"></i> 
					<span>任务管理</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
				<ul class="treeview-menu">
                  	<!--li>
						<a href="<?php echo U(GROUP_NAME.'/bank_index');?>">
							<i class="fa fa-angle-right"></i> 
							网贷分类
						</a>
					</li-->
					<li>
						<a href="<?php echo U(GROUP_NAME.'/list_add');?>">
							<i class="fa fa-angle-right"></i> 
							任务发布
						</a>
					</li>
					<li>
						<a href="<?php echo U(GROUP_NAME.'/jieshen');?>">
							<i class="fa fa-angle-right"></i> 
							任务记录
						</a>
					</li>
					<!--li>
							<a href="<?php echo U(GROUP_NAME.'/Creply_index');?>">
								<i class="fa fa-angle-right"></i> 
								精准核对
							</a>
						</li-->
									</ul>
			</li>
		
			<li>
				<a href="<?php echo U(GROUP_NAME.'/User_index');?>">
					<i class="fa fa-user"></i> <span>用户管理</span>
				</a>
			</li>
			
		
			<li>
				<a href="<?php echo U(GROUP_NAME.'/Admin_index');?>">
				 <i class="fa fa-users"></i> <span>下单员管理</span>
				</a>
			</li>	
		
      
<?php }elseif($gid==0){ ?>
              <li class="treeview">
				<a href="#">
					<i class=" fa fa-money"></i> 
					<span>财务管理</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
				<ul class="treeview-menu">
                  	<li>
						<a href="<?php echo U(GROUP_NAME.'/Caiwu_index');?>">
							<i class="fa fa-angle-right"></i> 
							分成记录
						</a>
					</li>
					<li>
						<a href="<?php echo U(GROUP_NAME.'/jiesuan');?>">
							<i class="fa fa-angle-right"></i> 
							提现管理
						</a>
					</li>
								</ul>
			</li>
			<li class="treeview">
				<a href="#">
					<i class=" fa fa-registered"></i> 
					<span>任务管理</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
				<ul class="treeview-menu">
                  	<!--li>
						<a href="<?php echo U(GROUP_NAME.'/bank_index');?>">
							<i class="fa fa-angle-right"></i> 
							网贷分类
						</a>
					</li-->
					<li>
						<a href="<?php echo U(GROUP_NAME.'/list_add');?>">
							<i class="fa fa-angle-right"></i> 
							任务发布
						</a>
					</li>
					<li>
						<a href="<?php echo U(GROUP_NAME.'/jieshen');?>">
							<i class="fa fa-angle-right"></i> 
							任务记录
						</a>
					</li>
					<!--li>
							<a href="<?php echo U(GROUP_NAME.'/Creply_index');?>">
								<i class="fa fa-angle-right"></i> 
								精准核对
							</a>
						</li-->
									</ul>
			</li>
		
			
		
     <?php } ?>
           
		</ul>
	</section>
</aside>


    <div class="content-wrapper" style="min-height: 848px;">

            <link rel="stylesheet" href="/Public/css/switch.css">
<link href="/Public/css/select2.min.css" rel="stylesheet" />
<script src="/Public/js/select2.min.js"></script>
<section class="content-header">
<div>
	<ol class="breadcrumb" style="background: none; margin-bottom: 0px;">
		<li><a href="<?php echo U(GROUP_NAME.'/Main_index');?>" style="color: #333;"><i class=" fa fa-home"></i> Home</a></li>
		<li class="active">合伙人列表</li>
	</ol>
</div>
</section><!-- Main content --><section class="content">
<div class="row">
	<div class="col-xs-12">
		<div class="box">
			<div class="box-header" style="min-height: 35px;">
				<h3 class="box-title"></h3>
				<div class="box-tools" style="left:10px;">
					<form class="form-inline" method="post" action="<?php echo U(GROUP_NAME.'/Admin_index');?>">
						<div class="form-group">
							<!--select name="status" class="form-control" default="">
								<option value="">状态</option>
								<option value="1">启用</option>
								<option value="2">禁用</option>
							</select-->
							<div class="input-group">
								<input type="text" name="keyword" class="form-control" style="width:120px;" placeholder="名称" value="<?php echo ($keyword); ?>">
                              <div class="input-group-btn">
									<button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
								</div>
							</div>
							<!--div class="input-group">
								<input type="text" name="mobile" class="form-control" style="width:120px;" placeholder="手机号" value="">
							</div->
							<!--div class="input-group">
								<input type="text" name="user_id" class="form-control" style="width:120px;" placeholder="用户ID" value="">
								
							</div-->
						</div>
						<div class="form-group">
							<a href="<?php echo U(GROUP_NAME.'/Admin_add');?>" class="btn btn-success" style="margin-left:10px;">添加合伙人</a>
						</div>
						
						<!--div class="form-group">
							<a href="javascript:addQun();" class="btn bg-maroon" style="margin-left:10px;">移动群组</a>
						</div-->
					</form>
				</div>
			</div>
			<!-- /.box-header -->
			<div class="box-body">
				<table class="table table-bordered table-hover table-striped text-center" style="font-size: 14px;">
					<tbody>
                      
					<tr>
						<!--th>
							<label>
								<input id="checkAll" type="checkbox" value="1" style="vertical-align: middle;margin: 0 2px 2px 0;">全选
							</label>
						</th-->
						 <th>编号</th>
          			  <th>合伙人名称</th>
                        <th>账户余额</th>
            		 <th>添加时间</th>
           			 <th>最后登录时间</th>
            		<th>状态</th>
            		<th width="300">操作</th></tr>
					<tr>  	
                      <?php if(is_array($data)): foreach($data as $key=>$vo): ?><!--td>
								<input type="checkbox" class="cheks" style="width:auto;" value="437">
							</td-->
                    
							 <th><?php echo ($vo["id"]); ?></th>
            <td><?php echo ($vo["username"]); ?></td>
                          <th><?php echo ($vo["price"]); ?></th>
            <td><?php echo (date("Y-m-d H:i:s",$vo["addtime"])); ?></td>
            <td><?php echo (date("Y-m-d H:i:s",$vo["lastlogin"])); ?></td>
            <td><?php if($vo['status']==1) { echo '正常'; } else { echo '禁用';} ?>
             </td>
							<td>	
								<!--a href="javascript:;" onclick="Baoji(437,2);" class="btn btn-danger">
										<i class="fa fa-align-justify"></i>标记用户
									</a-->	
                              <?php if($vo['gid']==1) { ?>
                              <p>超级管理员</p>
                              <?php } else { ?>
							  <a href="javascript:delCat('<?php echo ($vo["username"]); ?>','<?php echo U(GROUP_NAME.'/Admin_del',array('id'=>$vo['id']));?>')"  class="cannel_vip btn bg-maroon margin">
									<i class="fa fa-times"></i>删除
								</a>
                                <a href="<?php echo U(GROUP_NAME.'/Admin_edit',array('editid'=>$vo['id']));?>"  class="cannel_vip btn bg-maroon margin" style="background:#00a65a !important">
									编辑
								</a>	
                               <a href="javascript:changepass('<?php echo ($vo["id"]); ?>');"  class="cannel_vip btn bg-maroon margin" style="background:#666 !important">
									修改密码
								</a>
                              <?php }?>
							</td>
						</tr><?php endforeach; endif; ?>     
               </tbody>
				</table>
			</div>
			<!-- /.box-body -->
			<div class="page"><?php echo ($page); ?></div>
		</div>
	</div>
</div>
</section>
<!-- 模态框（Modal） -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        ×
				</button>
				<h4 class="modal-title" id="myModalLabel">
                        余额调整（若需要减少金额，请填写负数）
				</h4>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-xs-2 text-right" style="line-height: 34px;">
                            余额：
					</div>
					<div class="col-xs-9">
						<input type="text" class="form-control" id="balance-charge" placeholder="输入需要增加或者减少的金额">
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">
                        关闭
				</button>
				<button type="button" class="btn btn-primary" id="submit-charge">
                        提交更改
				</button>
			</div>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal -->
</div>

<!-- 模态框（Modal） -->
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        ×
				</button>
				<h4 class="modal-title" id="myModalLabel2">
                        用户等级操作
				</h4>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-xs-2 text-right" style="line-height: 34px;">
                            等级：
					</div>
					<div class="col-xs-9">
						<select class="form-control col-sm-9" id="level" name="level" default="">
							<option value="">请选择</option>
							<option value="0">普通会员</option>
							<option value="1">三级代理</option><option value="2">二级代理</option><option value="3">一级代理</option><option value="4">特级代理</option>						</select>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">
                        关闭
				</button>
				<button type="button" class="btn btn-primary" id="submit-level">
                        提交更改
				</button>
			</div>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal -->
</div>

<style>
	.do-txt{
		display:none;
	}
	.do-txt .txts span{
		
	}
	.do-txt .txts{
		padding:20px 10px 5px;
		position: relative;
		display:flex;
	}
	.do-txt .txts select{
		border: 1px solid #ddd;
		padding: 2px 10px;
	}
	.do-txt button{
		width: 50%;
		margin: 30px 25%;
		height: 35px;
		border: none;
		background: #f0882c;
		color: #fff;
		border-radius: 5px;
		font-size: 15px;
		cursor:pointer;
	}
	.layui-layer{
		z-index:999!important;
	}
	.layui-layer-shade{
		z-index:99!important;
	}
</style>
<div class="do-txt">	
	<div class="txts">
		<span>选择群组：</span>
		<select class="singleSelect" id="qunid" style="width: 300px;">
			<option value="">请选择</option>
			<option value="100">A</option><option value="1">业务A群</option>		</select>
	</div>
	<button id="subMobile">提交</button>
</div>

<script>

	$(function(){
		$('.singleSelect').select2();
	
		var $choose = $(".cheks");
		 //全选
		$("#checkAll").click(function(){
			if($(this).prop('checked')){
				$choose.each(function(){
					$(this).prop("checked",true);
				});
			}else{
				$choose.each(function(){
					$(this).prop("checked",false);
				});
			}
		});
	});

	var user_id = 0;
	function charge(uid){
		user_id = uid;
		$('#myModal').modal('show');
	}
	
	
	function addQun(){
		layer.open({
			type: 1,
			title: "请先选择用户后移动到群组",
			skin: 'layui-layer-rim', //加上边框
			area: ['450px', '210px'], //宽高
			content: $('.do-txt'),
		});
	}
	
	//提交移动到群组
	$('#subMobile').click(function(){
		var ids = [];
		$('.cheks').each(function(){
			if($(this).prop('checked')){
				ids.push($(this).val());
			}
		});
		if(ids.length == 0){
			layer.alert('请勾选记录');
			return false;
		}
		var qunid = $('#qunid option:selected').val();
		if(!qunid){
			layer.alert('请选择移动的群组');
			return false;
		}
		layer.confirm("确定勾选用户移动到群组操作？",function(){
			layer.load(2);
			$.post("/m.php?m=Member&c=User&a=setQun",{ids:ids.join(","),qunid:qunid},function(d){
				if(d){
					if(d.status){
						layer.alert(d.info,function(){
							location.reload();
						});
					}else{
						layer.msg(d.info);
					}
				}else{
					layer.closeAll();
					layer.msg('请求失败！');
				}
			});
		});
	})
	
	
	
	function level(uid){
		user_id = uid;
		$('#myModal2').modal("show");
	}
	
	//money充值
	$('#submit-charge').click(function(){
		var money = $('#balance-charge').val();
		if(money == 0){
			layer.msg('充值金额不能为0');
			return;
		}
		$.post("/m.php?m=Member&c=User&a=setUserMoney",{user_id:user_id,money:money},function(d){
			if(d){
				layer.alert(d.info,function(){
					location.reload();
				})
			}else{
				layer.msg('请求失败！');
			}
		})
	})
	
	
	//等级修改
	$('#submit-level').click(function(){
		var level = $('#level option:selected').val();
		if(level == ""){
			layer.msg('请选择更改的等级');
			return;
		}
		$.post("/m.php?m=Member&c=User&a=setUserLevel",{user_id:user_id,level:level},function(d){
			if(d){
				layer.alert(d.info,function(){
					location.reload();
				})
			}else{
				layer.msg('请求失败！');
			}
		})
	})
	
	//标记用户
	function Baoji(id,status){
		if(status == -1){
			postBao(id,status);
		}else{
			layer.prompt({title:'输入标记！'},function(val, index){
				if(val == ''){
					layer.msg('请输入标记！');
					return;
				}
				postBao(id,status,val);
				layer.close(index);
			});
		}
	}
	
	//标记动作
	function postBao($id,$status,$msg=""){
		$.post("/m.php?m=Member&c=User&a=setUserbj",{id:$id,status:$status,msg:$msg},function(d){
			if(d){
				layer.alert(d.info,function(){
					location.reload();
				})
			}else{
				layer.msg('网络异常');
			}
		});
	}
	
	function clickCheckbox(id,ob , field){
		$.post("/m.php?m=Member&c=User&a=setStatus",{id:id,field:field},function(d){
			if(d){
				if($(ob).find(".switch-off").length>0){
					$(ob).find(".switch-animate").removeClass('switch-off');
					$(ob).find(".switch-animate").addClass('switch-on');
				}else{
					$(ob).find(".switch-animate").removeClass('switch-on');
					$(ob).find(".switch-animate").addClass('switch-off');
				}
			}else{
				layer.msg('请求失败！');
			}
		});
	}
   function changepass(uid){

		layer.prompt({title: '输入新密码，并确认', formType: 1}, function(pass, index){

			if(pass == '' || pass == null){

				layer.msg('密码不能为空!');

			}else if(pass.length < 6){

				layer.msg("密码长度不能小于6位!");

			}else{

				$.post(

					"<?php echo U(GROUP_NAME.'/changepassed');?>",

					{id:uid,pass:pass},

					function (data,state){

						if(state != "success"){

							layer.msg("网络通讯失败!");

						}else if(data.status == 1){

							layer.msg("密码修改成功!");

							layer.close(index);

						}else{

							layer.msg(data.msg);

						}

					}

				);

			}

		});

    }
</script>

    </div>
  
    <div class="control-sidebar-bg" style="position: fixed; height: auto;"></div>
</div>
<script src="/Public/js/commonz.js"></script>
<script>
	var route = "c=User&a=index";
    var href = '';
	console.log(route);
    $('.sidebar-menu').find('a').each(function () {
        $(this).parent('li').removeClass('active');
        href = $(this).attr('href');
        if ((href.indexOf(route) != -1)) {
            $(this).parent('li').addClass('active');
            $(this).parents('.treeview').addClass('active');
			return false;
		}
    });

    $('.dropdown-toggle').click(function (ev) {
        $(this).find('.fa-angle-down').toggleClass('hidden');
        $(this).find('.fa-angle-up').toggleClass('hidden');
    });
	
	// 调整默认选择内容
	$("select").each(function(index, element) {
		$(element).find("option[value='"+$(this).attr('default')+"']").attr('selected','selected');
	});
</script>
<script>

    function delCat(name,jumpurl){

        layer.confirm(

                '确定要删除自由块:['+name+']吗?',

                function (){

                    window.location.href = jumpurl;

                }

        );

    }

</script>

    </div>
    <div class="clear"></div>
    
    <!-- dcFooter 结束 -->
    <div class="clear"></div>
</div>
</body>
</html>