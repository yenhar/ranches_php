<!DOCTYPE html>

<html lang="en">



<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edit</title>

    <style>

        form div {

            margin-bottom: 10px;

        }

    </style>

</head>



<body>

    <a href="index.php">

        <button>Back</button>

    </a>

    <form action="php/update.php?id=<?php echo $_GET['id']; ?>" method="POST">

        <div>

            <h1>Form Update</h1>

        </div>

        <div>

            <label for="first_name">First Name</label> <br />

            <input type="text" id="first_name" name="first_name" placeholder="First name" autocomplete="false">

        </div>

        <div>

            <label for="last_name">Last Name</label> <br />

            <input type="text" id="last_name" name="last_name" placeholder="Last name" autocomplete="false">

        </div>

        <div>

            <label for="gender">Gender</label> <br />

            <input type="radio" id="gender" name="gender" value="Male"> Male

            <input type="radio" id="genderFemale" name="gender" value="Female"> Female

            <input type="radio" id="genderOthers" name="gender" value="Others"> Others

        </div>

        <div>

            <button type="submit">Update</button>

        </div>

    </form>

</body>



</html>
