<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>inputs</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>

</head>
<body cz-shortcut-listen="true">
<?php
var_dump($_GET);
var_dump($_POST);
var_dump($_FILES);
//var_dump($_SERVER);
$all_errors = [];
$allowed_ext = ['png' , 'jpg' , 'jpeg'];

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(isset($_FILES['my_images'])) {
        $count = count($_FILES['my_images']['size']);//1 , 2 , 3

        if($_FILES['my_images']['error'][0] != 4) {

            $fil   = $_FILES['my_images'];

            $nm    = $fil['name'];
            $tmp   = $fil['tmp_name'];
            $siz   = $fil['size'];
            $doc_root =  $_SERVER['DOCUMENT_ROOT'] . '/senior-Gr52-php/uploads/';
            for($i = 0 ; $i < $count ; $i++) {
                $expload = explode('.', $nm[$i]);
                $end = end($expload);
                $ext = strtolower($end);
                var_dump($nm[$i]);
                if($siz[$i] < 2097152) {
                    if(in_array($ext, $allowed_ext)) {
                        move_uploaded_file($tmp[$i], $doc_root . 'profiles/' . uniqid() . $nm[$i]);
                    }
                } else {
                    $all_errors["file_size$i"] = "plz check you file size max 2 miga not $siz[$i] on file name $nm[$i]";
                }
                // move_uploaded_file($_FILES['my_images']['tmp_name'][$i], "uploads/profiles/ahmed$i.jpg");
            }
        } else {
            $all_errors['file_choose'] = 'plzchoose file';
        }


    }
}

// $_FILES = [
//   'my_images' => [
//   name =>   [name1 , name2 ]
//   size =>  [size1 , size2 ],
//    [name , size , name],
//    [name , size , name],
//   ]
//   ];
?>


<?php if(! empty($all_errors)) : ?>
  <?php foreach($all_errors as $error) : ?>

    <div class="alert alert-info">
      <?= $error ?>
    </div>

  <?php endforeach ?>
<?php endif ?>


  <form method="post" enctype="multipart/form-data">

      <input multiple type="file" name="my_images[]" id="">

    <button>sub</button>
  </form>

</body>
</html>