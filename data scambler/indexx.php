<?php

include_once 'functions.php';

$task = 'encode';

if(isset($_GET['task']) && $_GET['task'] !='' ){
    $task = $_GET['task'];
}

$key_original =  'abcdefghijklmnopqrstuvwxyz1234567890';
$shuffle_key = '';

if('key' == $task || 'encode' == $task ){
    $key_orginal = str_split($key_original);
    shuffle($key_orginal);
    $shuffle_key = join('', $key_orginal);
}else if ( isset($_REQUEST['key']) && $_REQUEST['key']!=''){
    $shuffle_key = $_REQUEST['key'];
}
;

$encodedDecodeData = '';
if('encode' == $task ){

    if(isset($_POST['message']) && $_POST['message']!=''){
        $message = $_POST['message'];
        $encodedDecodeData = encodeData($shuffle_key, $message);
    }
}


if('decode' == $task ){
    $shuffle_key = '';
    if ( isset($_POST['key']) && isset($_POST['message'])){
        $message = $_POST['message'];
        $key = $_POST['key'];
        var_dump($key, $message );
        $encodedDecodeData = decodeData($key, $message);
    }

}













?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Data Scrambler</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/milligram/1.3.0/milligram.css">

</head>
<body>
<div class="container p-5">
        <div class="row">
            <div class="col-12">
                <h1>Data Scrambler</h1>
            </div>
            <div class="col-12">
              <p>Use this application to scramler your data</p>
            </div>

            <div class="col-12">
                <a href="indexx.php?task=encode">Encode |</a>
                <a href="indexx.php?task=decode">Decode |</a>
                <a href="indexx.php?task=key">Genarate Key </a>
            </div>
        </div>
    <div class="row">
        <form method="POST" action="indexx.php?task=<?php if('decode'==$task){echo 'decode'; }?>">

            <label for="key">Genarate Key</label>
            <input type="text"  name="key" id="key" <?php displayKey($shuffle_key); ?> >

            <label for="entry">Entery</label>
            <textarea  id="entry" cols="30" name="message" rows="10"><?php if(isset($_POST['message'])){echo $_POST['message'];} ?></textarea>

            <label for="Result">Result</label>
            <textarea name="Result" id="Result" cols="30" rows="10"><?php echo $encodedDecodeData ?></textarea>

            <input type="submit">
        </form>
    </div>

</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>









































