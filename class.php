<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php
class calculation{
	public $a,$b,$c;
	function sum(){
		$this->c=$this->a+$this->b;
	return  $this->c;
	}
	function sub(){
	$this->c=$this->a-$this->b;
	return $this->c;
	}
}
class person{
	public $name;
	function name(){
		return $this->name;
	}
}
$name1=new person();
$name1->name="ram";
echo $name1->name;
$c1=new calculation();
$c1->a=10;
$c1->b=20;
echo "The sum of two numbers is".$c1->sum()."<br>";
echo "The sum of two numbers is".$c1->sub()."<br>";
?>
</body>
</html>