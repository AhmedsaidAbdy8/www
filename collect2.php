<?php
     error_reporting(0);
     ini_set('display_errors', 0);

if(isset($_POST['money2'])||isset($_POST['hours2'])||isset($_POST['mins2'])||isset($_POST['secs2']))
   {
   $servername='localhost';
   $username='root';
   $password='gamenight01';
   $dbname = "khalil";
   $conn=mysqli_connect($servername,$username,$password,"$dbname");
   
   
     $money2=$_POST['money2'];
   

     
     $hours2=$_POST['hours2'];
     $mins2=$_POST['mins2'];
     $seconds2=$_POST['seconds2'];
     
   $tarifA_error = '';
   $tarifB_error = '';
   $tarifC_error = '';


   if(empty($money2))
   {
       $tarifA_error = 'TarifA is Required';
   }
   else
   {
       if(empty($hours2))
       {
           $tarifB_error = 'TarifB is Required';
       }
   }

   if(empty($mins2))
   {
       $tarifC_error = 'tarifC is Required';
   }
   if(empty($seconds2))
   {
       $tarifC_error = 'tarifC is Required';
   }
   

   if($tarifA_error == '' && $tarifB_error == '' && $tarifC_error == '')
   {
    
	 $t2 = $hours2.$mins2.$seconds2;
     $f = date('d-m-Y');
	 $d = date('H:i:s');
     $k="POST 3 ";
     if(is_numeric($hours2)||
     is_numeric($mins2)||
     is_numeric($seconds2))
     {
     $x=$hours2*3600;
     $y=$mins2*60;
     $t=$x+$y+$seconds2;
     
     $a=strtotime($d);
     $y=$a-$t;
     $o=date('H:i:s',$y);
     $n=date('H:i:s',$t);
     
     
     
     
     }
          
          
          
         
          $sql = "INSERT INTO `history` (`start`,`end`,`post`,`prix`,`time1`,`date1`) VALUES ('$o','$d','$k','$money2','$n','$f')";
  
     // insert in database 
     $rs = mysqli_query($conn, $sql);
     if($rs)
{
   
    echo "POST 3 SUCESSFULLY SENT TO HISTORY";
}
   }
   }

?>