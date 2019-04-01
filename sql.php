<?php
$sourceName="mysql:host=localhost;dbname=final_1531";
$username = "root";
$password = "";

try {
  $pdo = new PDO($sourceName,$username,$password);
} catch (PDOException $err) {
  $connectionError = $err->getMessage();
}



// if (isset($products)) {
//   for ($i=0; $i <sizeof($products) ; $i++) {
//
//
//     $q = "INSERT INTO `products`(
//                         `products_image`,
//                         `prod_code`,
//                         `prod_name`,
//                         `prod_price`
//                     )
//                     VALUES(?,?,?,?)";
//     $prepared = $pdo->prepare($q);
//     $prepared->bindParam(1,$products[$i]["thumbnail"]);
//     $prepared->bindParam(2,$products[$i]["id"]);
//     $prepared->bindParam(3,$products[$i]["type"]);
//     $prepared->bindParam(4,$products[$i]["price"]);
//     $prepared->execute();
//     $feedback= "inserted";
//   }
// } else {
//   $validationError = "please enter the value before submitting";
// }
 ?>
