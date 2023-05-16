<?php 
        if($_SERVER['REQUEST_METHOD']=='POST')
        {
          $name=$_POST['name'];
          $pass=$_POST['pass'];
          $cpass=$_POST['cpass'];
          // echo $name.$pass.$cpass;
          // if($name==false || $pass==false ||  $cpass=false)
          // {
          //   echo"<script>
          //   alert('Please fill the form completely...');</script>";
          //   exit;
          // }
          if($pass!=$cpass)
          {
            echo"<script>
            alert('Password should match with confurm password...');</script>";
          }
          else
          {
            $servername="localhost";
            $username="root";
            $password="";
            
            $conn=mysqli_connect($servername,$username,$password,"form");
            if(!$conn)
            {
              echo"<script>
            alert('Server error please try again...');</script>";
            exit;
            }


            $sql="SELECT * FROM `fformss` WHERE `name`='$name'";
            $res=mysqli_query($conn,$sql);
            $row=mysqli_num_rows($res);
            // echo $row;
            if($row==1)
          {
           
            echo"<script>
            alert('Username already taken... Please enter other name...');</script>";
          }
          else{
            $sql="INSERT INTO `fformss` (`name`, `password`) VALUES ('$name','$pass')";
            $res=mysqli_query($conn,$sql);
            if($res)
            {
              session_start();
              $_SESSION['logedin']=true;
              $_SESSION['username']=$name;
              $_SESSION['name']=$name;
              echo "<script>alert('Logedin successfuly ...');</script>";
              header("location: welcome.php");
              exit;
            }
          }
 
          }
        }
       
    ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Signup</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>

body{
    background: radial-gradient(circle,#24246e,#06051f);
    /* height: 100vh; */
}
.wrapper span{
    position: fixed;
    top: -120px;
    height: 50px;
    width: 50px;
    z-index: -1;
    animation: animate 10s linear infinite;    
}
.wrapper span:nth-child(1){
    left: 60px;
    animation-delay:0.6s;
    border: 5px solid cyan;
}
.wrapper span:nth-child(2){
    left: 60%;
    animation-delay: 1s;
    width: 100px;
    height:100px;
    background: #ff4293;
}
.wrapper span:nth-child(3){
    left: 20%;
    animation-delay: 2s;
    border: 5px solid #fff;    
}
.wrapper span:nth-child(4){
    left: 30%;
    animation-delay: 2s;
    width: 150px;
    height: 150px;
    background: #befb46;
}
.wrapper span:nth-child(5){
    left: 40%;
    animation-delay: 1s;
    border: 5px solid #ff4293;
}
.wrapper span:nth-child(6){
    left: 50%;
    animation-delay: 7s;
    border: 5px solid deepskyblue;
}
.wrapper span:nth-child(7){
    left: 60%;
    animation-delay: 6s;
    width: 100px;
    height: 100px;
    background: #ffd59e;
}
.wrapper span:nth-child(8){
    left: 70%;
    animation-delay: 2s;
    border: 5px solid #befb46;
}
.wrapper span:nth-child(9){
    left: 80%;
    animation-delay: 1s; 
    width: 190px;
    height: 190px;
    background: cyan;
}
.wrapper span:nth-child(10){
    left: 90%;
    animation-delay: 4s;
    border: 5px solid #fff;    
}
.banner{
    display: flex;
    justify-content: center;
    align-items: center;
    /* height: 100vh; */
}
.content h2{
    -webkit-text-fill-color: #fff;
    -webkit-text-stroke-width: 3px;
    -webkit-text-stroke-color: #fff;
    font-family: montserrat;
    font-size: 80px;
    text-transform: uppercase;
    letter-spacing: 12px;
    text-align: center;
    line-height: 0.9;
}
.content h2 b{
    -webkit-text-fill-color: transparent;
    font-size: 65px;
}
@keyframes animate{
    0%{
        transform: translateY(0);
        opacity: 1;
    }
    80%{
        opacity: 0.7;
    }
    100%{
        transform: translateY(800px) rotate(360deg);
        opacity: 0;
    }
}
    </style>
  </head>
  <body>




    <div class="nav">

    <nav class="navbar  navbar-dark bg-dark fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" aria-current="page" href="http://localhost/sam/signup.php?#">SIGN UP</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="http://localhost/sam/signup.php">Signup</a>
        </li>
        <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="http://localhost/sam/login.php">Login</a>
        </li>
        
    </div>
  </div>
</nav>
    </div>





    <div class="wrapper">
		<span></span>
		<span></span>
		<span></span>
		<span></span>
		<span></span>
		<span></span>
		<span></span>
		<span></span>
		<span></span>
		<span></span>
</div>
<div class="banner">
</div>


   
    




  <div class="container my-5 col-sm-3 col-lg-3  my-5 bg-transperant mt-5 text-white fw-bold border-1  roundedborder  shadow-lg">
    <div class="formm" style="margin-top:21vh">

   

      <form name="myForm" action="http://localhost/sam/signup.php?#" method="post" >
        <div class="mb-3 my-5 col-12 text-white">
          <label for="exampleInputEmail1" class="form-label pt-3">Name</label>
          <input id="n" type="text" class="form-control fw-bold opacity-75 " id="exampleInputEmail1" name="name" aria-describedby="emailHelp" required>
        </div>
        <div class="mb-3 my-5 col-12">
          <label for="exampleInputPassword1" class="form-label">Create Password</label>
          <input id="pass" type="password" class="form-control fw-bold opacity-75" id="exampleInputPassword1" name="pass" required>
        </div>
        <div class="mb-3 my-5 col-12">
          <label for="exampleInputPassword1" class="form-label">Conferm Password</label>
          <input id="cpass" type="password" class="form-control fw-bold opacity-75" id="exampleInputPassword1" name="cpass" required>
        </div>

        <div class="mb-3 my-2 col-12">
         <p>Already have an account, <a href="http://localhost/sam/login.php">Login ?</a></p>
        </div>

        
        <button type="submit" class="btn btn-primary my-1 col-12 bg-success" onclick="return validateForm()">Signup</button>

      
      </form>

    </div>
    </div>


    <script>
    function validateForm()
    {
        let x = document.forms["myForm"]["name"].value;
        let y = document.forms["myForm"]["pass"].value;
        if(x.length>20)
        {
          alert("Name is too big");
          document.getElementById("n").value ="";
          return false;
        }
        else if(x.length<4)
        {
          alert("Name must be at more than 4 characters");
          document.getElementById("n").value ="";
          return false;
        }

        else if(y.length<=7 || y.length>=13)
        {
          alert("Password must be between 8 to 12 characters...");
          document.getElementById("pass").value ="";
          document.getElementById("cpass").value ="";
          return false;
        }

        else{
          return true;
        }
    }
   </script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>


    


    
  </body>
</html>