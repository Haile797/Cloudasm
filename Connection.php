<?php 
    // $conn = mysqli_connect('localhost','root','','atndb') 
    // or die("Cannot connect database".mysqli_connect_error());

    $conn = mysqli_connect("ckshdphy86qnz0bj.cbetxkdyhwsb.us-east-1.rds.amazonaws.com","kon5ynvsca1908tb","ifm897oqqdr2w0kb","focqnp9fkocqc0g5") 
    or die("Cannot connect database".mysqli_connect_error());

    mysqli_query($conn, 'SET NAMES "utf8"')
?>