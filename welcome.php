<?php 
session_start();
if(!isset($_SESSION['logedin']))
{
  header("location: signup.php");
  exit;
}
else{
  echo "<script>alert('Logedin successfuly ...');</script>";
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
@import url('https://fonts.googleapis.com/css2?family=Sassy+Frass&family=Sofia+Sans+Extra+Condensed&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Anton&family=Dancing+Script:wght@500&family=Satisfy&display=swap');

* {
    margin: 0;
    padding: 0;
}

.con {
    height: 100vh;
    width: 100vw;
    background-color: #3e3e3e;
   background-image: linear-gradient(261deg, rgba(131,58,180,0.7427564775910365) 0%, rgba(253,29,29,0.5410758053221288) 50%, rgba(252,176,69,0.9780505952380952) 100%);
    display: flex;
    justify-content: center;
    align-items: center;
}

.hi {
     color: white;
    font-family: 'Satisfy', cursive;
    font-style: italic;
    font-size: 45px;
    font-weight: 100;
}

.at {
    color: white;
    font-family: 'Satisfy', cursive;
    font-style: italic;
    font-size: 50px;
    font-weight: 100;
}
.n
{
    color: white;
    font-family: 'Satisfy', cursive;
    font-style: italic;
    font-size: 45px;
    font-weight: 100;

}
.b
{
    position:relative;
    
}

    </style>
    
</head>

<body>
    <div class="con">
        <div class="hi"><span class="at"></span><br><br><span class="na"></span><br><span class="n"></span></div>
    </div>
    <!-- <div class="btn btn-info" class="b" type=button onclick="logout()">Logout</div> -->
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
   
      <script>

let str="Welcome <?php echo($_SESSION['name']) ?>...   "
var typed = new Typed(".at", {
    strings: [str],
    typeSpeed: 70,
    backSpeed: 100,
    // loop: true
    
})
var typed = new Typed(".na", {
    strings: ["Your username and password stored successfully in the database..."],
    typeSpeed: 70,
    backSpeed: 100,
    // loop: true
    
})
var typed = new Typed(".n", {
    strings: [" Simple signup form.."," Simple login form..","Thank you for signing up..."],
    typeSpeed: 80,
    backSpeed: 80,
    loop: true
})



      </script>
</body>

</html>