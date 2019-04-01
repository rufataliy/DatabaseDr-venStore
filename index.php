<?php
  //include "./php/stock.php";

  include "./php/collect-and-print-data.php";
  include "./fetchAll.php";
  $show = NULL;
     if(isset($_GET["prod-sn"])){
        for ($i=0; $i <sizeof($result) ; $i++) {
          if ($_GET["prod-sn"]==$result[$i]["products_id"]) {
             $show= $result[$i];

          }
        }
      }


    ?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- Compiled and minified CSS -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP:400,700" rel="stylesheet">
   <link rel="stylesheet" href="css/style.css">


  <title>Document</title>
</head>
<body>

<header>
  <nav class="transparent logo-header no-shadow">
    <div class="nav-wrapper">
      <div class="container">
        <a href="index.php"><img class="brandLogo" src="img/logo.svg" alt=""></a>
        <!-- <span>Laralea</span> -->
        <ul id="nav-mobile" class="right hide-on-med-and-down">
          <li><a href="badges.html">MEN</a></li>
          <li><a href="collapsible.html">WOMEN</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <nav class="transparent menu-nav no-shadow brand-font-color ">
    <div class="nav-wrapper valign-wrapper flex flex-align-between container">
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <div class="nav-menu">
        <ul class="right hide-on-med-and-down">
          <li><a href="#">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Contact</a></li>
          <a class='dropdown-trigger btn brand-font-color transparent no-shadow' href='#' data-target='dropdown1'>Products<i class="material-icons">arrow_drop_down</i></a>
        <!-- Dropdown Structure -->
          <ul id='dropdown1' class='dropdown-content'>
            <li><a href="./index.php?prod-id=watch">Watches</a></li>
            <li><a href="./index.php?prod-id=belt">Belts</a></li>
            <li><a href="./index.php?prod-id=tie">Ties</a></li>
          </ul>
        </ul>
      </div>
      <div class="account-box">
        <a class="waves-effect waves-light btn light-btn brand-font-color brandBorder hover-dark m-right">LOG IN</a>
        <a class="waves-effect waves-brand btn hover-light brandBgColor">SIGN UP</a>
      </div>
    </div>
  </nav>
  <ul class="sidenav brand-font-color" id="mobile-demo">
    <li><a href="#">Home</a></li>
    <li><a href="#">About</a></li>
    <li><a href="#">Contact</a></li>
    <li>
      <a class='dropdown-trigger show-on-small brand-font-color transparent no-shadow' href='#' data-target='dropdown2'>Products<i class="material-icons">arrow_drop_down</i></a>
    </li>
    <ul id='dropdown2' class='dropdown-content'>
      <li><a href="./index.php?prod-id=watch">Watches</a></li>
      <li><a href="./index.php?prod-id=belt">Belts</a></li>
      <li><a href="./index.php?prod-id=tie">Ties</a></li>
    </ul>
  </ul>
</header>
  <main>
    <div class="row">
    <div class="col s12 m4 l6">
      <div class="products-tool-bar">
        <div class="row">
          <div class="col s6">
            <div class="nav-wrapper">
              <form>
                <div class="input-field">
                  <input id="search" type="search" required>
                  <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                  <i class="material-icons">close</i>
                </div>
              </form>
            </div>
          </div>
          <div class="col s3">
            <a class='dropdown-trigger btn brand-font-color transparent no-shadow' href='#' data-target='dropdown3'>Sort by<i class="material-icons">arrow_drop_down</i></a>
          <!-- Dropdown Structure -->
            <ul id='dropdown3' class='dropdown-content'>
              <li><a href="./index.php?prod-sort=price">Price</a></li>
              <li><a href="./index.php?prod-sort=newest">Newest</a></li>
              <li><a href="./index.php?prod-sort=popular">Popular</a></li>
            </ul>
          </div>
          <div class="col s3">
            <!-- Modal Trigger -->

                <a class='modal-trigger btn hover-dark brand-font-color transparent no-shadow' href='#modal1' >Filter<i class="material-icons">arrow_drop_down</i></a>
               <!-- Modal Structure -->
               <div id="modal1" class="modal bottom-sheet">
                 <div class="modal-content">
                   <h4>Filters</h4>
                   <p>filter fields not set yet</p>
                 </div>
                 <div class="modal-footer">
                   <a href="#" class="modal-close waves-effect waves-green btn-flat">Search</a>
                 </div>
               </div>
          </div>
        </div>
      </div>
        <?php echo $markup; ?>
    </div>
    <div class="col m8 l6 hide-on-small-only">

      <div class="card">
        <div class="card-image">
          <img id="show-img" src="<?php if (isset($show)) {
            echo $show["products_image"];
          }else {
            echo "img/logo.svg";
          }?>">

        </div>
        <div class="card-content">
          <span class="card-title">
              <?php if (isset($show)) {echo $show["prod_name"];}
                else {
                  echo "Product Name";
                }
               ?>
              </span>
          <p>
            <?php if (isset($show)) {echo $show["prod_price"];}
              else {
                echo "product price";
              }
             ?>

          </p>
        </div>
      </div>

    </div>
  </div>
  <footer class="page-footer">
         <div class="container">
           <div class="row">
             <div class="col l6 s12">
               <a href="#"><img class="brandLogo" src="img/logo.svg" alt=""></a>
               <p class="bold">Designed with passion.</p>
             </div>
             <div class="col l4 offset-l2 s12">
               <h5 class="bold">Links</h5>
               <ul>
                 <li><a href="#!">Men</a></li>
                 <li><a href="#!">Women</a></li>
                 <li><a href="#!">Watches</a></li>
                 <li><a href="#!">Belts</a></li>
               </ul>
             </div>
           </div>
         </div>
         <div class="footer-copyright">
           <div class="container">
           © 2019 Copyright
           <a class="right" href="#!">Rufat Aliyev</a>
           </div>
         </div>
  </footer>
  </main>







  <script
    src="http://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
  $('.sidenav').sidenav();
});
 $('.dropdown-trigger').dropdown();
 $(document).ready(function(){
    $('.modal').modal();
  });
</script>
<script src="js/main.js">

</script>
</body>
</html>
