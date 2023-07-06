<!DOCTYPE html>
<html lang="en">


    <script>
        function refresh()
        {location.reload();}
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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <!-- Modernizr JS for IE8 support of HTML5 elements and media queries -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>

</head>
<body data-spy="scroll" data-target="#navbar" class="static-layout">
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
		<form action="">

			<div class="input-group md-form form-sm form-2 pl-0">
			  <input class="form-control my-0 py-1 red-border" type="text" placeholder="Search" aria-label="Search">
			  <div class="input-group-append">
			    <button class="input-group-text red lighten-3" id="basic-text1">
			    	<span class="lnr lnr-magnifier"></span>
			    </button>
			  </div>
			</div>

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
             
            </ul>
        </div>
    </div>
</nav>

<div id="side-nav" class="sidenav">
	<a href="javascript:void(0)" id="side-nav-close">&times;</a>
	
	<div class="sidenav-content">
		<p>
			Wassim Jaber,Gabes,Tunisia
		</p>
		<p>
			<span class="fs-16 primary-color">(+216 ) 29522751</span>
		</p>
		<p>wassimjabar@gmail.com</p>
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

		</form>
	</div>
	
</div>	
<div class="jumbotron jumbotron-single d-flex align-items-center" style="background-image: url(img/billard.jpg)">
<div class="website"><h2 id ="messagedisplay"></div>

 
    <div class="container text-center">
      <form id ="his" method="post">
        <table>
        <button id="start3"class="btn btn-outline-success mt-2 p-2 mb-2"onclick="refresh()">Refresh History</button>

<tr>
<td><a href="history.php"></a></td>

</tr>

      <?php
 $servername='localhost';
 $username='root';
 $password='gamenight01';
 $dbname = "khalil";
 $conn=mysqli_connect($servername,$username,$password,"$dbname");
 
 $sql = "SELECT * FROM `history` ORDER BY id1 DESC";
 $rs = mysqli_query($conn,$sql) or die("error");
 echo '
    
 <style >
 h2{
     color:red;}
 .content-table{
  border-collapse: collapse;
  margin: 25px 0;
  font-size: 0.9em;
  min-width: 1000px;
  border-radius:5px 5px 0 0;
  overflow: hidden;
  box-shadow: 0 0 20px rgba(0,0,0,0.15);
}
  .content-table thead tr {
      background-color: #3333ff;
      text-align: center;
      font-weight: bold;
  
  }
  .content-table th,
  .content-table td{
      padding :30px 30px;
  }
  .content-table tbody tr{
      border-bottom: 1px  solid #1c2258;
      text-color:black;
  }
  .content-table tbody tr:nth-of-type(even){
      background-color:#090c4513;}
      .content-table tr:last-of-type{
          border-bottom:2px solid #3333ff;
      }
      .content-table tbody tr.active-row{
          font-weight: bold;
          color:#3333ff;
      }
      

</style>
<table class="content-table">
        <thead>
            <tr class="active-row">
                <th> GAME NUMBER</th>
                <th> POST </th>
                <th> PRICE</th>
                <th> TIME PLAYED</th>
                <th> DATE </th>
                <th> STARTS</th>
                <th> ENDS</th>
                
                
                
            </tr>
        </thead>
        <tbody>';
while($row = mysqli_fetch_array($rs)) {
 echo '<tr>';
 '<select name="test" style="color: red;">';
    echo '<td>'.$row['id1'].'</td>';
    echo '<td>'.$row['post'].'</td>';
    echo '<td>'.$row['prix'].'</td>';
  
    echo '<td>'.$row['time1'].'</td>';
    
    
    echo '<td>'.$row['date1'].'</td>';
    echo '<td>'.$row['start'].'</td>';
    echo '<td>'.$row['end'].'</td>';

    echo '</tr>';
   ' </select>';
}


        '</tbody>
    </table>';

 ?>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="collapse multi-collapse" id="multiCollapseExample2">
      <div class="card card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
      </div>
    </div>
  </div>
</div>
        
        
        
        
        
        </form>
  
    
 
        
    
   
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
    <script src="history.js"></script>
</body>
</html>
