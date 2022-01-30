<?php 	
class employee{
	public $name,$salary,$age;
	function __construct($name,$age,$salary){
		$this->name=$name;
		$this->age=$age;
		$this->salary=$salary;
	}
	function info(){
		echo "<h3>Employee Details</h3>";
		echo "<h2>Employee Name:".$this->name;
		echo "<h2>Employee age:" .$this->age;
		echo "<h2>Employee salary:". $this->salary;
	}
}
class manager extends employee{
	public $ta=1000;
	public $phone=3000;
	public $total_salary;
function info(){
	$this->total_salary=$this->ta+$this->phone;
		echo "<h3>manager Details</h3>";
		echo "<h2>Employee Name:".$this->name;
		echo "<h2>Employee age:" .$this->age;
		echo "<h2>Employee salary:". $this->total_salary;
	}
}
$e1=new manager("ddd",23,32);
$e2=new employee("ddd",23,77);

$e1->info();
$e2->info();
?>
