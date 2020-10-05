<?php
//session_start();
include ('includes/header.php');
// all content pages will be include here
// the value of $page is coming from the url
// in nav_members.php and nav_public.php
if (isset($_GET['page'])) {
    $includepage=$_GET['page'];
    include_once ($includepage);
} else {
    //home page content
    require_once ('content/welcome.php');
}
include_once ('includes/footer.php');
?>