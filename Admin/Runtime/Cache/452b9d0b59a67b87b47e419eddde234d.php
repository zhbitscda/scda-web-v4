<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<head>
<title>大学生职业发展协会</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="__PUBLIC__/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="__PUBLIC__/css/bootstrap-responsive.css" rel="stylesheet">
     <link rel="stylesheet" href="responsive-nav.css">
     <script src="__PUBLIC__/jquery-2.0.0.js"></script>
    <script src="__PUBLIC__/js/bootstrap.min.js"></script>
<style type="text/css">
body{
	background-color:#FFF;
}
thead{
  background-color:#dff0d8;
}

td{
    font-size:18px;
   text-align:center;
    width:100px;
    line-height: 50px;
}

td .cz{
	text-decoration:none;
	font-size:16px;
	color:#999;
}


a{
	text-decoration:none;
}
a:link{
	text-decoration:none;
}
a:visited{
	text-decoration:none;
}
.row{
	width:100%;
	overflow:hidden;
}
.row > input,.row > font{
	float:left;
}
.row > font{
	padding:0.5%;
	font-size:16px;
}
.row > input{
	width:15%;
}
.row a{
    font-size:21px;
  }
.row a:visited{
    color:#666;
}
.row a:link{
    color:#0F6;
}
.table1{
	margin:0px auto;
	text-align:center;
	border-collapse:collapse;
}
.int1{

    text-decoration: none;
    font-size: 16px;
    height: 50px;
}
</style>
</head>
<body>
<div class="container">
  
  <div style="margin-top:10px;">
      <img style="margin-top:10px;margin-right:10px" src="__PUBLIC__/Images/02.jpg" height="40px" width="40px" />
      <img style="padding-top:15px" src="__PUBLIC__/Images/scda1.png" />
      
	<div style="margin-top:30px;float:right;">
			<a href="/SCDA/admin.php/Admin/admin" style="font-size: 20px;">返回上一级</a>&nbsp;|&nbsp;<a href="/qd3/index.php/Index/operationstu" style="font-size: 20px;">操作</a>
			</div>
	  
  </div>
  
	<form action="/SCDA/admin.php/Admin/soso" method="post">
	 <form class="navbar-form navbar-left" style="" role="search">
	  	<div class="form-group row" style="margin-top:20px" >
			<font>第一志愿：</font><input type="text" class="form-control" name="development1">
			<font>第二志愿：</font><input type="text" class="form-control" name="development2">
			<button type="submit" class="btn btn-success" style="margin-top:2px;margin-left:10px;padding:5px 25px 5px 25px;">搜索</button>
			
		</div>
	</form>
	</form>


	<?php if(is_array($meeting)): $i = 0; $__LIST__ = $meeting;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$m): $mod = ($i % 2 );++$i;?><tr>
		<a href="/qd3/index.php/Index/associationqd/name/<?php echo ($m["name"]); ?>" type="submit"><td><?php echo ($m["name"]); ?></td></a>
	</tr><?php endforeach; endif; else: echo "" ;endif; ?>

	<div style="width:100%;margin:0px;">
	<p style='font-size: 20px;'>总单位数:<?php echo ($sum); ?></p>
	</div>

	<div class="table-responsive">
  	<table class="table table-bordered">
  		<thead>
  			<tr>  
      			<!-- <td style="text-align:center;line-height:30px;">序号</td> -->  
      			<td style="text-align:center;line-height:30px;">姓名</td> 
      			 <td style="text-align:center;line-height:30px;">第一志愿</td>
      			<td style="text-align:center;line-height:30px;">第二志愿</td>
      			<td style="text-align:center;line-height:30px;">操作</td>
  			</tr>  
  		</thead>
		<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tbody>
				<tr>
				<!-- <td style="text-align:center;line-height:30px;"><?php echo ($v["id"]); ?></td> -->
				<td style="text-align:center;line-height:30px;"><?php echo ($v["sname"]); ?></td>
				<td style="text-align:center;line-height:30px;"><?php echo ($v["development1"]); ?></td>
				<td style="text-align:center;line-height:30px;"><?php echo ($v["development2"]); ?></td>
       			<td style="text-align:center;line-height:30px;"><a href="/SCDA/admin.php/Admin/form/studentID/<?php echo ($v["studentID"]); ?>" type="submit" class="btn btn-success" style="padding:5px 30px 5px 30px;">查看</a></td>
				</tr>
				</tbody><?php endforeach; endif; else: echo "" ;endif; ?>
	</table>
	</div>

</div>
</body>
</html>