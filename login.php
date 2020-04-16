<!DOCTYPE html>
<?php session_start();
 include_once('lib/header.php');
?>
<h2>LOGIN RIGHT HERE!</h2> 
<p>
<?php
        if(isset($_SESSION['message']) && !empty($_SESSION['message'])){
        echo '<span style ="color:green;">' .$_SESSION['message'] . '</span>';
        //To refresh a session after a previous error input
        session_destroy();
        }
        ?>

<form method="POST" action="processlogin.php">
    <p>
        <?php
        if(isset($_SESSION['error']) && !empty($_SESSION['error'])){
        echo '<span style ="color:red;">' .$_SESSION['error'] . '</span>';
        //To refresh a session after a previous error input
        session_destroy();
        }
        ?>
    </p>

    
    <p>
        <label>Email Address:</label><br>
        <input name="email"
        <?php
        if(isset($_SESSION['email'])){
            echo "value=" .$_SESSION['email'];
        //To refresh a session with losing a previous input 
        }
        ?>
        type="text"  placeholder="email">
    </p>
    <p>
        <label>Password</label><br>
        <input type="password" name="password" placeholder="Password">
    </p>

    <p>
        <button type="submit">Login</button>
    </p>

</form>

</p>

<?php
    include_once('lib/footer.php');
?>