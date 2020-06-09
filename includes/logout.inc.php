<?php


session_start();
session_unset(); //delete values in session variables
session_destroy();
header("Location: ../index.php");