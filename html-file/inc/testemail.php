<?php
if($_POST["Message"]) {
mail("nathanielmether@gmail.com", "Here is the sample subject line",
$_POST["Insert Your Message"]. "From: methernathaniel@gmail.com");
}
?>