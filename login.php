

<?php 
        if($_SERVER['REQUEST_METHOD']=='POST')
        {
          $name=$_POST['name'];
          $pass=$_POST['pass'];

          
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
            // $sql="INSERT INTO `formss` (`name`, `password`) VALUES ('$name','$pass')";
            // $res=mysqli_query($conn,$sql);
            $sql="SELECT * FROM `fformss` WHERE `name`='$name' && `password`='$pass'";
            $res=mysqli_query($conn,$sql);
            $row=mysqli_num_rows($res);
            // echo $row;
        //     if($row==1)
        //   {

        //     session_start();
        //     $_SESSION['logedin']=true;
        //     $_SESSION['username']=$username;
        //     header("location: welcome.php");
        //     echo"<script>
        //     alert('Logedin Successfully... ');</script>";
        //   }
        //   else{
        //     echo"<script>
        //     alert('Invalid user name or password...');</script>";
        //   }
        // }
        if($row==1) {
          echo "<script>alert('Logedin successfuly ...');</script>";
          session_start();
          $_SESSION['logedin']=true;
          $_SESSION['username']=$username;
          $_SESSION['name']=$name;
          header("location: welcome.php");
          exit;
      } else {
          echo "<script>alert('Invalid user name or password...');</script>";
      }
    }
       
    ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
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
    <a class="navbar-brand" aria-current="page" href="http://localhost/sam/signup.php?#">LOGIN</a>
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



   
    




  <div class="container my-5 col-sm-3 my-5 bg-transperant fw-bold mt-5 text-white  shadow-lg">
    <div class="formm" class="my-5 col-3 border-2 border-dark " style="margin-top:21vh">

      <form action="http://localhost/sam/login.php?#" method="post">
        <div class="mb-3 my-5 col-12 text-white">
          <label for="exampleInputEmail1" class="form-label pt-3">Name</label>
          <input type="text" class="form-control  fw-bold opacity-75" id="exampleInputEmail1" name="name" aria-describedby="emailHelp" required>
        </div>
        <div class="mb-3 my-5 col-12">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" class="form-control  fw-bold opacity-75" id="exampleInputPassword1" name="pass" required>
        </div>

        <div class="mb-3 my-5 col-12">
         <p>Dont have an account, <a href="http://localhost/sam/signup.php">Signup ?</a></p>
        </div>
       
        
        <button type="submit" class="btn btn-primary my-1 col-12 bg-success">Signup</button>
      </form>

    </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script> 
  </body>
</html>