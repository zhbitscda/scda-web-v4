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
h2,small{
  float:left;
}
tr,td{
  border: 1px solid #000;
  height:40px;
  font-size:18px;
}
td{
  text-align:center;
}
.txt1{
  width:10%;
}
.data1{
  width:23.333333%;
}
.data2{
  width:57.333333%;
}
table{
  width:100%;
}
</style>
</head>

<body>
<div class="container">
<div style="margin-top:10px;overflow:hidden;text-align:center">
    <h3>大学生职业发展协会报名表</h3>
</div>


<table border="0" cellpadding="3" cellspacing="1" width="100%" align="center" style="background-color: #FFF;">
<tr>
  <td class="txt1">姓名</td>
  <td class="data1"><?php echo ($data["sname"]); ?></td>
  <td class="txt1">性别</td>
  <td class="data1"><?php echo ($data["sex"]); ?></td>
  <td class="txt1">出生年月</td>
  <td class="data1"><?php echo ($data["birth"]); ?></td>
</tr>

<tr>
  <td class="txt1">籍贯</td>
  <td class="data1"><?php echo ($data["hometown"]); ?></td>
  <td class="txt1">民族</td>
  <td class="data1"><?php echo ($data["nation"]); ?></td>
  <td class="txt1">宿舍</td>
  <td class="data1"><?php echo ($data["dormitory"]); ?></td>
</tr>

<tr>
  <td class="txt1">学院</td>
  <td colspan="3"><?php echo ($data["academy"]); ?></td>
  <td class="txt1">专业</td>
  <td class="data1"><?php echo ($data["profession"]); ?></td>
</tr>

<tr>
  <td class="txt1">长号/短号</td>
  <td  colspan="3"><?php echo ($data["phonenumber"]); ?></td>
  <td class="txt1">QQ</td>
  <td class="data1"><?php echo ($data["qq"]); ?></td>
</tr>

<tr>
  <td class="txt1">应聘部门</td>
  <td colspan="2"><?php echo ($data["development1"]); ?></td>
  <td><?php echo ($data["development2"]); ?></td>
  <td class="txt1">服从调剂</td>
  <td class="data1"><?php echo ($data["STSwap"]); ?></td>
</tr>

<tr>
  <td>特长</td>
  <td colspan="5" style="text-align:left;height:100px"><?php echo ($data["hobby"]); ?></td>
</tr>

<tr>
  <td>实践经历</td>
  <td colspan="5" style="text-align:left;height:300px"><?php echo ($data["introduction"]); ?></td>
</tr>

</table>


</div>
</body>
</html>