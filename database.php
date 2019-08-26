<html>
<head>
<style>
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 80%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
</style>




<title>results stress_detector</title>
 	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

 <link rel="stylesheet" href='file.css'>

<script type="text/javascript">
	

            function windowClose() {
                window.open('','_parent','');
                window.close();
             }
</script>

 </head>
 <body>

 <div class="bg-img">
  <div class="container">
    <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Peace Of Mind</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">

        <li class="active"><a href="index.html"><span class="glyphicon glyphicon-home"></span> Home</a></li>
       

        <li class="dropdown">

      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li> <a href="javascript: windowClose()"><span class="glyphicon glyphicon-log-out"></span>
     Logout</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container2">


<?php
$conn = mysqli_connect("localhost", "id10177352_root","12345","id10177352_test");
if(!$conn)
{
die("Connection Falied ".mysql_connect_error());
}
echo("<br/><center>Result</center><br/>");

$sql="select distinct * from test";

$result=mysqli_query($conn,$sql);
echo ("<center><table id='customers'> <tr> <th>name</th> <th>p_score</th> <th>S_score</th> <th>e_score</th> <th>b_score</th> <th>h_score</th> </tr>");
while($row=mysqli_fetch_array($result))
{
    echo "<tr>";
    echo"<td>".$row['name']."</td>";
     echo"<td>".$row['p_score']."</td>";
      echo"<td>".$row['s_score']."</td>";
      echo"<td>".$row['e_score']."</td>";
      echo"<td>".$row['b_score']."</td>";
      echo"<td>".$row['h_score']."</td>";
      
     echo "</tr>";
}
echo "</table>";
echo"</center>";

mysqli_close($conn);
?>
</div>
</div>

<!--footer -->
 <div class="footer">
  <p>Created by: &copy;Ak2019 <a href="mailto:komaljamodkar28@gmail.com">
  ak@gmail.com</a></p>
</div>

</body>
</html>
