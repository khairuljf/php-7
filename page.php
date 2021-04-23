<?php

include_once 'page-functions.php';

?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/milligram/1.3.0/milligram.css">

    <title>Hello, world!</title>
</head>
<body>
<div class="container p-5">
    <h1>Form</h1>
    <div class="row">
        <div class="col-12">

            <?php

            // $_request[''] it will work for get & post method

            $fname = '';
            $lname = '';
            $checkded = '';

            if(isset($_POST['checkbox']) && !empty($_POST['checkbox'])==1){
                //var_dump($_POST['checkbox']);
                $checkded = 'checked';
            }



            ?>

            <?php if(isset($_POST['fname']) && !empty($_POST['fname']) ): ?>
            <?php $fname = filter_var( $_POST['fname'],FILTER_SANITIZE_STRING) ?> <br>
            <?php endif; ?>
            <?php if(isset($_POST['lname']) && !empty($_POST['lname'])): ?>
            <?php  $lname = $_POST['lname'] ?>
            <?php endif; ?>


            <p>First Name : <?php echo $fname ?></p>
            <p>Last Name : <?php echo $lname ?></p>
        </div>
        <div class="col-12">
            <form action="" method="post">
                <label for="fname">First Name</label>
                <input name="fname" type="text" placeholder="First name" id="fname" value="<?php echo $fname ?>">
                <label for="lname">First Name</label>
                <input name="lname" type="text" placeholder="Last name" id="lname"  value="<?php echo $lname ?>" >


                <label for="checkbox" > <input type="checkbox" name="checkbox" value="1" <?php echo $checkded; ?> id="checkbox">Single Check Input</label>

                <h3 class="m-0 p-0">Multiple Check box</h3>
                <label> <input type="checkbox" name="fruits[]"  value="Mango" <?php isFruitsChecked('Mango') ?> > Mango</label>
                <label> <input type="checkbox" name="fruits[]" value="Banana" <?php isFruitsChecked('Banana') ?>  > Banana</label>
                <label> <input type="checkbox" name="fruits[]"  value="Grape" <?php isFruitsChecked('Grape') ?> > Grape</label>
                <label> <input type="checkbox" name="fruits[]" value="Pineaaple" <?php isFruitsChecked('Pineaaple') ?> > Pineaaple</label>




                <?php
                function displayVegetables($vegetables){
                    foreach ($vegetables as $vegetable){
                        printf('<option value="%s">%s</option>', strtolower($vegetable), ucwords($vegetable));
                    }
                }


                $vegetables =array('alu','begun','potol');


                if(isset($_POST['vegetable']) && !empty($_POST['vegetable'])){
                    printf("You have selected %s", ucwords($_POST['vegetable']) );
                }


                ?>

                <h3 class="m-0 p-0">Select option</h3>
                <select name="vegetable" id="">
                    <option value="" selected disabled>Choose vagetable</option>
                    <?php displayVegetables($vegetables); ?>
                </select>


                <button type="submit">Submit</button>
            </form>
        </div>
    </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>









































