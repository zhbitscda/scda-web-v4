<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width; initial-scale=1.0;minimum-scale=1.0; maximum-scale=2.0"/>
<title>大学生职业发展协会</title>
<link href="__PUBLIC__/css/style.css" rel="stylesheet" type="text/css" media="all">
<link rel="stylesheet" href="__PUBLIC__/css/bootstrap.min.css">
<link rel="stylesheet" href="__PUBLIC__/css/bootstrap-theme.min.css">
<script src="__PUBLIC__/js/jquery.min.js"></script>
<script src="__PUBLIC__/js/bootstrap.min.js"></script>
<script src="__PUBLIC__/js/jquery.easydropdown.js"></script>

</head>

<body>
<!--头部-->
<div class="navbar navbar-fixed-top">
	<div class="header_bg">
    	<div class="container">
        	 <div class="navbar-header">
      			<a href="#">
        			<img src="__PUBLIC__/images/headLOGO.png" alt="会徽">
      			</a>
	    	</div>
            <div class="cssmenu">
            	<ul>
              <li  class="active"><a href="<?php echo U('Index/index');?>">首页</a></li>
            <li><a href="<?php echo U('Index/scda');?>">关于我们</a></li>
              <li class="has-sub"><a href="<?php echo U('Index/form');?>">加入我们</a></li>
                    <!--
		         	<li class="has-sub"><a href="service.html">注册</a></li>
		         	<li class="has-sub"><a href="contact.html">登录</a></li>
                    -->
		 			<div class="clear"></div>
				 </ul>
            </div>
        </div>
    </div>
</div>





<!--报名表-->





<script type="text/javascript">
	function check(){
	if(document.getElementById('userName').value==''){
	   alert('姓名不能为空！');
	   return false;
	}
	if(document.getElementById('sex').value==''){
	   alert('性别不能为空！');
	   return false;
	}
	if(document.getElementById('birth').value==''){
	   alert('出生年月不能为空！');
	   return false;
	}
	if(document.getElementById('hometown').value==''){
	   alert('籍贯不能为空！');
	   return false;
	}
	if(document.getElementById('nation').value==''){
	   alert('民族不能为空！');
	   return false;
	}
	if(document.getElementById('dormitory').value==''){
	   alert('宿舍不能为空！');
	   return false;
	}
	if(document.getElementById('academy').value==''){
	   alert('学院不能为空！');
	   return false;
	}
	if(document.getElementById('profession').value==''){
	   alert('专业不能为空！');
	   return false;
	}
	if(document.getElementById('phonenumber').value==''){
	   alert('电话不能为空！');
	   return false;
	}
	if(document.getElementById('qq').value==''){
	   alert('QQ不能为空！');
	   return false;
	}
	if(document.getElementById('development1').value==''){
	   alert('第一部门志愿不能为空！');
	   return false;
	}
	if(document.getElementById('STSwap').value==''){
	   alert('服从调剂不能为空！');
	   return false;
	}
	if(document.getElementById('hobby').value==''){
	   alert('特长不能为空！');
	   return false;
	}
	if(document.getElementById('introduction').value==''){
	   alert('实践经历不能为空！');
	   return false;
	}
}

</script>
<div class="entry-form">
		
        <nav>
        	<hide>
            <div class="container">
            
            	<div class="rowwidth row">
            	<div style="margin-bottom:0px;text-align:left;">
					<ps>除应聘部门第二志愿外，全部必填~</ps>
                </div>
                </div>
                
               
            <form action="/SCDA/index.php/Index/signup" method="post">

            	<div class="rowwidth row">
  					<div class="col-md-4">
        					<font>姓名</font>
      						<input type="text" class="form-control" id="userName" name='sname' value=<?php echo ($data["sname"]); ?>>
  					</div>
  					<div class="col-md-3">
        					<font>性别</font>
      						<input type="text" class="form-control" id="sex" name='sex' placeholder="" value=<?php echo ($data["sex"]); ?>>
  					</div>
                    <div class="col-md-5">
        					<font>出生年月</font>
      						<input type="text" class="form-control" id="birth" name='birth' placeholder="" value=<?php echo ($data["birth"]); ?>>
  					</div>
				</div>
              	<div class="rowwidth row">
  					<div class="col-md-4">
        					<font>籍贯</font>
      						<input type="text" class="form-control" id="hometown" name='hometown' placeholder="" value=<?php echo ($data["hometown"]); ?>>
  					</div>
  					<div class="col-md-3">
        					<font>民族</font>
      						<input type="text" class="form-control" id="nation" name='nation' placeholder="" value=<?php echo ($data["nation"]); ?>>
  					</div>
                    <div class="col-md-5">
                    	<div class="col-5_font_sty">
        					<font>宿舍</font>
                        </div>
      						<input type="text" class="form-control" id="dormitory" name='dormitory' placeholder="" value=<?php echo ($data["dormitory"]); ?>>
  					</div>
				</div>
                <div class="rowwidth row">
  					<div class="col-md-7">
        					<font>学院</font>
      						<input type="text" class="form-control" id="academy" name='academy' placeholder="" value=<?php echo ($data["academy"]); ?>>
  					</div>
                    <div class="col-md-5">
                    	<div class="col-5_font_sty">
        					<font>专业</font>
                        </div>
      						<input type="text" class="form-control" id="profession" name='profession' placeholder="" value=<?php echo ($data["profession"]); ?>>
  					</div>
				</div>
                <div class="rowwidth row">
  					<div class="col-md-7 col-7_other">
        					<font>长号/短号</font>
      						<input type="text" class="form-control" id="phonenumber" name='phonenumber' placeholder="" value=<?php echo ($data["phonenumber"]); ?>>
  					</div>
                    <div class="col-md-5">
                    <div class="col-5_font_sty">
        					<font>QQ</font>
                    </div>
      						<input type="text" class="form-control" id="qq" name='qq' placeholder="" value=<?php echo ($data["qq"]); ?>>
  					</div>
				</div>
                <div class="rowwidth row">
  					<div class="col-md-7 col-7_other col-7_input" style="position:relative;">
        					<font>应聘部门</font>
                          
                            
                            <fieldset>
							<div class="select_box">
                            <select tabindex="4" class="dropdown" id="development1" name='development1' value=<?php echo ($data["development1"]); ?>>
                                <option value="" class="label"></option>
                                <option value="办公室">办公室</option>
            					<option value="传媒部">传媒部</option>
                                <option value="宣传部">宣传部</option>
            					<option value="市场公关部">市场公关部</option>
                                <option value="职业规划部">职业规划部</option>
            					<option value="讲座交流部">讲座交流部</option>
                                <option value="主持组">主持组</option>
                            </select>
                            </div>
                            <div class="select_box">
                            <select tabindex="4" class="dropdown" id="development2" name='development2' value=<?php echo ($data["development2"]); ?>>
                                <option value="" class="label"></option>
                                <option value="办公室">办公室</option>
            					<option value="传媒部">传媒部</option>
                                <option value="宣传部">宣传部</option>
            					<option value="市场公关部">市场公关部</option>
                                <option value="职业规划部">职业规划部</option>
            					<option value="讲座交流部">讲座交流部</option>
                                <option value="主持组">主持组</option>
                            </select>
                            </div>
                            
                        </fieldset>
                           
  					</div>
                    <div class="col-md-5">
        					<font>服从调剂</font>
      						<fieldset>
							
                            <select tabindex="4" class="dropdown" id="STSwap"  name='STSwap' value=<?php echo ($data["STSwap"]); ?>>
                                <option value="" class="label"></option>
                                <option value="是">是</option>
            					<option value="否">否</option>
                            </select>
                            
                            </fieldset>
  					</div>
				</div>
                <div class="rowwidth row">
  					<div class="col-md-12">
                    	<div class="col-12_font_sty">
        					<font>特长</font>
                        </div>
      					<input type="text" class="form-control" id="hobby" name='hobby' value=<?php echo ($data["hobby"]); ?>>
  					</div>
				</div>
                <div class="rowwidth row">
  					<div class="col-md-12 col-12_height">
                    	<div class="col-12_font_sty ">
                        <div class="normal_text">
        					<font>实践经历</font>
                         </div>
                            <div class="mini_text">
                            <font>实践</font>
                            <font>经历</font>
                            </div>
                        </div>
      					<textarea type="text" class="form-control" id="introduction" name='introduction' value=<?php echo ($data["introduction"]); ?>></textarea>
  					</div>
				</div>
                <div class="rowwidth row">
                	<div class="sign_box">
                        <div class="sign">
                            <button style="border:none;background:#F7F7F7;width:100%;" type="submit"  onclick="return check()"><img alt="" src="__PUBLIC__/images/signup.png"></button>
                        </div>
                    </div>
                </div>

                </form>

             </div>
            </hide>
		</nav>
</div>




<div class="footer">
	
    <div class="container">
    <div class="bottom_left">
    	<img src="__PUBLIC__/images/footlg.png" alt="">
    </div>
        <div class="bottom_right">
        
        		<ul class="tt-wrapper">
                    <li><a class="tt-sample" href="http://weibo.com/u/1889063033"  target="_blank"><img src="__PUBLIC__/images/footwb01.png" alt="" title="Sample" onmouseover="this.src='__PUBLIC__/images/footwb.png'" onmouseout="this.src='__PUBLIC__/images/footwb01.png'"/></a></li>
                    <li><a class="tt-sample" href="#"><img src="__PUBLIC__/images/footwx01.png" alt="" title="Sample" onmouseover="this.src='__PUBLIC__/images/footwx.png'" onmouseout="this.src='__PUBLIC__/images/footwx01.png'"/><span><img src="__PUBLIC__/images/fer2.png" alt=""></span></a></li>
                    <div class="clear"></div>
                </ul>

        
        	
        </div>
    </div>
</div>

 
</body>
</html>