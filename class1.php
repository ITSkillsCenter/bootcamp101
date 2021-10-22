<?php

// $a = 1;
// $b = "1";
// echo $a === $b;

// ==
// ===
// >
// >=
// <=
// <
// !=
// !==
// if(isset($_POST['score'])){
  $score = $_POST['score'];
  //die($score);
  if($score >= 80 && $score <= 100 ){
    echo "Student Grade is A";
  }else if($score >=65 && $score  <= 75){
    echo "Student Grade is B";
  }else{
    echo "Student Grade is F";
  }
// }

// switch($score){
//     case ($score >= 80 && $score <= 100);
//     echo "A";
//     break;

//     case ($score >=65 && $score  <= 75);
//     echo "B";

//     default: 
//       echo "F";

// }

  /*

String
Integer
Float (floating point numbers - also called double)
Boolean
Array
Object
NULL
Resource


*/

?>

<html>
  <head>

  </head>
  <body>
    <form action="" method="POST">
        <h3>Compute Student Grades</h3>
      <div>
        <label>Student Score</label>
        <input type="number" name="score"/>
        <button type="submit">Submit</button>
      </div>
    </form>
  </body>

</html>