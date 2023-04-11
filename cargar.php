<?php
require_once("class/class.php");
$con=mysql_connect("localhost","root","");
mysql_query("SET NAMES 'utf8'");
mysql_select_db("hockey");
if (isset($_POST['local']))
{
   $local = $_POST['local'];
   $n        = count($local);
   $i        = 0;

   while ($i < $n)
   {
      echo "$local[$i]";
      $i++;
   }
   echo "</ol>";
}

foreach($_POST['local'] as $key=>$value){
echo ' '.$value;
}

?>