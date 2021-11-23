
<?php
include_once('MySQL_conn.php');
?>
<?php
$name=$_POST['name'];
$contact=$_POST['email'];
$class=$_POST['class'];
$age=$_POST['age'];
$Id=$_POST['id'];
// Availability of user
$sql="SELECT * FROM user;";
$result=mysqli_query($conn,$sql);
$checking=mysqli_num_rows($result);
 while($Data=mysqli_fetch_assoc($result)){
    $AllUsers=$Data['name'];
     
 }
//echo($Id);
//validation of users
if(empty($name)){
    $name_error="Fill user name";
}

elseif(empty($contact)){
    $email_error="Fill valid email";
}
 elseif (empty($age)){
    $age_error="Fill in age";
    echo($age_error);
}
 elseif(empty($class)){
    $class_error="fill in class";
 }
 elseif(strlen($name)<3){
     $wrong_name="name must be greater then 4 digits";
 }
 elseif(strlen($age)>3){
     $wrong_age="Enter your real age";
 }
 elseif(strlen($class)>10){
     $wrong_class="Enter your real class";
 }
 elseif($contact !="$name"."@"."$class"){
     $wrong_email="Enter correct format of email";
 }
 elseif($AllUsers==$name){
     $ExtanceUser="User exist";
     //feature made successfully
 }


else{
    $success="User added successful";
$sql="INSERT INTO `user` (`name`, `email`, `class`,`age`)
VALUES ('$name', '$contact', '$class','$age');";
mysqli_query($conn,$sql);
}
//header("Location: http://localhost/index.php");
//exit();


//

?>
<DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>User mangement system</title>
  
  <!-- HTML -->
  

  <!-- Custom Styles -->
  <link rel="stylesheet" href="./font-awesome/css/font-awesome.min.css" title="" type="" />
  <link rel="stylesheet" href="../client/style.css">
</head>

<body class="container">
  <header id="head">
      <?php
//include_once('backen/MySQL_conn.php');

?>
    
 
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
         <br />
        Add a User 
       </p>
       <br />
       <div id="Lin" class="lin">
         
       </div>
     </div>
     <br />
     <br />
     <div class="blocky">
       <div>
    <form  id="succ"   class="formItems" >
        <br/>
           <br/>
              <br/> 
              <br/>
      
//Changes from git
  
              <p id="danger"><? echo($name_error);?></p>
              <p><? echo($age_error); ?></p>
              <p><?echo($email_error);?></p>
              <p><? echo ($success);?></p>
           <p><? echo ($wrong_name);?></p>
        <p><? echo ($wrong_class);?></p>
         <p><? echo ($wrong_email);?></p>
          <p><? echo ($wrong_age);?></p>
          <p><? echo ($ExtanceUser);?></p>

       <button class="btnSucc" ><b><a href="../index.php">Home</a></b> </button>
     </form>
   </div>
   
   <div>
     
   </div>
  </div>
 
 </section>
 
   <footer id="Footer" class="footer">
     <br />
     <p>User Management System
     </p>
     <p>© 2021 Mubarak Kual Louis </p>
     <button class="btnlink">
    <a class="link" href="../users.php">Users list</a>
     </button>
    <p>Software Developer</p>
   </footer>
  <!-- Project -->
  <script src="main.js"></script>
</body>
</html>
