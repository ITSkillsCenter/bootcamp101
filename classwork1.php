<?php
  // $late = 5000; //15000
  // $early = 10000;
  // $base = 500000;
  // $transport = 100000;
  // $health = 60000;
  // $query = 100000; //300000
  // //670000
  // //315000

  // if(isset($_POST['x'])){
  //   $x = $_POST['x'];
  //   if($x > 0 && $x < 30 ){
  //     $salary = ($base  + $transport + $health  + $early);
  //     $deduction = (($x * $late)  + ($x * $query));
  //     $total = $salary - $deduction;
  //     //die(var_dump($salary, $deduction, $total));
  //     echo "Your salary is : " .  $total;
  //   }else{
  //     echo "X can only be between 0 and 30;";
  //   }

  // }


  if(isset($_POST['x'])){
    $x = $_POST['x'];
    if($x > 0 && $x < 30 ){
      // while($x <= 50){
      //   echo "Your salary is :  " .  $x . "<br>";
      //   $x = $x + 1;   // $x++
      // }
      $cars = ["Volvo", "Benz", "Jeep","Honda","Suzuki"];
      foreach($cars as $c){
        echo "The name of the car is " . $c . "<br>";
      }

      // for ($x; $x <= 10; $x++) {
      //   echo "The number is: $x <br>";
      // }
      
    }else{
      echo "X can only be between 0 and 30;";
    }
  }

?>


<html>

<body>
<form method="POST" action="">
    <label>Lateness count</label>
    <input type="number" name="x"/>
    <button type="submit">Compute</button>

</form>
</body>


</html>
