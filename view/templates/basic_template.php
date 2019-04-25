<?php
      $pos = strrpos($_SERVER['REQUEST_URI'], '/');
      $title = substr($_SERVER['REQUEST_URI'], $pos+1);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> <?php echo $title ?> </title>
    <link rel="stylesheet" href=<?php echo $css ?> >
    <link href="https://fonts.googleapis.com/css?family=Finger+Paint" rel="stylesheet">
</head>
<body class='body'>

<?php echo $body; ?>

</body>
<script <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src=<?php echo $js?>></script>
</html>

