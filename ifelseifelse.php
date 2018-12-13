
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" >
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>if elseif else</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<?php 
$t="";
$t=$_POST['Time'];
?>

<form method="post" action="ifelseifelse.php">
  Time:<br>
  <input type="text" name="Time" value="<?php echo $t; ?>">
  <br>
<input type="submit" value="submit">
</form>
<?php


// $t= date("15");
      if ($t < "10"){
         echo  "<h3>Have a good day</h3>";
         echo '<img src="img/sunrise.jpg" width=50%/>';
   
      } elseif ($t <"20"){
          echo  "<h3>Have a good day</h3>";
         echo '<img src="img/sunrise.jpg" width=50%/>';
      }
      else{
      echo " <h3>Good dream</h3>";
      echo '<img src="img/night.jpg"/>';
      }
      ?>
</body>
</html>