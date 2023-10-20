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

?>
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