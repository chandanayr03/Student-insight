<?php


session_start();
if(session_destroy()) // Destroying All Sessions
{
header("Location: facultylogin.php"); // Redirecting To Home Page
}
?>