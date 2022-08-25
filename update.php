<?php
//$query = "UPDATE addtodo SET title = '$title', date = '$date' WHERE id ={ $id}";
include_once "config.php";
$id = $_GET['id'] ?? '';
$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

if (!$connection) {
    throw new Exception("Error Connection");
} else {
    $location = $_POST['location'] ?? '';
    $plevel = $_POST['plevel'] ?? '';
    $qindex = $_POST['qindex'] ?? '';
    $pollutant = $_POST['pollutant'] ?? '';
    if ($location && $plevel && $qindex && $pollutant) {
        $updatequery = "UPDATE airinfo SET location = '$location', plevel = '$plevel', qindex = '$qindex', pollutant = '$pollutant' WHERE id = $id";
        $con = mysqli_query($connection, $updatequery);
        header("Location:showInfo.php");
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Update Air Info</title>
    <style>
        input {
            width: 40%;
            height: 50px;
        }
    </style>
</head>

<body>
    <?php
    include_once "./index.php";
    ?>
    <div class="col-xl-5 col-lg-6 col-md-8 col-sm-10 mx-auto form p-4">
        <h1 class="text-center">
            Update Air Info
        </h1>
        <form method="POST">
            <div class="mb-3 ">
                <label for="location" class="form-label">Update Location</label>
                <input type="text" class="form-control" id="exampleInputText1" name="location">
            </div>
            <div class="mb-3 ">
                <label for="plevel" class="form-label">Update Air Polution Level</label>
                <input type="text" class="form-control" id="exampleInputText1" name="plevel">
            </div>
            <div class="mb-3">
                <label for="qindex" class="form-label">Update Air Quality Index</label>
                <input type="text" class="form-control" id="exampleInputText1" name="qindex">
            </div>
            <div class="mb-3">
                <label for="pollutant" class="form-label">Update Main Pollutant</label>
                <input type="text" class="form-control" id="exampleInputText1" name="pollutant">
            </div>
            <input type="hidden" name="action" value="add">
            <button type="submit" class="btn btn-primary" onclick="return confirm('Update Todo From List?')">Update Info</button>
        </form>
    </div>

</body>

</html>