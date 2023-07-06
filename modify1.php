
<?php
if(isset($_POST["TarifA1"])||isset($_POST["TarifB1"])||isset($_POST["TarifC1"]))
{
   sleep(5);
   $connect = new mysqli("localhost","root", "gamenight01","khalil");
   
   $success = '';
   

   $TarifA1 = $_POST["TarifA1"];

   $TarifB1 = $_POST["TarifB1"];

   $TarifC1 = $_POST["TarifC1"];

 

   $TarifA1_error = '';
   $TarifB1_error = '';
   $TarifC1_error = '';


   if(empty($TarifA1))
   {
       $TarifA1_error = 'TarifA is Required';
   }
   else
   {
       if(empty($TarifB1))
       {
           $TarifB1_error = 'TarifB is Required';
       }
   }

   if(empty($TarifC1))
   {
       $TarifC1_error = 'tarifC is Required';
   }
   

   if($TarifA1_error == '' && $TarifB1_error == '' && $TarifC1_error == '')
   {
       //put insert data code here 

       
       

       //database insert SQL code
$sql = "UPDATE `tarifs1` SET `TarifA1`='$TarifA1',`TarifB1`='$TarifB1',`TarifC1`='$TarifC1' WHERE `id1`=1";

// insert in database 
$rs = mysqli_query($connect, $sql);

if($rs)
{
   
   echo "SUCCESSFULLY UPDATED YOUR PS5 TARIFS ";
}
   }
   }
?>