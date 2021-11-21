
<?php
include_once('backend/MySQL_conn.php');
$sql="SELECT * FROM user;";
$result=mysqli_query($conn,$sql);
$checking=mysqli_num_rows($result);
//echo($checking);
if ($checking>0){
   //$users=mysqli_fetch_assoc($result);
  // while($users){
   //print($users['name']."<br/>");
//}
//}

//while($Data=mysqli_fetch_assoc($result)){
   //echo ("<td>$Data['name']</td>");
   //echo($Data['name']."<br/>");
//}
}
//else{
    //echo("no user");
//}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="client/style.css"/>
    <link rel="stylesheet" href="client/bootstrap.min.css">
      <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" title="" type="" />
    <title></title>
</head>

<body class="container">
  <header id="head">


<div>
  <br />
   <h1 id="hside">User Management App</h1>
 </div>
 <div class="logo" id="Logo"> <span class="fa fa-user"></span></div>
 </header>
 <div>


 <section id="Display" class="display">
   <div>
     <br />

     <div id="Text" class="text">

       <p>
           <br/>
     Users list
</p>
<br/>
          </div>
       <div id="Lin" class="lin">
         

          </div>
          <br />
    <!-- <table class="teble" border="0">
       <thead>
         <th>Name</th>
         <td>Contact</td>
         <th>Age</th>
         <th> </th>
       </thead>
       <br />
       <tbody>
         <tr>
           <td>Kual </td>
           <td>00879669</td>
           <td>senior 3</td>
           <td class="X">X</td>
         </tr>
       </tbody>
     </table>-->
     
     <table class="table table-striped mt-4">
  <thead id="Tablefont" class="thead-dark">

    <th>Name</th>
    <th>Email</th>
    <th>class</th>
    <th>age</th>
    <th>delete</th>
  </thead>
  
  <tbody>
<?php

while($Data=mysqli_fetch_assoc($result)){
 echo ("<tr><td>{$Data['name']}</td>
  <td>{$Data['email']}</td>
 <td>{$Data['class']}</td>
  <td>{$Data['age']}</td>
 <td><button><a href='backend/delete.php'>X</a></button></td></tr>");


// echo("<tr><td>{$Data['name])}</td></tr>")
   //echo("</table>");
}
   ?>
  </tbody>
</table>
</section>

   <footer id="Footer"class="footer">
     <br />
     <p>User Management System
     </p>
     <p>© 2021 Mubarak Kual Louis </p>
     <button class="btnlink">
    <a class="link" href="index.php">Home</a>
     </button>
    <p>Software Developer</p>
   </footer>
   </footer>
  <!-- Project -->
  <script src="main.js"></script>
</body>
</html>
,