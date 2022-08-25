
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Add Air Info</title>
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
            Add Air Info
        </h1>
        <form method="POST" action="./addTask.php">
            <div class="mb-3 ">
                <label for="location" class="form-label">Location</label>
                <input type="text" class="form-control" id="exampleInputText1" name="location">
            </div>
            <div class="mb-3 ">
                <label for="plevel" class="form-label">Air Polution Level</label>
                <input type="text" class="form-control" id="exampleInputText1" name="plevel">
            </div>
            <div class="mb-3">
                <label for="qindex" class="form-label">Air Quality Index</label>
                <input type="text" class="form-control" id="exampleInputText1" name="qindex">
            </div>
            <div class="mb-3">
                <label for="pollutant" class="form-label">Main Pollutant</label>
                <input type="text" class="form-control" id="exampleInputText1" name="pollutant">
            </div>
            <input type="hidden" name="action" value="add">
            <button type="submit" class="btn btn-primary" onclick="return confirm('Add To Air Quality Info?')">ADD INFO</button>
        </form>
    </div>

</body>

</html>