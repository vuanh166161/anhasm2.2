
<?php 
// $con = pg_connect("localhost","root","","ecommerce_cms_tutorial");

// if(pg_connect_errno()){
//   echo "Failed to connect to MySQL: " . pg_connect_error();
// }

// pg_query($con,"SET NAMES 'utf8' ");
$Connect = pg_connect("postgres://cmvqjnqqlmumse:1dc0a0f9facb2b6081d619eeec13ce6a759ddee3efcc085f309ab8a04814caa4@ec2-54-82-205-3.compute-1.amazonaws.com:5432/d7h1ne0bj2a348");
?>