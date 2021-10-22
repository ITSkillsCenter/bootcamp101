<?php

if(isset($_POST['ratePerHr']) && isset($_POST['userName']) && isset($_POST['hrsWorked'])){
    $ratePerHr = $_POST['ratePerHr'];
    $userName = $_POST['userName'];
    $hrsWorked = $_POST['hrsWorked'];
    $defRateHr = 20;
    if($ratePerHr < 0){

        $pay = ($defRateHr * $hrsWorked);
    }else{
        $pay = ($ratePerHr * $hrsWorked);

    }

    if($pay<1000){
        $tax = ($pay * 0.015);
        $grossPayTax = ($pay - $tax);
        echo $userName . " worked for ". $hrsWorked . "hours " . "and earned ". "$". $pay . "<br>".
        $userName. " was taxed ". "1.5% ". "for a net pay total of ". "$". $grossPayTax. " because he is a Low Income Earner.";
    }else if($pay>1000 && $pay<5000){
        $grossPayTax = ($pay * 0.032);
        echo $userName . " worked for ". $hrsWorked . "hours " . "and earned ". "$". $pay . "<br>".
        $userName. " was taxed ". "3.2% ". "for a net pay total of ". "$". $grossPayTax. " because he is a Average Income Earner.";
    }else if($pay>5000){
        $grossPayTax = ($pay * 0.05);
        echo $userName . " worked for ". $hrsWorked . "hours " . "and earned ". "$". $pay . "<br>".
        $userName. " was taxed ". "5% ". "for a net pay total of ". "$". $grossPayTax. " because he is a High Income Earner.";
    }else{
        echo "common getat";
    }

    

}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
     integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
      integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" 
     integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <style>
      .container{
          margin: 93px 350px;
          background-color: grey;
          padding: 20px;
          transition: 1s;

      } 
      .container:hover{
        background-color: purple;
        transform: rotateY(10deg);
      } 
      .card-top{
        margin-left: 280px;
      }
      .button{
          color: black;
          background-color: #444444;
          margin-top: 10px;
          text-align: center;
          margin-left: 51px;
          border-radius: 5px;
          transition: 3s;
          
      }
      .button:hover{
        background-color: green;
        transform: translateY(-5px);
        
      }

    </style>
<div class="container">

<form action="" method="POST">
        
     
        <h3>Tax calculator</h3> 
        <div class="card">
            <div class="card-top">

           
            <label for="">Salary Break Down</label>
            <br><br>
            <input type="text" name="userName" placeholder="Enter UserName">
            <br><br>
            <input type="number" name="ratePerHr" placeholder="Enter Rate per Hr">
            <br><br>
            <input type="number" name="hrsWorked" placeholder="Enter Hours worked">
            <br>
            <button class="button" type="send">Submit</button>
            </div>
        </div>
    </form>
    </div>
</body>
</html>