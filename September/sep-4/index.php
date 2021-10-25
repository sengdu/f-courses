<?php 

class Animal 
{   //property 
	public $legs;
	protected $name;
    //#constructor
	public function __construct($legs, $name)		
	{
	 $this->legs = $legs;
	 $this->name = $name;	
	}
	#methods
	static function info(){
		return "Animal class";
	}
	public function run(){
		echo " $this->name is running...";
	}
}
class Bird extends Animal {
	public function fly(){
		echo "$this->name is flying..";
	}
}
$dog = new Animal( 4, "bobby" );
$Bird = new Bird( 2, "Birdy" );

$dog-> run();
echo Animal::info();
$Bird -> fly();

?>