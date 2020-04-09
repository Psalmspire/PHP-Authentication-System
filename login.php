<!DOCTYPE html>
<?php session_start();
 include_once('lib/header.php');
?>
LOGIN FORM HERE!
<p>
<?php
        if(isset($_SESSION['message']) && !empty($_SESSION['message'])){
        echo '<span style ="color:green;">' .$_SESSION['message'] . '</span>';
        //To refresh a session after a previous error input
        session_destroy();
        }
        ?>

</p>

<?php
    include_once('lib/footer.php');
?>