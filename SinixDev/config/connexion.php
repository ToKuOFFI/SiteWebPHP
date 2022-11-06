<?php
try {
    
    $acces = new pdo("mysql:host=localhost;dbname=sinxdev;charset=utf8", "root", "");
    $acces -> setAttribute(PDO::ATTR_ERRMODE, PDO::ATTR_ERRMODE_WARNING);
} catch {
    $e -> getMessage();
}
?>