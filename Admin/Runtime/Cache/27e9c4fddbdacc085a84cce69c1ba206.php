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
.row{
  margin:0 auto;
  width:33.3333%;
  padding:10px;
}
.row > input,.row > font{
  width:20%;
  float:left;
}
.row > font{
  padding-top:2%;  
}
.row > input{
  width:80%;
}
</style>
</head>

<body>
<div class="container">
<div style="margin-top:10px;">
  <div style="width:50%;">
    <img style="margin-top:10px;margin-right:10px" src="__PUBLIC__/Images/02.jpg" height="40px" width="40px" />
    <img style="padding-top:15px" src="__PUBLIC__/Images/scda1.png" />
  </div>
</div>
<div style="margin-top:0px;">
  <ul class="breadcrumb navbar-inverse">
    <li class="active" style="margin-left:3%;">登录 ></li>
  </ul>
</div>
<div>
<form action="/SCDA/admin.php/Login/doLogin" method="post" style="margin-top:30px;">
        <form class="form-horizontal"  role="form">
            <div class="row">
            <font size="3" >用 户 </font>
            <input type="text" name='username' class="form-control" placeholder="" value=<?php echo ($data["username"]); ?>>
            </div>
            <div class="row">
            <font size="3" >密 码 </font>
            <input type="password" name='password' class="form-control" placeholder="" value=<?php echo ($data["password"]); ?>>
            </div>
            <div class="row" style="text-align:center">
               <div class="col-sm-offset-2 col-sm-10">
                   <button type="submit" class="btn btn-success" style="padding:5px 20px 5px 20px;">确 定</button>
                </div>
            </div>
        </form>
</form>
</div>
</div>
</body>
</html>