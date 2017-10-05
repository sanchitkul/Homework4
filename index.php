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

		echo htmlTags::breakLine();

		echo htmlTags::headingOne("Replace - with /");
		$date = stringFunction::stringreplace("-","/",$date);
		echo $date;
		echo htmlTags::breakLine();
		echo htmlTags::horizontalline();
     }

}
class stringFunction
{

	 static public function stringreplace($src,$tar,$string)
	 {
	 	$string = str_replace($src,$tar,$string);
	 	return $string;
	 }
}
class htmlTags
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


