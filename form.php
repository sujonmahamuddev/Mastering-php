<?php require_once 'form-functions.php'; ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Mastering PHP</title>

</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-12">

            <div class="row py-5">
                <div class="col-md-6 m-auto">
                    <div class="result">



                    </div>
                    <form method="GET">
                        <label for="fname">First Name</label>
                        <input class="form-control mb-3" type="text" name="fname" id="fname" value="<?php echo $fname; ?>" placeholder="First Name">
                        <label for="lname">Last Name</label>
                        <input class="form-control mb-3" type="text" name="lname" value="<?php echo $lname; ?>" id="lname" placeholder="Last Name">
                        <button class="btn btn-success" type="submit">Submit</button>
                    </form>

                </div>
            </div>

        </div>
    </div>
</div>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>