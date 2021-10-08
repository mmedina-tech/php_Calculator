<?php

class FormulaBase{
	function __construct($name=null){
		if ( ! is_null($name) )
		{
			$this->menuname = $name;
			
		} else {
			return null;
		}

		$this->function_list = array();
		$this->error_msg = "Can not be a negative square root";

		
	}
	function _get_formula($formulaName){
		return $this->formula;
	}
	function _get_menu_name(){
		return $this->menuname;
	}
	function _get_category_name(){
		return $this->categoryname;
	}
	function prompt($args){
		$argList = array();
		echo "\nRunning... ".$args[0]."\n";
		foreach (array_slice($args, 1) as $arg){
			$userStr = readline("\t".$arg.": ");
			$argList[] = $userStr;
		}
		return $argList;
	}

	function pluralize ($a, $b): string {
		$oddplur = array(
		 'Celsius' => 'Celsius',
		 'Fahrenheit' => 'Fahrenheit',
		 'Rankine' => 'Rankine',
		 'Foot' => 'Feet',
		);

		if ( $a > 1 ) {
			if ( $oddplur[$b] ) {
				return $oddplur[$b];
			} elseif ( $b == '' ) {
				return $b;

			} else {
				return $b.'s';
			}
		} else {
		 return $b;
		}
	}
	function prec ($result, $precise=1): float{
		$result = round($result, $precise);
		return $result;
	}
	function for_loop($fname){
		$mystr = '';
		foreach ($this->functionInputs[$fname] as $key=>$value){
			$mystr .= "<p class='titles'>$valus</p><br>&nbsp<input type='text' name='$key' required autofocus><br>\n";
		}
		return $mystr;
	}
	function show_Formulas($fname){
		$mystr = '';
		foreach ( $this->functionInputs[$fname] as $key=>$value){
			$mystr .= "Formula:<br>$value";
		}
		return $mystr;
	}
}


$fb = new FormulaBase();



?>
