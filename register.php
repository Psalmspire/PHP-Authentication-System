<?php
 include_once('lib/header.php');
?>
<p><strong> Welcome! please register below </strong></p>
<p>All fields are required</p>


<form method="POST" action="processregister.php">
    <p>
        <label>First Name</label><br>
        <input type="text" name="first_name" placeholder="First name" required>
    </p>
    <p>
        <label>Last Name</label><br>
        <input type="text" name="last_name" placeholder="Last name" required>
    </p> <p>
        <label>Email</label><br>
        <input type="text" name="email" placeholder="email address" required >
    </p>
    <p>
        <label>Password</label><br>
        <input type="password" name="password" placeholder="Password" required>
    </p>
    <p>
        <label>Gender</label><br>
        <select name="gender" placeholder="gender" required>
            <option value="">Select one</option>
            <option>Male </option>
            <option>Female</option>
        </select>
    </p>
    <p>
        <label>Designation</label><br>
        <select name="designation" required>
            <option value="">Select one</option>
            <option>Medical Team (MT)</option>
            <option>Patient</option>
            <option></option>
        </select>
    </p>
    <p>
        <label>Department</label><br>
        <select name="department" placeholder="department" required>
            <option value="">Select one</option>
            <option>General Practice Clinic </option>
            <option>Pharmacy</option>
            <option>Surgery and Operations</option>
        </select>
    </p>

    <p>
        <buton type="submit">Register</button>
    </p>

</form>

<?php 
    include_once('lib/footer.php');
?>