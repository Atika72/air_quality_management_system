<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOcation Search</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <?php
    include_once "./index.php";
    ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7">

                <h4 class="text-center">Search Location</h4>

                <div class="card-body">

                    <form action="" method="GET">
                        <div class="row">
                            <div class="col-md-8">
                                <input placeholder="search location" type="text" name="location_get" value="<?php if (isset($_GET['location_get'])) {
                                                                                                                echo $_GET['location_get'];
                                                                                                            } ?>" class="form-control">
                            </div>
                            <div class="col-md-4">
                                <button type="submit" class="btn btn-primary w-100">Search</button>
                            </div>
                        </div>
                    </form>

                    <div class="row">
                        <div class="col-md-12">
                            <hr>
                            <?php
                            $con = mysqli_connect("localhost", "root", "", "airquality-system");

                            if (isset($_GET['location_get'])) {
                                $location_search = $_GET['location_get'];

                                $query = "SELECT * FROM airinfo WHERE location='$location_search' ";
                                $query_run = mysqli_query($con, $query);

                                if (mysqli_num_rows($query_run) > 0) {
                                    foreach ($query_run as $row) {
                            ?>
                                        <div class="form-group mb-3">
                                            <label for="">location</label>
                                            <input type="text" value="<?= $row['location']; ?>" class="form-control">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="">Air Polution Level</label>
                                            <input type="text" value="<?= $row['plevel']; ?>" class="form-control">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="">Air Quality Index</label>
                                            <input type="text" value="<?= $row['qindex']; ?>" class="form-control">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="">Main Pollutant</label>
                                            <input type="text" value="<?= $row['pollutant']; ?>" class="form-control">
                                        </div>

                            <?php
                                    }
                                } else {
                                    echo "No Record Found";
                                }
                            }

                            ?>

                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>