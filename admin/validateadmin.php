<?php
$con = mysqli_connect("localhost", "prison", "prison123.", "prison_system");

// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
//assign  variable to form data 
$id = $_POST['id'];
$name = $_POST['name'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$tel = $_POST['telephone'];
$address = $_POST['address'];
$password = $_POST['password'];
$username = $_POST['usname'];

//insert into database
$sql = "insert into admin_tbl set
Admin_Id = '$id',
Admin_Name = '$name',
Gender = '$gender',
Email = '$email',
Telephone = '$tel',
Address = '$address',
Admin_Password = '$password',
Usename = '$username'
";

$con = mysqli_connect("localhost", "prison", "prison123.", "prison_system");
$sel = mysqli_query($con, "SELECT * from admin_tbl");

$row = mysqli_fetch_array($sel);

//check if username is already in database
if ($row['Usename'] == $username) {
    echo 'Username already taken !';
    return false;
}

//check if email is already in database

if ($row['Email'] == $email) {
    echo 'Email already in use !';
    return false;
}

//prevent sending empty form
if (
    empty($id) || empty($name) || empty($email) || empty($tel) || empty($address) || empty($password)
) {
    echo "Please fill all fields";
    return false;
}

if (strlen($password) < 6) {
    echo "Password should have at least 6 characters";
    return false;
}

if (!mysqli_query($con, $sql)) {
    die('Error: ' . mysqli_error($con));
}
?>
<script type="text/javascript">
    alert("you have succefully add the record !thank you");
    window.location = "adminpanel.php";
</script>