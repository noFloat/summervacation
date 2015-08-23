<?php

namespace Plural;

interface Compare{
	public function compare();
	public function multi($a);
}

class Plural implements compare{

	public $a =0;
	public $b = 0;

	public function multi($a){
		
		preg_match("/([0-9]+)(?:i)/",$this->a,$match1);
		$a = $this->a.' ';
		$b='';
		preg_match('/([0-9]*)(?:\s)/', $a, $match2);
		preg_match('/([0-9]*)(?:\+)/',$a,$match3);
		if(empty($match2[0]) && empty($match3[1])){
			$b = 0;
		}elseif(empty($match3[1])){
			$b = $match2[0];
		}else{
			$b = $match3[1];
		}

		if(empty($match1)){
			return 'false';
		}else{
			$real = $b;
			$empty = $match1[1];
			$max = $real*$real+$empty*$empty;	
			return $max;
		}
	}
	public function __construct($a,$b){
		$this->a = $a;
		$this->b = $b;
	}

	public function compare(){
		$amulti = $this->multi($this->a);
		$bmulti = $this->multi($this->b);
		$biggerone = ($amulti > $bmulti)?$this->a:$this->b;
		echo $biggerone;
	}

}
$a ='2+2i';
$b = '3+2i';
$c=new Plural($a,$b);
$c->compare();