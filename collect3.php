<?php
error_reporting(0);
ini_set('display_errors', 0);

if(isset($_POST['money3'])||isset($_POST['hours3'])||isset($_POST['mins3'])||isset($_POST['secs3']))
   {
   $servername='localhost';
   $username='root';
   $password='gamenight01';
   $dbname = "khalil";
   $conn=mysqli_connect($servername,$username,$password,"$dbname");
  
   
     $money3=$_POST['money3'];
   

     
     $hours3=$_POST['hours3'];
     $mins3=$_POST['mins3'];
     $seconds3=$_POST['seconds3'];
     
   $tarifA_error = '';
   $tarifB_error = '';
   $tarifC_error = '';


   if(empty($money3))
   {
       $tarifA_error = 'TarifA is Required';
   }
   else
   {
       if(empty($hours3))
       {
           $tarifB_error = 'TarifB is Required';
       }
   }

   if(empty($mins3))
   {
       $tarifC_error = 'tarifC is Required';
   }
   if(empty($seconds3))
   {
       $tarifC_error = 'tarifC is Required';
   }
   

   if($tarifA_error == '' && $tarifB_error == '' && $tarifC_error == '')
   {
    
	 $t3 = $hours3.$mins3.$seconds3;
     $f = date('d-m-Y');
	 $d = date('H:i:s');
     $k="POST 4 ";
     if(is_numeric($hours3)||
     is_numeric($mins3)||
     is_numeric($seconds3))
     {
     $x=$hours3*3600;
     $y=$mins3*60;
     $t=$x+$y+$seconds3;
     
     $a=strtotime($d);
     $y=$a-$t;
     $o=date('H:i:s',$y);
     $n=date('H:i:s',$t);
     
     
     
     
     }
          
          
          
         
          $sql = "INSERT INTO `history` (`start`,`end`,`post`,`prix`,`time1`,`date1`) VALUES ('$o','$d','$k','$money3','$n','$f')";
     // insert in database 
     $rs = mysqli_query($conn, $sql);
     if($rs)
{
   
   echo " POST 4 SUCESSFULLY SENT TO HISTORY";
}
   }
   }

?>