<?php
require_once "config.php" ;
// mysqli extention
// 4 steps to do
# 1-- >  conection
# 2-- > statment
# 3-- > excute
# 4-- > result



// echo "<pre>";
// var_dump($my_connection);
// echo "</pre>";

$stat = 'SELECT * FROM `employees` WHERE 1';


$excute = mysqli_query($my_connection, $stat);

// echo "<pre>";
// var_dump($excute);
// echo "</pre>";








?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <!-- css links -->
</head>
<body>
  <form action="reg.php" method="post">
    <input type="text" name='username'>
    <input type="text" name='email'>
    <button>regester</button>
  </form>


  <table class="table">
<thead>
  <tr>
    <th scope="col">#</th>
    <th scope="col">First</th>
    <th scope="col">Last</th>
    <th scope="col">Handle</th>
  </tr>
</thead>
<tbody>

<?php for ($i = 0 ; $i < $excute->num_rows ; $i++) : ?>
<?php $row = mysqli_fetch_assoc($excute) ?>
  <tr>
      <th scope="row"><?= $row['employee_id'] ?></th>
      <td><?= $row['first_name'] ?></td>
      <td><?= $row['last_name'] ?></td>
      <td><?= number_format($row['salary']) ?></td>
    </tr>

<?php endfor ?>

  </tbody>
</table>


<!-- js scripts -->
</body>
</html>