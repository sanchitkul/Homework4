<?php

$obj = new main();

class main
{

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
		echo ArrayFunction::seperate($date);
		echo htmlFunction::breakLine();
		echo htmlFunction::horizontalline();
		
		echo htmlFunction::headingOne("To find Leap Year");
		echo ArrayFunction::leapYear($year);
 		echo htmlFunction::breakLine();
		echo htmlFunction::horizontalline();
		}
		public function __destruct()
		{
				echo"End of Week4 Assignment";
		}
}
class stringFunction
{

	 static public function stringreplace($source,$tar,$string)
	 {
	 	$string = str_replace($source,$tar,$string);
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
	  
}
class ArrayFunction
{
	static public function printThis()
	{
	   return print_r(array_values($array));
	}
	static public function seperate($date)
    {
    	echo'<br>';
    	echo 'Date is seperated:';
    	$array2=(explode("/",($date)));
    	$s=count($array2);
    	for ($i=0;$i<$s;$i++)
    	{
    		echo $array2[$i]."";
    	}
    }
    static public function leapYear($year)
    {
    	foreach ($year as $val)
    	 {
    	for ($i=0;$i<1;$i++)
    	{
    		switch(val)
    		{
    			case(($val%4)==0 and ($val%100)!=0 or ($val%400)==0);
    			echo $val.'='.'True'.'<br>';
    			break;

    			default:
    			echo $val.'='.'False'.'<br>';

    		}
    	}
    	}
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


