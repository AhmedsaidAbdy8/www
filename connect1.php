
<?php
if(isset($_POST["TarifA1"]))
{
   sleep(5);
   $connect = new mysqli("localhost","root", "gamenight01","khalil");
   
   $success = '';

   $tarifA1 = $_POST["TarifA1"];

   $tarifB1 = $_POST["TarifB1"];
   

   $tarifC1 = $_POST["TarifC1"];

   

   $tarifA1_error = '';
   $tarifB1_error = '';
   $tarifC1_error = '';


   if(empty($tarifA1))
   {
       $tarifA1_error = 'TarifA1 is Required';
   }
   else
   {
       if(empty($tarifB1))
       {
           $tarifB1_error = 'TarifB1 is Required';
       }
   }

   if(empty($tarifC1))
   {
       $tarifC1_error = 'tarifC1 is Required';
   }
   

   if($tarifA1_error == '' && $tarifB1_error == '' && $tarifC1_error == '')
   {
       //put insert data code here 

       
       

       //database insert SQL code
$sql = "INSERT INTO `tarifs1` (`TarifA1`, `TarifB1`, `TarifC1`) VALUES ('$tarifA1', '$tarifB1', '$tarifC1')";

// insert in database 
$rs = mysqli_query($connect, $sql);

if($rs)
{
   
   $success= "done";
}

}
}

?>