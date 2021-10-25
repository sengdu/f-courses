<?php 
#language feature

interface Animal{
	public function run();
}

class Dog implements Animal{
	public function run (){
		echo "The dog is running";
	}

	
}
class Cat implements Animal{
	public function run (){
		echo "The Cat is running";
	}
}

function app(Animal $a){
	$a->run();
}
app(new Cat);
?>