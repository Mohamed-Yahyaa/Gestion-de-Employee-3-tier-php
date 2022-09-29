<?php 

function getConnection(){

    $Connection = mysqli_connect('localhost','root','','student');



    return $Connection;

}

?>