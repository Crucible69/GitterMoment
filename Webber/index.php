<?php
    $host="containeerdb";
    $user="root";
    $pass="impostorus";
    $database="Redlock";

    $con = mysqli_connect($host,$user,$pass,$database);
    $result = $con->query("SELECT * FROM users");
?>

<!DOCTYPE html>
<html lang="en">

<body><p>amogus</p>
<?php 
    while($row = $result->fetch_assoc()){
        echo $row["ID"]."---".$row["Nama"]."---".$row["Alamat"]."---".$row["Jabatan"]."<br>";
    }
?>
    
</body>
</html>