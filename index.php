<?php
    $json = file_get_contents("data.json");
    $data = json_decode($json, 1);
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Title</title>
  <style>
    * {
      font-family: Helvetica, sans-serif;
      box-sizing: border-box;
      font-weight: bold;
    }

    table {
      border-collapse: collapse;
      background-color: cornsilk;
    }

    th, td {
      padding: 2px 10px;
      border: 1px solid cornflowerblue;
    }

    h1 {
      color: crimson;
    }
  </style>
</head>
<body>
<h1>Контакты</h1>
<table>
  <thead>
  <tr>
    <th>Фамилия</th>
    <th>Имя</th>
    <th>Телефон</th>
    <th>Адрес</th>
  </tr>
  </thead>
  <tbody><?php foreach ($data as $content) { ?>
    <tr>
      <td><?php echo $content['lastName']; ?></td>
      <td><?php echo $content['firstName']; ?></td>
      <td><?php echo $content['phone']; ?></td>
      <td><?php echo $content['address']; ?></td>
    </tr>
  <?php } ?>
  </tbody>
</table>
</body>
</html>
//    /**
//     * Created by PhpStorm.
//     * User: konstantin
//     * Date: 13.05.2018
//     * Time: 10:18
//     */