<?php

function payslip(){


}

// function add_two_numbers($a, $b ){

//  return $a + $b;

// }

// $result = add_two_numbers(60,3);
// // echo $result;


// $numbers = [3,6,20,50,32,50];
// function ArraySum($numbers){
//   $sum =0;

//   foreach($numbers as $number){
//     $sum += $number;

//   }
//   return $sum;
// }

// echo ArraySum($numbers);

if (isset($_POST['submit'])) {
  //die(var_dump($_FILES));
  $tmpName = $_FILES['details']['tmp_name'];
  $csvAsArray = array_map('str_getcsv', file($tmpName));
  // die(json_encode($csvAsArray));
  // foreach ($csvAsArray as $key => $r) : 
  //   die(json_encode($r));

  // endforeach;
}


?>


<html>

<style>
  .payslip {
    background: #e9e9e9;
    padding: 10px;
    border: 1px solid;
    margin-bottom: 15px;
  }

  .left,
  .right {
    width: 45%;
    display: inline-block;
    vertical-align: top;
  }
</style>

<body>
  <div>
    <form action="" method="POST" enctype="multipart/form-data">
      <div><label>Upload CSV File</label></div>
      <input type="text" name="student" />
      <input type="file" name="details" />
      <button type="submit" name="submit">Generate Payroll</button>
    </form>

    <?php /*
    <table>
      <?php foreach ($csvAsArray as $key => $r) { 
          if($key==0){
        ?>
        <thead>
          <th>
            <?php echo $r[0]; ?>
          </th>
          <th>
            <?php echo $r[1]; ?>
          </th>
          <th>
            Gross Pay
          </th>
        </thead>
      <?php } } ?>
      <tbody>
        <?php foreach ($csvAsArray as $key => $r) { 
            if($key > 0){
          ?>
          <tr>
            <td><?php echo $key + 1;  
                ?></td>
            <td><?php echo $r[1] ?></td>
            <td><?php echo '$' .$r[2] * $r[3]; ?></td>
          </tr>
        <?php }} ?>
      </tbody>

    </table>
    */ ?>

    <?php 
    if(isset($csvAsArray)){
    foreach ($csvAsArray as $k=>$r) { 
        if($k > 0){
      ?>
      <div class="payslip">`
        <div class="left">
          <h3>Employer's Name: <?php echo $r[4]; ?> </h3>
          <h3>Employee's Name: <?php echo $r[1]; ?> </h3>
          <h3>Gross Pay: <?php echo payslip($r[2] * $r[3]); ?> </h3>
        </div>

        <div class="right">
          <h3>Pay period: <?php echo $r[7]; ?> </h3>
          <h3>Date of Payment: <?php echo date('Y-m-d',strtotime('now')); ?> </h3>
        </div>

      </div>
    <?php }}} ?>

  </div>
</body>

</html>