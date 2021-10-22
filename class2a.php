
<?php

function area($b, $h){
  $result = 1/2*($b*$h);
  return $result;
}

if(isset($_POST['base']) && isset($_POST['height'])){
    $base = $_POST['base'];
    $height = $_POST['height'];
    $area =  area($base, $height);
}


?>




<html>
  <body>
    <form method="POST" action="">
      <div>
        <label>Base</label> <br>
        <input type="number" name="base" />
    </div>
    <div>
        <label>Height</label> <br>
        <input type="number" name="height" />
    </div>
    <button>Calculate Area <?php if(isset($area)) echo $area; ?></button>
    </form>
  </body>

</html>