<?php

/*
|--------------------------------------------------------------------------
| Aksi Logout
|--------------------------------------------------------------------------
|
|   Aplikasi Sistem Informasi Rumah Sakit Sederhana
*/

session_start(); //memulai session
session_destroy(); //mengakhiri session
header("location:index.php");