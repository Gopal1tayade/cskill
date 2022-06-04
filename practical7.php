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
    echo " REFRESH THE PAGE TO SEE HOW COUNT INCREAS";
    $file='conten.txt';
    $c=file_get_contents($file);
    file_put_contents($file,$c+1) ;
    echo"<br>";
    echo "the number of user visite :".$c;
  ?>

</body>
</html>