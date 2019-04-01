<?php
include "./fetchAll.php";
$selectedItems = [];

if(sizeof($_GET)>0) {
  for($i=0; $i < sizeof($result); $i++) {
    if(isset($_GET["prod-id"]) && $_GET["prod-id"] === $result[$i]["prod_code"]) {
      array_push($selectedItems, $result[$i]);
    }
  }
} else {
  for ($i=0; $i < sizeof($result); $i++) {
    array_push($selectedItems, $result[$i]);
  }
}

$markup = NULL;

if (sizeof($selectedItems)>0) {
for ($i=0; $i < sizeof($selectedItems) ; $i++) {
  $markup.= "<a href=\"./index.php?prod-sn={$selectedItems[$i]["products_id"]}&prod-id={$selectedItems[$i]["prod_code"]}\"><div class=\"col s12 m12 l4\">
              <div class=\"card\">
                <div class=\"card-image\">
                  <img src=\"{$selectedItems[$i]["products_image"]}\">
                </div>
                <div class=\"card-content\">
                  <span class=\"card-title\">{$selectedItems[$i]["prod_name"]}</span>
                  <p class=\"price\">{$selectedItems[$i]["prod_price"]}</p>
                </div>
              </div>
            </div></a>";
}
} ?>
