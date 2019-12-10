<?php
include "../../core/StatistiqueC.php";
$statistiquec1=new StatistiqueC();
$listestats=$statistiquec1->afficherStatistiques();
$s=0;
$c=0;
$cl=0;
$p=0;
foreach($listestats as $row){
  
$categorie=$row['Categorie'];
if ($categorie == "Stock")
{
    $s=1;
}
if ($categorie == "Commande")
{
    $c=1;
}
if ($categorie == "Promotion")
{
    $p=1;
}
if ($categorie == "Client")
{
    $cl=1;
}


  }


?>

<?php  session_start(); 
 if (empty($_SESSION['id']))
 {
     echo "<script type='text/javascript'>";
echo "alert('Please Login First');
window.location.href='login.php';";
echo "</script>";
     
 }
?>


<!---------------------------------------------------------------------------------------->
<!---------------------------------START STAT Produit------------------------------------------->
<!---------------------------------------------------------------------------------------->
<?Php
$host_name = "localhost";
$database = "projetintegre"; // Change your database name
$username = "root";          // Your database user id 
$password = "";          // Your password

//error_reporting(0);// With this no error reporting will be there
//////// Do not Edit below /////////

$connection = mysqli_connect($host_name, $username, $password, $database);
if ($s == 1 )
{


if (!$connection) 
{
    echo "Error: Unable to connect to MySQL.<br>";
    echo "<br>Debugging errno: " . mysqli_connect_errno();
    echo "<br>Debugging error: " . mysqli_connect_error();
    exit;
}


if($stmt = $connection->query("SELECT nom,quantite  FROM produit"))

{

$php_data_array = Array(); // create PHP array
while ($row = $stmt->fetch_row()) 
   {
   $php_data_array[] = $row; // Adding to array
   }
}
else
{
echo $connection->error;
}
//print_r( $php_data_array);
// You can display the json_encode output here. 


// Transfor PHP array to JavaScript two dimensional array 
echo "<script>
        var my_2d = ".json_encode($php_data_array)."
</script>";

}

?>

<!---------------------------------------------------------------------------------------->
<!--------------------------------- END STAT Produit------------------------------------------->
<!---------------------------------------------------------------------------------------->

<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="refresh"  content="5">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="../assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/libs/css/style.css">
    <link rel="stylesheet" href="../assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <title>Concept - Bootstrap 4 Admin Dashboard Template</title>
    </head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
         <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
         <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="../index.html">Concept</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        <li class="nav-item">
                            <div id="custom-search" class="top-search-bar">
                                <input class="form-control" type="text" placeholder="Search..">
                            </div>
                        </li>
                        <li class="nav-item dropdown notification">
                            <a class="nav-link nav-icons" href="#" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-fw fa-bell"></i> <span class="indicator"></span></a>
                            <ul class="dropdown-menu dropdown-menu-right notification-dropdown">
                                <li>
                                    <div class="notification-title"> Notification</div>
                                    <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 250px;"><div class="notification-list" style="overflow: hidden; width: auto; height: 250px;">
                                        <div class="list-group">
                                            <a href="#" class="list-group-item list-group-item-action active">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="../assets/images/avatar-2.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">Jeremy Rakestraw</span>accepted your invitation to join the team.
                                                        <div class="notification-date">2 min ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="../assets/images/avatar-3.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">
John Abraham</span>is now following you
                                                        <div class="notification-date">2 days ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="../assets/images/avatar-4.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">Monaan Pechi</span> is watching your main repository
                                                        <div class="notification-date">2 min ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="../assets/images/avatar-5.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">Jessica Caruso</span>accepted your invitation to join the team.
                                                        <div class="notification-date">2 min ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div><div class="slimScrollBar" style="background: rgb(0, 0, 0); width: 7px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 1px;"></div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div></div>
                                </li>
                                <li>
                                    <div class="list-footer"> <a href="#">View all notifications</a></div>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown connection">
                            <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fas fa-fw fa-th"></i> </a>
                            <ul class="dropdown-menu dropdown-menu-right connection-dropdown">
                                <li class="connection-list">
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="../assets/images/github.png" alt=""> <span>Github</span></a>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="../assets/images/dribbble.png" alt=""> <span>Dribbble</span></a>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="../assets/images/dropbox.png" alt=""> <span>Dropbox</span></a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="../assets/images/bitbucket.png" alt=""> <span>Bitbucket</span></a>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="../assets/images/mail_chimp.png" alt=""><span>Mail chimp</span></a>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="../assets/images/slack.png" alt=""> <span>Slack</span></a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="conntection-footer"><a href="#">More</a></div>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown nav-user">
                            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../assets/images/avatar-1.jpg" alt="" class="user-avatar-md rounded-circle"></a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                <div class="nav-user-info">
                                    <h5 class="mb-0 text-white nav-user-name">
John Abraham</h5>
                                    <span class="status"></span><span class="ml-2">Available</span>
                                </div>
                                <a class="dropdown-item" href="#"><i class="fas fa-user mr-2"></i>Account</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-cog mr-2"></i>Setting</a>
                                <a class="dropdown-item" href="../../core/logout.php"><i class="fas fa-power-off mr-2"></i>Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
       <div class="nav-left-sidebar sidebar-dark">
            <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 100%;"><div class="menu-list" style="overflow: hidden; width: auto; height: 100%;">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                Menu
                            </li>
                            
                            
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="true" data-target="#submenu-3" aria-controls="submenu-3"><i class="fas fa-fw fa-chart-pie"></i>Statistique</a>
                                <div id="submenu-3" class="submenu collapse show" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="affichage_historique.php">Tableau Des Historiques</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="ajouter_stat.php">Sélectionner Statistique
                                    </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="affichage_Tableau_statistique.php">Tableau des Statistique
                                    </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="chart.php">Afficher les Statistique
                                    </a>
                                        </li>
                                        
                                        
                                    </ul>
                                </div>
                            </li>
                            
                            
                            
                       <li class="nav-item">
                                            <a >|</a>

 </li>                       

  <li class="nav-item">
                                            <a >|</a>

 </li>  

 <li class="nav-item">
                                            <a >|</a>

 </li>     
 <li class="nav-item">
                                            <a >|</a>

 </li>                       

  <li class="nav-item">
                                            <a >|</a>

 </li>  

 <li class="nav-item">
                                            <a >|</a>
 </li>      

   <li class="nav-item">
                                            <a >|</a>
 </li>  
 

  <li class="nav-item">
                                            <a style="font-size: 30px; " href="http://localhost/wetransfer/back_integre/views/">Menu Principal</a>

 </li>        
                            
                            
                            
                            
                        </ul>
                    </div>
                </nav>
            </div><div class="slimScrollBar" style="background: rgb(0, 0, 0); width: 7px; position: absolute; top: -0.4px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 1px; height: 354.8px;"></div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div></div>
        </div>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="container-fluid  dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Statistique </h2>
                            <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Menu</a></li>
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Statistique</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Affichage</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader -->
                <!-- ============================================================== -->
             
                    <div class="row">
                        <!-- ============================================================== -->
                        <!-- bar chart  -->
                        <!-- ============================================================== -->
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Stock Des Produits</h5>
                                <div class="card-body">
                                    <div class="spark-chart">
<!------------------------------------------------------------------------------------------------>
<!---------------------------------------affichage stat Produit--------------------------------->
                                         <div id="chart_div"></div>
  <!------------------------------------------------------------------------------------------------>                                       
<!------------------------------------------------------------------------------------------------>

                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end bar chart  -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- line chart  -->
                        <!-- ============================================================== -->
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Min & Max (Promotion)</h5>
                                <div class="card-body">
                                    <div class="spark-chart">
                                        
<!------------------------------------------------------------------------------------------------>
<!---------------------------------------affichage stat promotion--------------------------------->
<!------------------------------------------------------------------------------------------------>
<table class="tablePromo" border="3 " cellspacing="10" cellpadding="20" style="background-color: lightgrey;" >
<?Php
$host_name = "localhost";
$database = "projetintegre"; // Change your database name
$username = "root";          // Your database user id 
$password = "";          // Your password

//error_reporting(0);// With this no error reporting will be there
//////// Do not Edit below /////////

$connection = mysqli_connect($host_name, $username, $password, $database);

if (!$connection) {
    echo "Error: Unable to connect to MySQL.<br>";
    echo "<br>Debugging errno: " . mysqli_connect_errno();
    echo "<br>Debugging error: " . mysqli_connect_error();
     exit;
}

if ($p == 1 )
{


foreach($connection->query('SELECT MAX(prix),MIN(prix) FROM promo') as $row) {

echo "<tr>";
echo '<TD> Prix Maximum (Promotion) => </TD>' . "\n";
echo "<td>" . $row['MAX(prix)'] . "</td>";
echo "</tr>";

echo "<tr>";
echo '<TD> Prix Minimum (Promotion) => </TD>' . "\n";
echo "<td>" . $row['MIN(prix)'] . "</td>";
echo "</tr>";

}
}

?>
</tbody></table>   
<!------------------------------------------------------------------------------------------------>   
<!---------------------------------------end stat promotion--------------------------------->                                  
<!------------------------------------------------------------------------------------------------>

                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end line chart  -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- discreate chart  -->
                        <!-- ============================================================== -->
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Etat Des Commandes</h5>
                                <div class="card-body">
                                    <div class="spark-chart">
                                        
<?Php
$host_name = "localhost";
$database = "projetintegre"; // Change your database name
$username = "root";          // Your database user id 
$password = "";          // Your password

//error_reporting(0);// With this no error reporting will be there
//////// Do not Edit below /////////

$connection = mysqli_connect($host_name, $username, $password, $database);

if (!$connection) {
    echo "Error: Unable to connect to MySQL.<br>";
    echo "<br>Debugging errno: " . mysqli_connect_errno();
    echo "<br>Debugging error: " . mysqli_connect_error();
     exit;
}

if ($c == 1 )
{

if($stmt = $connection->query("SELECT * FROM commande WHERE etatCommande='terminer';
")){
  
  echo "Commande (TERMINER) = ".$stmt->num_rows."<br>";

}


if($stmt = $connection->query("SELECT * FROM commande WHERE etatCommande='en cours';
")){
  
  echo "Commande (EN COURS) = ".$stmt->num_rows."<br>";

}

}


?>

                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end discreate chart  -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- line chart  -->
                        <!-- ============================================================== -->
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">nombre D'utilisateur</h5>
                                <div class="card-body">
                                    <div class="spark-chart">
                                        
<!------------------------------------------------------------------------------------------------>
<!---------------------------------------affichage stat promotion--------------------------------->
<!------------------------------------------------------------------------------------------------>
<table border="3 " cellpadding="20" style=" border-style: dashed;" >
<?Php
$host_name = "localhost";
$database = "projetintegre"; // Change your database name
$username = "root";          // Your database user id 
$password = "";          // Your password

//error_reporting(0);// With this no error reporting will be there
//////// Do not Edit below /////////

$connection = mysqli_connect($host_name, $username, $password, $database);

if (!$connection) {
    echo "Error: Unable to connect to MySQL.<br>";
    echo "<br>Debugging errno: " . mysqli_connect_errno();
    echo "<br>Debugging error: " . mysqli_connect_error();
     exit;
}

if ($cl == 1 )
{


foreach($connection->query('SELECT COUNT(idUtilisateur)FROM utilisateur') as $row) {

echo "<tr>";
echo '<TD>   NB d utilisateur = </TD>' . "\n";
echo "<td>" . $row['COUNT(idUtilisateur)'] . "</td>";
echo "</tr>";


}
}

?>
</tbody></table>   
<!------------------------------------------------------------------------------------------------>   
<!---------------------------------------end stat promotion--------------------------------->                                  
<!------------------------------------------------------------------------------------------------>



                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end line chart  -->
                        <!-- ============================================================== -->
                    </div>
                    <div class="row">
                        <!-- ============================================================== -->
                        <!-- line chart  -->
                        <!-- ============================================================== -->

                        

<table class="table table-striped table-bordered">
    <tr>
        <td> 
<script type="text/javascript">
// <![CDATA[
var numday, month, numyear, numhours, numminutes, numseconds, nowtoday;
function initdate() {
        var now = new Date();
 
        numday = now.getDate();
        nummonth = now.getMonth();
        month = nummonth+1;
        numyear = now.getFullYear();
        numhours = now.getHours();
        numminutes = now.getMinutes();
        numseconds = now.getSeconds();        
        if(numday<10) {
                numday = "0"+numday;
        }       
        if(month<10) {
                month = "0"+month;
        }        
        if(numhours < 10) {
                numhours = "0"+numhours;
        }        
        if(numminutes < 10) {
                numminutes = "0"+numminutes;
        }        
        if(numseconds < 10) {
                numseconds = "0"+numseconds;
        }
}
function parsedate() {
        numseconds++;
        if(numseconds < 10) {
                numseconds = "0"+numseconds;
        }
        if(numseconds >= 60)
        {
                numseconds = "00";
                numminutes++;
                if(numminutes < 10) {
                        numminutes = "0"+numminutes;
                }
        }        
        if(numminutes >= 60)
        {
                numminutes = "00";
                numhours++;
                if(numhours < 10) {
                        numhours = "0"+numhours;
                }
        }       
        if(numhours >= 24)
        {
                numhours = "00";
                initdate();
        }
        // AFFICHAGE DU COUPLE DATE/HEURE
        nowtoday = "Nous sommes le ";
        nowtoday += numyear+"-"+month+"-"+numday;
        nowtoday += " et il est ";
        nowtoday += numhours+":"+numminutes+":"+numseconds;  
        document.getElementById('dateheure').innerHTML = nowtoday;
}
initdate();
// ]]>
</script>
 
 
<body onload="window.setInterval('parsedate()', 1000);">
 
 
<div id="dateheure"> </div>

</td>
</tr>
</table>




<div class="imprimer">
        <input  class="btn btn-primary" type="submit" onclick="imprimer_page()" value="Imprimer la Page">
      </div>

      <script type="text/javascript">
            function imprimer_page(){
            window.print();
             }
        </script>






                        <!-- ============================================================== -->
                        <!-- end line chart  -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- bullet chart  -->
                        <!-- ============================================================== -->
                        
                        <!-- ============================================================== -->
                        <!-- end bullet chart  -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- pie chart  -->
                        <!-- ============================================================== -->
                        
                        <!-- ============================================================== -->
                        <!-- end pie chart  -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- box chart  -->
                        <!-- ============================================================== -->
                        
                        <!-- ============================================================== -->
                        <!-- end box chart  -->
                        <!-- ============================================================== -->
                    </div>
               
            </div>
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <div class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            Copyright © 2018 Concept. All rights reserved. Dashboard by <a href="https://colorlib.com/wp/">Colorlib</a>.
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="text-md-right footer-links d-none d-sm-block">
                                <a href="javascript: void(0);">About</a>
                                <a href="javascript: void(0);">Support</a>
                                <a href="javascript: void(0);">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="../assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="../assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <script src="../assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
    <script src="../assets/vendor/charts/sparkline/spark-js.js"></script>
    <script src="../assets/libs/js/main-js.js"></script>

 



<!---------------------------------------------------------------------------------------->
<!---------------------------------JS STAT Produit------------------------------------------->
<!---------------------------------------------------------------------------------------->

<script type="text/javascript" src="js/loader.js"></script>

<script>
 google.charts.load('current', {'packages':['corechart']});
     // Draw the pie chart when Charts is loaded.
      google.charts.setOnLoadCallback(draw_my_chart);
      // Callback that draws the pie chart
      function draw_my_chart() 

      {
        // Create the data table .
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'nom');
        data.addColumn('number', 'quantite');
        for(i = 0; i < my_2d.length; i++)
    data.addRow([my_2d[i][0], parseInt(my_2d[i][1])]);
// above row adds the JavaScript two dimensional array data into required chart format
    var options = {title:'Statistique de stock des Produits',
                       width:285,
                       height:285,
                      backgroundColor: 'transparent',
                     };

        // Instantiate and draw the chart
        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        chart.draw(data, options);

       
      }

</script>


<!---------------------------------------------------------------------------------------->
<!---------------------------------JS STAT Produit------------------------------------------->
<!---------------------------------------------------------------------------------------->









</html>