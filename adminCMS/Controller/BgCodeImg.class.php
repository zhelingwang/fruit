<?php
session_start();
//echo dirname(__DIR__).'/View/images/bg.jpg';
//header("content-type:image/gif");
class BgCodeImg{
	protected $img;
	protected $len;
	protected $width;
	protected $height;
	protected $fontSize;//12磅
	protected $font;//字体样式
	protected $chars;//用于输出的字符数组
	public function __construct($len){
		$this->len=$len;//用于生成汉字
		$this->fontSize=24;//12磅
		$this->font=__DIR__.'/SIMHEI.TTF';
		$this->init();
		$this->randStr();//生成随机的汉字
		$this->infoText();//取相关汉字的信息
		$this->addText();
		$this->showImg();

	}
	//初始化
	protected function init(){
		$bgImg=dirname(__DIR__).'/View/images/bg.jpg';//背景图片
		$info=getimagesize($bgImg);
		$this->width=$info[0];//画布宽度
		$this->height=$info[1];//画布高度
		$this->img=imagecreatefromstring(file_get_contents($bgImg));
	}
	/*计算字符的宽度与高度*/
	//imagettfbbox ( $fontsize , $angle , $fontfile , $text ) 
	//用于在图像上输出的字符
	protected function infoText(){
		header('content-type:text/html;charset=utf-8;');
		//imagettfbbox中fontsize的单位是point磅,而不是像素pix   12*(4/3)=16像素
		$res=array();
		//$arr=$this->randStr();
		$arr=$this->chars;
		foreach ($arr as $char) {
			$angle=rand(-15,15);//字体斜角度
			$box = imagettfbbox($this->fontSize, $angle, $this->font, $char);
			$width= $box[4] - $box[6];//字体宽度
			$height= $box[3] - $box[5];//字体高度
			$temp=array();
			$temp['char']=$char;
			$temp['angle']=$angle;
			$temp['width']=$width;
			$temp['height']=$height;
			$res[]=$temp;
		}
		$this->chars=array();
		$this->chars=$res;
		/*echo "<pre>";		
		print_r($this->chars);*/
		//return $res;
		/*echo "<pre>";
		print_r($box);
		
		echo 
		"<br/>
		字符总宽度＝右上角 X -  左上角 X  或   右下角 X  -  左下角 X <br/>
		字符总宽度＝".($box[4]-$box[6])." 或 ".($box[2] - $box[0])." <br/>
		字符总高度＝左下角 Y -  左上角 Y  或   右下角 Y  -  右上角 Y <br/>
		字符总高度＝".($box[1]-$box[7])." 或 ".($box[3] - $box[5])." <br/>
		0 左下角 X 位置: $box[0]<br/>
		1 左下角 Y 位置:$box[1] <br/>
		2 右下角 X 位置:$box[2]<br/>
		3 右下角 Y 位置:$box[3]<br/>
		4 右上角 X 位置:$box[4]<br/>
		5 右上角 Y 位置:$box[5]<br/>
		6 左上角 X 位置:$box[6]<br/>
		7 左上角 Y 位置:$box[7]";
		*/	
	}


	//生成文字
	protected function addText(){
		// imagettftext("图像名","字体大小","倾斜角度","X,"Y"，"色彩名","字体样式","文字")
		$arr=$this->chars;//$arr是个二维数组，$arr[0]['char']是要输出的字符
		$this->chars=array();
		//echo count($arr);
		//像素=磅*0.75
		$charsWidth='';//字符总宽度
		foreach ($arr as $row) {
			$charsWidth+=$row['width'];
		}
		$k=ceil(($this->width-$charsWidth)/(count($arr)+1));//字符间距60pix以上
		$text='';//用于保存在文件中
		for($i=0;$i<count($arr);$i++){
			$row=$arr[$i];//一个字符是一个一维数组
			$char=$row['char'];
			$text.=$char;

			$angle=$row['angle'];
			$row['x']=ceil(1*$k)+$i*($row['width']+$k);//水平位置
			$row['y']=rand(1.5*$row['height'],$this->height*0.9);//垂直位置
			//$row['y']=1.5*$row['height'];
			$this->chars[]=$row;
			//$color=imagecolorallocate($this->img,rand(0,255),rand(0,255),rand(0,255));
			$color=imagecolorallocate($this->img,255,0,0);
			imagettftext($this->img,$this->fontSize,$angle,$row['x'],$row['y'],$color,$this->font,$char);

		}
		/*echo "<pre>";		
		print_r($this->chars);*/
		//用于验证
		$_SESSION['BgCharsCode']=$this->chars;

		
	}
	//处理汉字获取相应的信息

	//生成随机汉字
	public function randStr(){
		//header('content-type:text/html;charset=utf-8;');
		$str='我人有的和主产不为这工要在地下上是中国同民了发以经杂';
		$this->chars=array();
		for($i=0;$i<$this->len;$i++){
			$index=rand(0,mb_strlen($str,'utf8')-1);
			$this->chars[]=mb_substr($str,$index,1,'utf8');
		}
		/*echo "<pre>";		
		print_r($chars);*/
		//return $chars;
	}

	protected function showImg(){
		header("content-type:image/gif");
		imagegif($this->img);//输出图像
		imagedestroy($this->img);//销毁图像，回收资源
	}

}//类结束
/*$img=new BgCodeImg(3);*/
