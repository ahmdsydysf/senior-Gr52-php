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
// var_dump($_SERVER);

$all_errors = [];

$allowed_ext = ['png' , 'jpg' , 'jpeg'];

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(isset($_FILES['my_image'])) {
        if($_FILES['my_image']['error'] != 4) {


            // $img_name =  $_FILES['my_image']['name'];
            // $img_tmp =  $_FILES['my_image']['tmp_name'];
            // $img_size =  $_FILES['my_image']['size'];

            $my_img = $_FILES['my_image'];// 6 attr
            $img_name = uniqid() . $my_img['name']; //65328677a.pdf412bwallpap5.png5555erflare.com_wallpaper(8).jpg
            $img_tmp = $my_img['tmp_name'];
            $img_size = $my_img['size'] ;

            $img_ext = explode('.', $img_name);//[65328677a ,pdf412bwallpap5 , png5555erflare , com_wallpaper(8) , jpg ]
            $img_f_ext = end($img_ext);// jpg
            $ext = strtolower($img_f_ext);

            if($img_size < 2097152) {
                if($_FILES['my_image']['type'] == 'image/jpeg') {

                    if(in_array($ext, $allowed_ext)) {
                        move_uploaded_file($img_tmp, 'uploads/profiles/' . $img_name);
                    } else {
                        $all_errors['f_ext'] = 'plz upload file type jpg png jpeg';
                    }
                }

            } else {
                $all_errors['f_size'] = 'plz upload file max 2 miga';
            }


        } else {
            $all_errors['f_exist'] = 'plz choose a file';
        }
    }
}



?>
<?php if(! empty($all_errors)) : ?>
  <?php foreach($all_errors as $error) : ?>

    <div class="alert alert-info">
      <?= $error ?>
    </div>

  <?php endforeach ?>
<?php endif ?>
  <form method="post" enctype="multipart/form-data">

    <!-- <input type="text" name='un'>
    <input type="email" name='em'>
    <input type="number" name='nu'>
    <input type="password" name='pw'>

    <input type="radio" name="gender" checked value="m" id="">male
    <input type="radio" name="gender" value="f" id="">female

    <select name="country[]" multiple>
      <option  value="eg">egyp</option>
      <option value="su">suda</option>
      <option selected value="li">liby</option>
      <option value="sud">sudi</option>
    </select>

    <textarea name="description" id="" cols="30" rows="10">
      
    </textarea>

    <input type="checkbox" name="course[]" value="html_co" id="">HTML
    <input type="checkbox" name="course[]" value="css_co" id="">CSS
    <input type="checkbox" checked name="course[]" value="js_co" id="">Javascript
    <input type="checkbox" name="course[]" value="php_co" id="">PHP

     -->
    <!-- 
        <input type="radio" name="course" id="">html
        <input type="radio" name="course" id="">css
        <input type="radio" name="course" id="">js
      -->

      <input type="file" name="my_image" id="">

    <button>sub</button>
  </form>

</body>
</html>