<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	&#x1f603;
<?php

class person{
	public $name,$age;
	function __construct($name="no name",$age=0) {
		$this->name=$name;
		$this->age=$age;
	}
	function show(){
		echo $this->name." " .$this->age;
	}
}
$p1=new person("ram",2);
$p2=new person("Gita",);
$p3=new person("Mira",89);
$p1->show();
?>
</body>
</html>