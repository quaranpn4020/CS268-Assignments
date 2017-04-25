<!DOCTYPE html>
<html>
<head></head>
<body>
    <?php
        session_start();
        $un = $_POST["username"];
        $pw = $_POST["password"];
    
        $server = "dario.cs.uwec.edu";
        $username = "QUARANPN4020";
        $password = "N8EZW3D4";
        
        try {
            $conn = new PDO("mysql:host=".$server.";dbname=".$username, $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $query = "SELECT cust_id, username " ."FROM candy_customer " .         "WHERE username = :username AND password = :password";
            $stmt= $conn->prepare($query);
            $stmt->bindParam(":username", $un);
            $stmt->bindParam(":password", $pw);
            $stmt->execute();
            if ($stmt->rowCount() > 0) {
                $_SESSION["user"] = $un;
                foreach($stmt as $row) {
                    $_SESSION["custid"] = $row["cust_id"];
                }
                header("Location:userHome.php");
            } else {
                header("Location:login.php?invalidLogin=true"); 
            }
        }
        catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
        $conn = null;
        
    ?>
</body>
</html>
