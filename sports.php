<?php
$sid=$_POST["sport"];
$con=mysqli_connect("localhost","root","","redbus");
$result=mysqli_query($con,"SELECT * FROM sport WHERE sportid='$sid'");
$row=mysqli_fetch_array($result);

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BLOG</title>
    <style>
        .aniket
        {
            background: #E6DDC4;
        }
        .aniket_back
        {
            width:20%
        }
        .aniket_h1
        {
            font-size:2.5em;
        }
    </style>
</head>
<body class="aniket">
<div style="text-align:center; ">
<?php 
        echo "<H1> Title : ".$row['title']."</H1>";
        echo "<H2> Author : ".$row['aname']."</H1>";
        echo "<H2> Blog : ".$row['blog']."</H1>";        
        
?>
       
</div>
    
</body>
</html>