
<?php
error_reporting(0);
ini_set('display_errors', 0);

if(isset($_POST['money'])||isset($_POST['hours'])||isset($_POST['mins'])||isset($_POST['secs']))
   {
   $servername='localhost';
   $username='root';
   $password='gamenight01';
   $dbname = "khalil";
   $conn=mysqli_connect($servername,$username,$password,"$dbname");
   
   
     $money=$_POST['money'];
   

     
     $hours=$_POST['hours'];
     $mins=$_POST['mins'];
     $seconds=$_POST['seconds'];
     
   $tarifA_error = '';
   $tarifB_error = '';
   $tarifC_error = '';


   if(empty($money))
   {
       $tarifA_error = 'TarifA is Required';
   }
   else
   {
       if(empty($hours))
       {
           $tarifB_error = 'TarifB is Required';
       }
   }

   if(empty($mins))
   {
       $tarifC_error = 'tarifC is Required';
   }
   if(empty($seconds))
   {
       $tarifC_error = 'tarifC is Required';
   }
   

   if($tarifA_error == '' && $tarifB_error == '' && $tarifC_error == '')
   {
    
	 $t = $hours.$mins.$seconds;
	 $f = date('d-m-Y');
	 $d = date('H:i:s');
$k="POST 1 ";
if(is_numeric($hours)||
is_numeric($mins)||
is_numeric($seconds))
{
$x=$hours*3600;
$y=$mins*60;
$t=$x+$y+$seconds;

$a=strtotime($d);
$y=$a-$t;
$o=date('H:i:s',$y);
$n=date('H:i:s',$t);




}
     
     
     
	
     $sql = "INSERT INTO `reset` (`start1`,`end1`,`poste1`,`prix1`,`time2`,`date2`) VALUES ('$o','$d','$k','$money','$n','$f')";
     
  
     // insert in database 
     $rs = mysqli_query($conn, $sql);

   }
}

?>