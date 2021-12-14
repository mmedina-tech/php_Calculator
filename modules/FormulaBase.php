<?php
# Last Update: 2021-12-13: 14:54

class FormulaBase{
	function __construct($name=null){

		if ( isset($name) )
		{
			$this->menuname = $name;
		} else {
			return null;
		}

		$this->function_list = array();
		$this->error_msg = "Can not be a negative square root";
	}
	function get_formula($formulaName){
		return $this->formula;
	}
	function get_menu_name(){
		return $this->menuname;
	}
	function get_category_name(){
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

	function pluralize ($a, $b) {
		$oddplur = array(
		#{{{
        "Celsius" => "Celsius",
        "Fahrenheit" => "Fahrenheit",
        "Rankine" => "Rankine",
        "Foot" => "Feet",
        "Square Foot" => "Square Feet",
        "Cubic Foot" => "Cubic Feet",
        "Inch" => "Inches",
        "Ounce/Inch" => "Ounce/Inches",
        "Pound/Foot" => "Pound/Feet",
        "Pound/Inch" => "Pound/Inches",
        "Horsepower" => "Horsepower",
        "Foot/Pounds per Minute" => "Foot/Pounds per Minute",
        "Foot/Pounds per Second" => "Foot/Pounds per Second",
        "Resistance" => "Resistance",
        "Kelvin" => "Kelvin",
        "Inductive Reactance" => "Inductive Reactance",
        "Impedance" => "Impedance",
        "Power Factor" => "Power Factor",
        "Inductor Rating" => "Inductor Rating",
        "Equity Ratio" => "Equity Ratio",
        "Trend Percentage" => "Trend Percentage",
        "Current Ratio" => "Current Ratio",
        "Gross Margin Percentage" => "Gross Margin Percentage",
        "Gross Margin" => "Gross Margin", 
        "Turn-Over Ratio" => "Turn-Over Ratio",
        "Quick Ratio" => "Quick Ratio",
        "Accounts Receivable Turn-Over" => "Accounts Receivable Turn-Over",
        "Rate of Return" => "Rate of Return",
        "Total Assets Turn-Over" => "Total Assets Turn-Over",
        "Earning Per Share" => "Earnings Per Share",
        "Payout Ratio" => "Payout Ratio",
        "Cost per Unit" => "Cost per Unit",
        "Cost Per Portion" => "Cost Per Portion",
        "Selling Price" => "Selling Price",
        "New Quantity" => "New Quantity",
        "Capacitive Reactance" => "Capacitive Reactance",
        "Capacitor Rating" => "Capacitor Rating",
        "Body Mass (estimated)" => "Body Mass (estimated)",
        "Meter/Sec<sup>2</sup>" => "Meters/Sec<sup>2</sup>",
        "Foot/Sec<sup>2</sup>" => "Feet/Sec<sup>2</sup>",
        "Inch/Sec<sup>2</sup>" => "Inches/Sec<sup>2</sup>",
        "Kilometer<sup>2</sup>" => "Kilometers<sup>2</sup>",
        "Inch<sup>2</sup>" => "Inches<sup>2</sup>",
        "Meter<sup>2</sup>" => "Meters<sup>2</sup>",
		"Meter<sup>3</sup>" => "Meters<sup>3</sup>",
		"Inch<sup>3</sup>" => "Inches<sup>3</sup>",
		"Centimeter<sup>3</sup>" => "Centimeters<sup>3</sup>",
		"Kilometer<sup>3</sup>" => "Kilometers<sup>3</sup>",
		"Mile<sup>3</sup>" => "Miles<sup>3</sup>",
		"Millimeter<sup>3</sup>" => "Millimeters<sup>3</sup>",
		"Yard<sup>3</sup>" => "Yards<sup>3</sup>",
        "Centimeter<sup>2</sup>" => "Centimeters<sup>2</sup>",
        "Lumens/Meter<sup>2</sup>" => "Lumens/Meter<sup>2</sup>",
        "Lumens/Meter Squared" => "Lumens/Meter Squared",
        "Inches of Mercury" => "Inches of Mercury", 
        "PSI" => "PSI",
        "Pounds per Foot<sup>2</sup>" => "Pounds per Feet<sup>2</sup>",
        "Surface Area" => "Surface Area",
        "Volume" => "Volume",
        "Triangle Area" => "Triangle Area",
        "Circle Area" => "Circle Area",
        "Rectangle Area" => "Rectangle Area",
        "Parallelogram Area" => "Parallelogram Area",
        "Trapezoid Area" => "Trapezoid Area",
        "Miles/Hr" => "Miles/Hr",
        "Kilometers/Hr" => "Kilometers/Hr",
        "Meters/Sec" => "Meters/Sec",
        "Feet/Sec" => "Feet/Sec",
        "Yard<sup>2</sup>" => "Yards<sup>2</sup>",
        "Centiare" => "Centiares",
        "Hectare" => "Hectares",
        "Link<sup>2</sup>" => "Links<sup>2</sup>",
		"Link<sup>3</sup>" => "Links<sup>3</sup>",
		"Pole<sup>3</sup>" => "Poles<sup>3</sup>",
		"Chain<sup>3</sup>" => "Chains<sup>3</sup>",
        "Pole<sup>2</sup>" =>  "Poles<sup>2</sup>",
        "Chain<sup>2</sup>" => "Chains<sup>2</sup>",
        "Mile<sup>2</sup>" => "Miles<sup>2</sup>",
        "Section" => "Sections",
        "Township" => "Townships",
        "Foot<sup>2</sup>" => "Feet<sup>2</sup>",
        "Cylinder Surface Area" => "Cylinder Surface Area",
        "Cylinder Volume" => "Cylinder Volume",
        "Cone Surface Area" => "Cone Surface Area",
        "Cone Volume" => "Cone Volume",
        "Sphere Surface Area" => "Sphere Surface Area",
        "Sphere Volume" => "Sphere Volume",
        "Rectange / Right Prism Volume" => "Rectangle / Right Prism Volume",
        "Pyramid Surface Area" => "Pyramid Surface Area",
        "Pyramid Volume" => "Pyramid Volume",
        "Pounds per Square Foot" => "Pounds per Square Foot",
        "Inductive Reactance Rating" => "Inductive Reactance Rating",
		"Company Valuation" => "Company Valuation",
		#}}}
		);

		if ( $a > 1 ) {
			if ( array_key_exists($b, $oddplur) ) {
				return $oddplur[$b];
			} else if ( $b === "" ) {
				return $b;
			} else {
				return $b."s";
			}
		} else {
		 return $b;
		}
	}
	function prec ($result, $precise=1){
		$result = round($result, $precise);
		return $result;
	}
	function money($result){
		return money_format("$%i", $result);
	}
	function for_loop($fname){
		$mystr = "";
		foreach ($this->functionInputs[$fname] as $key=>$value){
			$mystr .= "<p class='titles'>$value</p><br>&nbsp<input type='text' name='$key' required autofocus><br>\n";
		}
		return $mystr;
	}
	function show_Formulas($fname){
		$mystr = "";
		foreach ( $this->formula_list[$fname] as $key=>$value ){
			$mystr .= "Formula:<br> $value";
		}
		return $mystr;
	}
}

?>
