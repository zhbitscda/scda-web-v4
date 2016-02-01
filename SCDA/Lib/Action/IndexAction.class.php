
<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
    public function index(){
    $this->display();
    }
    public function chuanmei(){
    	$this->display();
    }
     public function bangong(){
    	$this->display();
    }
    public function jiangzuo(){
    	$this->display();
    }
    public function zhigui(){
    	$this->display();
    }
     public function zhuchi(){
        $this->display();
    }
    public function peixun(){
    	$this->display();
    }
    public function xuanchuan(){
    	$this->display();
    }
    public function gongguan(){
    	$this->display();
    }
    public function form(){
    	$this->display();
    }
    public function scda(){
    	$this->display();
    }
    public function sure(){
        $this->display();
    }

    public function signup(){
    	$m=M('student');
    	$m->sname=$_POST['sname'];
    	$m->sex=$_POST['sex'];
    	$m->birth=$_POST['birth'];
    	$m->hometown=$_POST['hometown'];
    	$m->nation=$_POST['nation'];
    	$m->academy=$_POST['academy'];
    	$m->profession=$_POST['profession'];
    	$m->dormitory=$_POST['dormitory'];
    	$m->phonenumber=$_POST['phonenumber'];
    	$m->qq=$_POST['qq'];
    	$m->development1=$_POST['development1'];
    	$m->development2=$_POST['development2'];
    	$m->STSwap=$_POST['STSwap'];
    	$m->hobby=$_POST['hobby'];
    	$m->introduction=$_POST['introduction'];
    	$idNum=$m->add();
    	if($idNum>0){
    		$this->success('报名成功！','sure');
        }
    	else{
    		$this->error('报名失败！','index');
    	}
    }
}