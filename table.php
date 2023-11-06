<?php
require 'database/DBConnection.php';
$pdo = DbConnection::make();
$query = "SELECT * FROM users";
$stmt = $pdo->query($query);
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html>
<head>
    <title>User Data</title>
    
    <style>
    body {
        background: linear-gradient(112.1deg, rgb(32, 38, 57) 11.4%, rgb(63, 76, 119) 70.2%);
        background-color: #003366;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    }

    h1 {
        text-align: center;
        color: #fff;
        padding: 10px;
        font-size: 24px;
    }

    table {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        margin: auto;
        width: 80%;
        text-align: center;
        padding: 20px;
        background: linear-gradient(90deg, #4a90e2 0%, #6f72ca 100%);
        border: 1px solid #ccc;
        border-collapse: collapse;
        border-radius: 10px;
    }

    th, td {
        border: 1px solid #ccc;
        padding: 15px;
        text-align: center;
        background-color: #f2f2f2;
        color: #333;
    }

    th {
        background-color: #333;
        color: #fff;
    }

    tr:nth-child(even) {
        background-color: #e6e6e6;
    }
</style>

</head>
<body>
    <h1>Users Data</h1>
    <table>
        <tr>
            <th>Name</th>
            <th>Gender</th>
            <th>Email</th>
            <th>City</th>
        </tr>
        <?php foreach ($users as $user) : ?>
            <tr>
                <td><?php echo $user['name']; ?></td>
                <td><?php echo $user['gender']; ?></td>
                <td><?php echo $user['email']; ?></td>
                <td><?php echo $user['city']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
