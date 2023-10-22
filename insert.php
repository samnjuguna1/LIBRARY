<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <h1>Insert users data into the table</h1>
</head>
<body>
    <center>
        <?php
        require "dbconnect.php";
        $firstname = $_REQUEST['FirstName'];
        $lastname = $_REQUEST['LastName']; 
        $gender = $_REQUEST['gender'];
        $address = $_REQUEST['address'];
        

        $sql = "INSERT INTO staff (first_name, last_name, gender, address) VALUES ('$firstname', '$lastname', '$gender', '$address')";


        if($conn->query($sql)===true){
            echo 'records inserted';
        }else{
            echo 'error';
        }
        ?>
    </center>
</body>
</html>