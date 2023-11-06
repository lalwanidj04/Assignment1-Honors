<?php
require 'DbConnection.php';
$pdo = DbConnection::make();
if($_SERVER['REQUEST_METHOD']==='POST'){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $city = $_POST['city'];

    $query = "INSERT INTO users (name,email,gender,city) VALUES (?,?,?,?)";
    $statement = $pdo->prepare($query);
    if($statement->execute([$name,$email,$gender,$city]))
    {
        echo'Data Entered Successfully';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class = "text-center">
        <h1> User Form </h1>
        <form method="post" action="form.php">
            <div>
                <label class="form-label">Name</label>
                <input type="text" name="name"  required>
            </div><br>
            <div>
                <label class="form-label">Email</label>
                <input type="text" name="email" required>
            </div><br>
            <div>
                <label class="form-label">Gender</label>
                <input type="radio" name="gender" value="male" required>Male
                <input type="radio" name="gender" value="female">Female
                <input type="radio" name="gender" value="other">Other
            </div><br>
            <div>
                <label class="form-label">City</label>
                <select name="city" class="form-select">
                    <option value="nagpur">Nagpur</option>
                    <option value="mumbai">Mumbai</option>
                    <option value="delhi">Delhi</option>
                    <option value="chennai">Chennai</option>
                    <option value="hyderabad">Hyderabad</option>
                    <option value="pune">Pune</option>
                    <option value="ahmedabad">Ahmedabad</option>
                </select>
            </div><br>
            <div>
                <button class="btn btn-secondary">Submit</button>
            </div>
        </form>
        <a href="index.html"><button>Go Back</button></a>
    </div>
</body>
</html>
