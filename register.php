
<?php
session_start();
include_once('lib/header.php');
?>


<p><strong> Welcome! please register below </strong></p>
<p>All fields are required</p>

<h2>REGISTER HERE!</h2> 
<form method="POST" action="processregister.php">
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
        <label>First Name</label><br>
        <input 
        <?php
        if(isset($_SESSION['first_name'])){
            echo "value=" .$_SESSION['first_name'];
        //To refresh a session after a previous error input
        }
        ?>
        type="text" name="first_name" placeholder="First name">
    </p>
    <p>
        <label>Last Name</label><br>
        <input
        <?php
        if(isset($_SESSION['last_name'])){
            echo "value=" .$_SESSION['last_name'];
        //To refresh a session after a previous error input
        }
        ?>
        type="text" name="last_name" placeholder="Last name">
    </p>
    <p>
        <label>Email</label><br>
        <input name="email"
        <?php
        if(isset($_SESSION['email'])){
            echo "value=" .$_SESSION['email'];
        //To refresh a session with losing a previous input 
        }
        ?>
        type="text"  placeholder="email address">
    </p>
    <p>
        <label>Password</label><br>
        <input type="password" name="password" placeholder="Password">
    </p>
    <p>
        <label>Gender</label><br>
        <select 
        name="gender" placeholder="gender">
            <option value="">Select one</option>
            <option
            <?php
        if(isset($_SESSION['gender']) && $_SESSION['gender']='male'){
            echo "selected";
        //To refresh a session with losing a previous input
        }
        ?>
            >Male </option>
            <option
            <?php
        if(isset($_SESSION['gender']) && $_SESSION['gender']='female'){
            echo "selected";
        //To refresh a session with losing a previous input
        }
        ?>
            >Female</option>
        </select>
    </p>
    <p>
        <label>Designation</label><br>
        <select 
        <?php
        if(isset($_SESSION['designation'])){
            echo "value=" .$_SESSION['designation']; 
        //To refresh a session with losing a previous input
        }
        ?>
        name="designation">
            <option value="">Select one</option>
            <option
            <?php
        if(isset($_SESSION['designation']) && $_SESSION['designation']='Medical Team (MT)'){
            echo "selected";
        //To refresh a session with losing a previous input
        }
        ?>
            >Medical Team (MT)</option>
            <option
            <?php
        if(isset($_SESSION['designation']) && $_SESSION['designation']='Patient'){
            echo "selected";
        //To refresh a session with losing a previous input
        }
        ?>
            >Patient</option>
        </select>
    </p>
    <p>
        <label>Department</label><br>
        <select name="department" placeholder="department">
            <option value="">Select one</option>
            <option
            <?php
        if(isset($_SESSION['department']) && $_SESSION['department']='General Practice Clinic'){
            echo "selected";
        //To refresh a session with losing a previous input
        }
        ?>
            >General Practice Clinic </option>
            <option
            <?php
        if(isset($_SESSION['department']) && $_SESSION['department']='Pharmacy'){
            echo "selected";
        //To refresh a session with losing a previous input
        }
        ?>
            >Pharmacy</option>
            <option
            <?php
        if(isset($_SESSION['department']) && $_SESSION['department']='Surgery and Operations'){
            echo "selected";
        //To refresh a session with losing a previous input
        }
        ?>           
            >Surgery and Operations</option>
        </select>
    </p>

    <p>
        <button type="submit">Register</button>
    </p>

</form>
<?php
    include_once('lib/footer.php');
?>