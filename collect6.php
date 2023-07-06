<?php
error_reporting(0);
ini_set('display_errors', 0);

if(isset($_POST['money6'])||isset($_POST['hours6'])||isset($_POST['mins6'])||isset($_POST['secs6']))
   {
   $servername='localhost';
   $username='root';
   $password='gamenight01';
   $dbname = "khalil";
   $conn=mysqli_connect($servername,$username,$password,"$dbname");
   
   
     $money6=$_POST['money6'];
   

     
     $hours6=$_POST['hours6'];
     $mins6=$_POST['mins6'];
     $seconds6=$_POST['seconds6'];
     
   $tarifA_error = '';
   $tarifB_error = '';
   $tarifC_error = '';


   if(empty($money6))
   {
       $tarifA_error = 'TarifA is Required';
   }
   else
   {
       if(empty($hours6))
       {
           $tarifB_error = 'TarifB is Required';
       }
   }

   if(empty($mins6))
   {
       $tarifC_error = 'tarifC is Required';
   }
   if(empty($seconds6))
   {
       $tarifC_error = 'tarifC is Required';
   }
   

   if($tarifA_error == '' && $tarifB_error == '' && $tarifC_error == '')
   {
    
	 $t6 = $hours6.$mins6.$seconds6;
     $f = date('d-m-Y');
	 $d = date('H:i:s');
     $k="POST 7 ";
     if(is_numeric($hours6)||
     is_numeric($mins6)||
     is_numeric($seconds6))
     {
     $x=$hours6*3600;
     $y=$mins6*60;
     $t=$x+$y+$seconds6;
     
     $a=strtotime($d);
     $y=$a-$t;
     $o=date('H:i:s',$y);
     $n=date('H:i:s',$t);
     
     
     
     
     }
          
          
          
         
          $sql = "INSERT INTO `history` (`start`,`end`,`post`,`prix`,`time1`,`date1`) VALUES ('$o','$d','$k','$money6','$n','$f')";
  
     // insert in database 
     $rs = mysqli_query($conn, $sql);
     if($rs)
{
   
    echo "POST 7 SUCESSFULLY SENT TO HISTORY";
}
   }
   }

?>