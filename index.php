<?php

$obj = new main();

class main
{

	// private $html; 

	public function __construct()
	{

		$date =  date('Y-m-d', time());
		echo "The value of \$date: ".$date."<br>";

		$tar = "2017/05/24";		
		echo "The value of \$tar: ".$tar."<br>";

		$year = array("2012", "396", "300","2000", "1100", "1089");
		echo "The value of \$year: ";
		print_r($year);

		echo htmlFunction::horizontalline();

	    echo htmlFunction::headingOne("Replace - with /");
		$date = stringFunction::stringreplace("-","/",$date);
		echo $date;
		echo htmlFunction::breakLine();
		echo htmlFunction::horizontalline();

		echo htmlFunction::headingOne("Compare date and tar");
		echo stringFunction::stringCommparison($date,$tar);
		echo htmlFunction::breakLine();
		echo htmlFunction::horizontalline();

        echo htmlFunction::headingOne("Find / position");
		echo stringFunction::striposistion($date, "/");
		echo htmlFunction::breakLine();
		echo htmlFunction::horizontalline();

		echo htmlFunction::headingOne("Count words in date");
		echo stringFunction::strCount($date);
		echo htmlFunction::breakLine();
		echo htmlFunction::horizontalline();

		echo htmlFunction::headingOne("Length of string");
		echo stringFunction::stringLength($date);
		echo htmlFunction::breakLine();
		echo htmlFunction::horizontalline();

		echo htmlFunction::headingOne("ASCII Value");
		echo stringFunction::stringASCII($date);
		echo htmlFunction::breakLine();
		echo htmlFunction::horizontalline();

		echo htmlFunction::headingOne("Last two characters of the string are: ");
		echo stringFunction::strReplace($date,-2);
		echo htmlFunction::breakLine();
		echo htmlFunction::horizontalline();
        
        echo htmlFunction::headingOne("String converted to Array:");
		echo ArrayFunction::printThis($array,true);
		echo htmlFunction::breakLine();
		echo htmlFunction::horizontalline();






     }

}
class stringFunction
{

	 static public function stringreplace($src,$tar,$string)
	 {
	 	$string = str_replace($src,$tar,$string);
	 	return $string;
	 }
	  static public function stringCommparison($stringA,$stringB)
	 {
	 	if($stringA==$stringB)
	 	{
	 		echo "Oops";
	 	}
	 		else if($stringA>$stringB)
	 		{
	 			return "Future";
	 		}
	 			else if($stringA<$stringB)
	 			{
	 				return "Past";
	 			}
	 }
	 static public function striposistion($date,$slash) 
	 {
         return strpos($date,$slash);
     }
     static public function strCount($date)
	 {
	 	return str_word_count($date);
	 }
	 static public function stringLength($date)
	 {
	 	return strlen($date);
	 }
	 static public function stringASCII($date)
	 {
	 	return ord($date);
	 }
	 static public function strReplace($date,$value)
	 {	
	 	return substr($date,-2);
	 }
	 static public function strSplit($date)
	 {
	 	$array=str_split($date,2);
	 	return $array;
     } 
}
class ArrayFunction
{
	static public function printThis()
	{
	   return print_r(array_values($array));
	}
}
class htmlFunction
{
  static public function horizontalline() 
  {
      return '<hr>';
   }
    static public function headingOne($text) 
    {
      return '<h1>' . $text . '</h1>';
    }
    static public function breakLine()
    {
    	return '<br>';
    }
    
 }


