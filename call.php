<!DOCTYPE html>
<html lang="en">
	<script type="text/javascript">
        window.addEventListener('beforeunload', function (e) {
            e.preventDefault();
            e.returnValue = '';
            
        });
    </script>
    <script>
    function history () {
        console.log(this.responseText);
      }
  
      var oReq = new XMLHttpRequest(); 
      oReq.onload = function() {
          
        ok= (this.responseText);


        echo(ok);
         
            
          
         
      };
      oReq.open("get", "history.php", true);
     
      oReq.send();
    
        
        
    
    
    </script>

<head>
    <!--
     - Roxy: Bootstrap template by GettTemplates.com
     - https://gettemplates.co/roxy
    -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Gamenight Sahloul</title>
    <meta name="description" content="Roxy">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- External CSS -->
    <link rel="stylesheet" href="vendor/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/select2/select2.min.css">
    <link rel="stylesheet" href="vendor/owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="vendor/lightcase/lightcase.css">
     <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400|Work+Sans:300,400,700" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.min.css">
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <!-- Modernizr JS for IE8 support of HTML5 elements and media queries -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>

</head>
<body data-spy="scroll" data-target="#navbar" class="static-layout"  >
	<div id="side-nav" class="sidenav">
	<a href="javascript:void(0)" id="side-nav-close">&times;</a>
	
	<div class="sidenav-content">
		<p>
			ALL RIGHTS RESERVED FOR © 2022
		</p>
		<p>
			<span class="fs-16 primary-color">WWA</span>
		</p>
		<p>MAU X TN </p>
	</div>
</div>	<div id="side-search" class="sidenav">
	<a href="javascript:void(0)" id="side-search-close">&times;</a>
	<div class="sidenav-content">
    <h1>List of Employees</h1>
    <br>
    <table class="table">
        <thead>
			<tr>
				<th>ID</th>
				<th>Date</th>
				<th>Time</th>
				<th>Price</th>
				<th>Phone</th>
				
			</tr>
		</thead>
    <?php
 $servername='localhost';
 $username='root';
 $password='';
 $dbname = "khalil";
 $conn=mysqli_connect($servername,$username,$password,"$dbname");
 if($conn){print_r("connected ");}
 $sql = "SELECT * FROM `history` WHERE 1";
 $rs = mysqli_query($conn,$sql) or die("error");
 echo '
    <table>
    <style>
    body{
        background: radial-gradient(rgb(18, 3, 41),rgba(0, 0, 0, 0.5),rgba(145, 23, 137, 0.2));
        text-align: center;
    }
    #name{
        margin-top: 50px;
    }
    .input{
        font-size: 25px;
        color: #4715c8;
        font-weight: 700;
        font-family: cursive;
    }
    #entry{
        width: 150px;
        height: 40px;
        font-size: 23px;
        font-family:  cursive;
        background-color: #001a66;
        color: whitesmoke;
        box-shadow: 0 2px 2px 0 rgba(0,0,0,0.5);
        margin: 20px;
    }
    table{
        border-collapse: collapse;
        width: 50%;
        margin: 50px auto;
        background-color: rgb(124, 22, 187);
    }
    table,th,td{
       border: 2px solid black;
       padding:5px;

    }
    th{
        font-size: 30px;
        font-weight: 700;
        font-family: Arial;
        color: #30098b;
    }
    td{
        font-size: 25px;
        color: crimson;
        font-weight: 400;
        font-family: Georgia;
    }
    .length{
        width: 20%;
    }
</style>
        <thead>
            <tr>
                <th>id</th>
                <th> DATE</th>
                <th> TIME</th>
                <th> PRICE</th>
                
            </tr>
        </thead>
        <tbody>';
while($row = mysqli_fetch_array($rs)) {
    echo '<td>'.$row['id1'].'</td>';
    
    echo '<td>'.$row['prix'].'</td>';
  
    echo '<td>'.$row['time1'].'</td>';
    
    echo '<td>'.$row['date1'].'</td>';
    
}
echo '
        </tbody>
    </table>';

 ?>

			
            

		</form>
	</div>
	
</div>	<nav id="header-navbar" class="navbar navbar-expand-lg py-4">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center text-white" href="/">
            <h3 class="font-weight-bolder mb-0">GAMENIGHT</h3>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-nav-header" aria-controls="navbar-nav-header" aria-expanded="false" aria-label="Toggle navigation">
            <span class="lnr lnr-menu"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar-nav-header">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost/home.html"target ="_blank"id="home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost/history.html"target="_blank">History</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost/posts.html"target="_blank">Posts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost/setting.html"target="_blank">Settings</a>
                </li>
                <li class="nav-item">
                    <a id="side-search-open" class="nav-link" href="#">
                        <span class="lnr lnr-magnifier"></span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div id="side-nav" class="sidenav">
	<a href="javascript:void(0)" id="side-nav-close">&times;</a>
	
	<div class="sidenav-content">
		<p>
			Kuncen WB1, Wirobrajan 10010, DIY
		</p>
		<p>
			<span class="fs-16 primary-color">(+68) 120034509</span>
		</p>
		<p>info@yourdomain.com</p>
	</div>
</div><div id="side-search" class="sidenav">
	<a href="javascript:void(0)" id="side-search-close">&times;</a>
	<div class="sidenav-content">
		<form action="">

			<div class="input-group md-form form-sm form-2 pl-0">
			  <input class="form-control my-0 py-1 red-border" type="text" placeholder="Search" aria-label="Search">
			  <div class="input-group-append">
			    <button class="input-group-text red lighten-3" id="basic-text1">
			    	<span class="lnr lnr-magnifier"></span>
			    </button>
			  </div>
			</div>
      <?php
 $servername='localhost';
 $username='root';
 $password='';
 $dbname = "khalil";
 $conn=mysqli_connect($servername,$username,$password,"$dbname");
 if($conn){print_r("connected ");}
 $sql = "SELECT * FROM `history` WHERE 1";
 $rs = mysqli_query($conn,$sql) or die("error");
 echo '
    <table>
    <style>
    body{
        background: radial-gradient(rgb(18, 3, 41),rgba(0, 0, 0, 0.5),rgba(145, 23, 137, 0.2));
        text-align: center;
    }
    #name{
        margin-top: 50px;
    }
    .input{
        font-size: 25px;
        color: #4715c8;
        font-weight: 700;
        font-family: cursive;
    }
    #entry{
        width: 150px;
        height: 40px;
        font-size: 23px;
        font-family:  cursive;
        background-color: #001a66;
        color: whitesmoke;
        box-shadow: 0 2px 2px 0 rgba(0,0,0,0.5);
        margin: 20px;
    }
    table{
        border-collapse: collapse;
        width: 50%;
        margin: 50px auto;
        background-color: rgb(124, 22, 187);
    }
    table,th,td{
       border: 2px solid black;
       padding:5px;

    }
    th{
        font-size: 30px;
        font-weight: 700;
        font-family: Arial;
        color: #30098b;
    }
    td{
        font-size: 25px;
        color: crimson;
        font-weight: 400;
        font-family: Georgia;
    }
    .length{
        width: 20%;
    }
</style>
        <thead>
            <tr>
                <th>id</th>
                <th> DATE</th>
                <th> TIME</th>
                <th> PRICE</th>
                
            </tr>
        </thead>
        <tbody>';
while($row = mysqli_fetch_array($rs)) {
    echo '<td>'.$row['id1'].'</td>';
    
    echo '<td>'.$row['prix'].'</td>';
  
    echo '<td>'.$row['time1'].'</td>';
    
    echo '<td>'.$row['date1'].'</td>';
    
}
echo '
        </tbody>
    </table>';
 if ($rs)
 {echo'successfully recieved your data';}
 ?>

		</form>
	</div>
	
</div>	<div class="jumbotron jumbotron-single d-flex align-items-center" style="background-image: url(img/billard.jpg)">
  <div class="container text-center">
    <button type="button" value="history" id="history"onclick="history()" class="btn btn-success mt-2 p-2 mb-2" >Show History</button>
        
    
   
  </div>

</footer>	<!-- External JS -->
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
	<script src="vendor/bootstrap/popper.min.js"></script>
	<script src="vendor/bootstrap/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js "></script>
	<script src="vendor/owlcarousel/owl.carousel.min.js"></script>
	<script src="vendor/stellar/jquery.stellar.js" type="text/javascript" charset="utf-8"></script>
	<script src="vendor/isotope/isotope.min.js"></script>
	<script src="vendor/lightcase/lightcase.js"></script>
	<script src="vendor/waypoints/waypoint.min.js"></script>
	 <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
	 
	<!-- Main JS -->
	<script src="js/app.min.js "></script>
	<script src="//localhost:35729/livereload.js"></script>
</body>
</html>
