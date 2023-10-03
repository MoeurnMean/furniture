<!--Start Header-->
<?php
    include_once "./pages/header/header.php";
?>

<!--End Header-->


<!--Sart Menu-->

<!--End Menu-->

<!--Start HomePage-->
<?php
if(isset($_GET['pg'])){

    include "pages/".$_GET['pg'].".php";
}else{
    include 'pages/homepage.php';
}
?>
<!--End HomePage-->

<!--Start footer-->
<?php
include_once "./pages/footer/footer.php";
?>
<!--End footer-->