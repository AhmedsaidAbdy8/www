
<?php
error_reporting(0);
ini_set('display_errors', 0);

if(isset($_POST['money4'])||isset($_POST['hours4'])||isset($_POST['mins4'])||isset($_POST['secs4']))
   {
   $servername='localhost';
   $username='root';
   $password='gamenight01';
   $dbname = "khalil";
   $conn=mysqli_connect($servername,$username,$password,"$dbname");
   
   
     $money4=$_POST['money4'];
   

     
     $hours4=$_POST['hours4'];
     $mins4=$_POST['mins4'];
     $seconds4=$_POST['seconds4'];
     
   $tarifA_error = '';
   $tarifB_error = '';
   $tarifC_error = '';


   if(empty($money4))
   {
       $tarifA_error = 'TarifA is Required';
   }
   else
   {
       if(empty($hours4))
       {
           $tarifB_error = 'TarifB is Required';
       }
   }

   if(empty($mins4))
   {
       $tarifC_error = 'tarifC is Required';
   }
   if(empty($seconds4))
   {
       $tarifC_error = 'tarifC is Required';
   }
   

   if($tarifA_error == '' && $tarifB_error == '' && $tarifC_error == '')
   {
    
	 $t = $hours4.$mins4.$seconds4;
     $f = date('d-m-Y');
	 $d = date('H:i:s');
     $k="POST 5 ";
     if(is_numeric($hours4)||
     is_numeric($mins4)||
     is_numeric($seconds4))
     {
     $x=$hours4*3600;
     $y=$mins4*60;
     $t=$x+$y+$seconds4;
     
     $a=strtotime($d);
     $y=$a-$t;
     $o=date('H:i:s',$y);
     $n=date('H:i:s',$t);
     
     
     
     
     }
          
          
          
         
          $sql = "INSERT INTO `reset` (`start1`,`end1`,`poste1`,`prix1`,`time2`,`date2`) VALUES ('$o','$d','$k','$money4','$n','$f')";
     
  
     // insert in database 
     $rs = mysqli_query($conn, $sql);

   }
   }

?>