<?php
    $servername = "localhost";
    $username = "root"; 
    $password = ""; 
    $dbname = "dailybasket"; 

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            
            $stmt = $conn->prepare("INSERT INTO login (Mobilenumber, Username) VALUES (:mobilenumber, :username)");
            $stmt->bindParam(':mobilenumber', $_POST['Mobilenumber']);
            $stmt->bindParam(':username', $_POST['Username']);
            $stmt->execute();

            header("Location: dailyneedsveg.html");
            exit();
        }
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
?>
