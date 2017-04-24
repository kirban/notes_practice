<?php
/**
 * Created by PhpStorm.
 * User: Кирилл
 * Date: 13.04.2017
 * Time: 20:37
 */
	session_start();
	unset($_SESSION['session_username']);
	session_destroy();
	header("location: ../index.php");
?>