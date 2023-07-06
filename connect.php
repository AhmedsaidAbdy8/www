
<?php
 if(isset($_POST["TarifA"]))
{print_r("done");
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
$sql = "INSERT INTO `tarifs` (`TarifA`, `TarifB`, `tarifC`) VALUES ('$tarifA', '$tarifB', '$tarifC')";

// insert in database 
$rs = mysqli_query($connect, $sql);

if($rs)
{
	
	$success= "done";
}

}
}

?>