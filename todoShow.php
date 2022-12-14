<?php
include_once './config.php';
$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
$query = "SELECT * FROM `airinfo`";
$resultQuery = mysqli_query($connection, $query);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Air Infos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>

    </style>
</head>

<body>
    <div>
        <?php
        include_once './index.php';
        ?>
    </div>

    <div class="mx-auto" style="width: 80vw;">

        <h1 class="text-center">Air Quality Info</h1>
        <table class="table mx-auto">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Location</th>
                    <th scope="col">Air Pollution Level</th>
                    <th scope="col">Air Quality Index</th>
                    <th scope="col">Main Pollutant</th>
                </tr>
            </thead>
            <tbody>
                <?php

                ?>
                <?php
                while ($data = mysqli_fetch_assoc($resultQuery)) { ?>
                    <tr>
                        <th scope="row"><?php echo $data['id'] ?></th>
                        <td><?php echo $data['location'] ?></td>
                        <td><?php echo $data['plevel'] ?></td>
                        <td><?php echo $data['qindex'] ?></td>
                        <td><?php echo $data['pollutant'] ?></td>
                        <td>
                            <a class="link" href='./add.php' style='text-decoration: none; color:blue'>Add</a>
                            <a class="link" href='./update.php?id=<?php echo $data['id'] ?>' style='text-decoration: none; color: seagreen'>Update</a>
                            <a class="link" href='./delete.php?id=<?php echo $data['id'] ?>' onclick="return confirm('Delete Todo From List?')" style='text-decoration: none; color:red'>Delete</a>

                        </td>
                    </tr>
                <?php  } ?>
            </tbody>
        </table>
    </div>

</body>

</html>