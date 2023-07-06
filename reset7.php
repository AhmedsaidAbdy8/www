
<?php
error_reporting(0);
ini_set('display_errors', 0);

if(isset($_POST['money7'])||isset($_POST['hours7'])||isset($_POST['mins7'])||isset($_POST['secs7']))
   {
   $servername='localhost';
   $username='root';
   $password='gamenight01';
   $dbname = "khalil";
   $conn=mysqli_connect($servername,$username,$password,"$dbname");
   
   
     $money7=$_POST['money7'];
   

     
     $hours7=$_POST['hours7'];
     $mins7=$_POST['mins7'];
     $seconds7=$_POST['seconds7'];
     
   $tarifA_error = '';
   $tarifB_error = '';
   $tarifC_error = '';


   if(empty($money7))
   {
       $tarifA_error = 'TarifA is Required';
   }
   else
   {
       if(empty($hours7))
       {
           $tarifB_error = 'TarifB is Required';
       }
   }

   if(empty($mins7))
   {
       $tarifC_error = 'tarifC is Required';
   }
   if(empty($seconds7))
   {
       $tarifC_error = 'tarifC is Required';
   }
   

   if($tarifA_error == '' && $tarifB_error == '' && $tarifC_error == '')
   {
    
	 $t = $hours7.$mins7.$seconds7;
     $f = date('d-m-Y');
	 $d = date('H:i:s');
     $k="POST 8 ";
     if(is_numeric($hours7)||
     is_numeric($mins7)||
     is_numeric($seconds7))
     {
     $x=$hours7*3600;
     $y=$mins7*60;
     $t=$x+$y+$seconds7;
     
     $a=strtotime($d);
     $y=$a-$t;
     $o=date('H:i:s',$y);
     $n=date('H:i:s',$t);
     
     
     
     
     }
          
          
          
         
          $sql = "INSERT INTO `reset` (`start1`,`end1`,`poste1`,`prix1`,`time2`,`date2`) VALUES ('$o','$d','$k','$money7','$n','$f')";
     
  
     // insert in database 
     $rs = mysqli_query($conn, $sql);

   }
   }

?>