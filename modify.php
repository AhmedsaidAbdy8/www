
<?php

if(isset($_POST["TarifA"])||isset($_POST["TarifB"])||isset($_POST["tarifC"]))
{
   sleep(5);
   $connect = new mysqli("localhost","root", "gamenight01","khalil");
   
   $success = '';
 

   $tarifA = $_POST["TarifA"];

   $tarifB = $_POST["TarifB"];

   $tarifC = $_POST["tarifC"];

 

   $tarifA_error = '';
   $tarifB_error = '';
   $tarifC_error = '';


   if(empty($tarifA))
   {
       $tarifA_error = 'TarifA is Required';
   }
   else
   {
       if(empty($tarifB))
       {
           $tarifB_error = 'TarifB is Required';
       }
   }

   if(empty($tarifC))
   {
       $tarifC_error = 'tarifC is Required';
   }
   

   if($tarifA_error == '' && $tarifB_error == '' && $tarifC_error == '')
   {
       //put insert data code here 

       
       

       //database insert SQL code
$sql = "UPDATE `tarifs` SET `TarifA`='$tarifA',`TarifB`='$tarifB',`tarifC`='$tarifC' WHERE `id`=1";

// insert in database 
$rs = mysqli_query($connect, $sql);

if($rs)
{
   
    echo "SUCCESSFULLY UPDATED YOUR PS4 TARIFS ";
}
   }
   }
?>