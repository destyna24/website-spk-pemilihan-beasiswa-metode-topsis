<?php

include('koneksi.php');
session_destroy();
header("location: index.php");

?>