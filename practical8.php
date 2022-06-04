<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>practical 7</title>
</head>
<body bgcolor="hotpink">
    <h1>visite the page</h1>
    <?php
   date_default_timezone_set('Asia/Kolkata');
   echo "time of India :";
   echo $runingTime = date('h:i:s');
   echo "<br>";

   date_default_timezone_set('Europ/Paries');
   echo "time of India :";
   echo $runingTime1 = date('h:i:s');
   echo "<br>";
   date_default_timezone_set('America/Los_Angeles');
   echo "time of India :";
   echo $runingTime2 = date('h:i:s');
   echo "<br>";
   
   
  ?>

</body>
</html>