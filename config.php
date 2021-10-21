<?php
// Bước 1: Kết nối tới CSDL:
define('WWW', 'http://localhost/Code_CNW/CSE485_K61_KTGK_1951060993/');
define('HOST', 'localhost');
define('USER', 'root');
const PASS = '';
const DB = 'db_hospital';
$conn = mysqli_connect(HOST, USER, PASS, DB);
if (!$conn) {
    die('Không thể kết nối');
}