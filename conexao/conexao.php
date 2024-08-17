<?php
 try {

   $pdo = new PDO("mysql:dbname=sgb;host=localhost", "root", "admin");

 } catch (PDOException $e) {
    
    echo "Opa!, Ocorreu um erro com banco dados: " . $e->getMessage();
 }
