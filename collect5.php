<?php
error_reporting(0);
ini_set('display_errors', 0);

if(isset($_POST['money5'])||isset($_POST['hours5'])||isset($_POST['mins5'])||isset($_POST['secs5']))
   {
   $servername='localhost';
   $username='root';
   $password='gamenight01';
   $dbname = "khalil";
   $conn=mysqli_connect($servername,$username,$password,"$dbname");
  
   
     $money5=$_POST['money5'];
   

     
     $hours5=$_POST['hours5'];
     $mins5=$_POST['mins5'];
     $seconds5=$_POST['seconds5'];
     
   $tarifA_error = '';
   $tarifB_error = '';
   $tarifC_error = '';


   if(empty($money5))
   {
       $tarifA_error = 'TarifA is Required';
   }
   else
   {
       if(empty($hours5))
       {
           $tarifB_error = 'TarifB is Required';
       }
   }

   if(empty($mins5))
   {
       $tarifC_error = 'tarifC is Required';
   }
   if(empty($seconds5))
   {
       $tarifC_error = 'tarifC is Required';
   }
   

   if($tarifA_error == '' && $tarifB_error == '' && $tarifC_error == '')
   {
    
	 $t5 = $hours5.$mins5.$seconds5;
     $f = date('d-m-Y');
	 $d = date('H:i:s');
     $k="POST 6 ";
     if(is_numeric($hours5)||
     is_numeric($mins5)||
     is_numeric($seconds5))
     {
     $x=$hours5*3600;
     $y=$mins5*60;
     $t=$x+$y+$seconds5;
     
     $a=strtotime($d);
     $y=$a-$t;
     $o=date('H:i:s',$y);
     $n=date('H:i:s',$t);
     
     
     
     
     }
          
          
          
         
          $sql = "INSERT INTO `history` (`start`,`end`,`post`,`prix`,`time1`,`date1`) VALUES ('$o','$d','$k','$money5','$n','$f')";
  
  
     // insert in database 
     $rs = mysqli_query($conn, $sql);
     if($rs)
{
   
    echo "POST 6 SUCESSFULLY SENT TO HISTORY";
}
   }
   }

?>