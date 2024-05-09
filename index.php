<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registered Users</title>
    <style>
        table {
            margin-top: 2em;
        }
    </style>
    <?php require('php/dbconfig.php'); ?>
</head>

<body>
    <h1>Users</h1>
    <a href="registration.php">
        <button>Register New User</button>
    </a>
    <table border="1" width="100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Gender</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT id, first_name, last_name, gender FROM users";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" .
                        $row["first_name"] . " " . $row["last_name"] .
                        "</td>";
                    echo "<td>" .
                        $row["gender"] .
                        "</td>";
                    echo "<td>" .
                        "<a href='edit.php?id=" . $row["id"] . "'>Edit</a>" .
                        "<a href='php/delete-user.php?id=" . $row["id"] . "'>Delete</a>" .
                        "</td>";
                }
            } else {
                echo "0 results";
            }
            ?>
        </tbody>
    </table>
</body>

</html>