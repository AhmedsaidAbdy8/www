
<?php
error_reporting(0);
ini_set('display_errors', 0);

if(isset($_POST['money1'])||isset($_POST['hours1'])||isset($_POST['mins1'])||isset($_POST['secs1']))
   {
   $servername='localhost';
   $username='root';
   $password='gamenight01';
   $dbname = "khalil";
   $conn=mysqli_connect($servername,$username,$password,"$dbname");
   
   
     $money1=$_POST['money1'];
   

     
     $hours1=$_POST['hours1'];
     $mins1=$_POST['mins1'];
     $seconds1=$_POST['seconds1'];
     
   $tarifA_error = '';
   $tarifB_error = '';
   $tarifC_error = '';


   if(empty($money1))
   {
       $tarifA_error = 'TarifA is Required';
   }
   else
   {
       if(empty($hours1))
       {
           $tarifB_error = 'TarifB is Required';
       }
   }

   if(empty($mins1))
   {
       $tarifC_error = 'tarifC is Required';
   }
   if(empty($seconds1))
   {
       $tarifC_error = 'tarifC is Required';
   }
   

   if($tarifA_error == '' && $tarifB_error == '' && $tarifC_error == '')
   {
    
	 $t = $hours1.$mins1.$seconds1;
	 $f = date('d-m-Y');
	 $d = date('H:i:s');
     $k="POST 2 ";
     if(is_numeric($hours1)||
is_numeric($mins1)||
is_numeric($seconds1))
{
$x=$hours1*3600;
$y=$mins1*60;
$t=$x+$y+$seconds1;

$a=strtotime($d);
$y=$a-$t;
$o=date('H:i:s',$y);
$n=date('H:i:s',$t);




}
     
     
     
	
     $sql = "INSERT INTO `reset` (`start1`,`end1`,`poste1`,`prix1`,`time2`,`date2`) VALUES ('$o','$d','$k','$money1','$n','$f')";
     
  
     // insert in database 
     $rs = mysqli_query($conn, $sql);

   }
   }

?>