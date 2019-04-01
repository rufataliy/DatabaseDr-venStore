<?php
    include "./sql.php";

    $q = "SELECT * FROM `products`";
    $pdo->prepare($q);
    $prepared = $pdo->prepare($q);
    $prepared->execute();
    $result = $prepared->fetchAll(PDO::FETCH_ASSOC);
  
 ?>
