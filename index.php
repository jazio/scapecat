<?php
if(!isset($_SESSION)){
    session_start();
}
?>

<?php
include 'config.php';
include 'templates/header.php';

//Controller. Every page must be indexed here.
$site = (isset($_GET['site']))?$_GET['site'] : 'home';

switch ($site) {
    case "home":
        include 'templates/frontpage.php';
        break;
    case "survey":
        include 'form.php';
        break;
    case "form1":
        include 'form1.php';
        break;
    case "form2":
        include 'form2.php';
        break;
    case "form3":
        include 'form3.php';
        break;

    case "form-process":
      include 'form-process.php';
        break;
        default:
        include 'tmpl/frontpage.php';
}

include 'templates/footer.php';
