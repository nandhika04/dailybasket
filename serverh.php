<?php
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "dailybasket"; 

$errors = array(); 

if (empty($_POST['Mobilenumber'])) {
    $errors['Mobilenumber'] = "Mobile number is required";
} elseif (!preg_match("/^[0-9]{10}$/", $_POST['Mobilenumber'])) {
    $errors['Mobilenumber'] = "Invalid mobile number format";
}

if (empty($_POST['Username'])) {
    $errors['Username'] = "Username is required";
}

if (empty($_POST['Password'])) {
    $errors['Password'] = "Password is required";
} elseif (!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/", $_POST['Password'])) {
    $errors['Password'] = "Password should contain at least 8 characters including uppercase, lowercase, numbers, and special characters";
}

if (empty($errors)) {
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $mobilenumber = $_POST['Mobilenumber'];
        $username = $_POST['Username'];
        $password = password_hash($_POST['Password'], PASSWORD_DEFAULT);

        $stmt = $conn->prepare("INSERT INTO login (Mobilenumber, Username, Password) VALUES (:mobilenumber, :username, :password)");
        $stmt->bindParam(':mobilenumber', $mobilenumber);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $password);
        $stmt->execute();

        header("Location: content.html");
        exit();
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>
