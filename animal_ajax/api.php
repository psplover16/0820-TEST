<?php
$db = new PDO("mysql:host=127.0.0.1;dbname=php_study;charset=utf8", "root", "");

switch ($_GET['do']) {
  case 'select':
    $sql = "SELECT * FROM ch7_animal";
    $rows = $db->query($sql)->fetchAll();
    // print_r($rows);
    foreach ($rows as $row) {
      echo '
        <tr>
          <td>'.$row['id'].'</td>
          <td class="name">'.$row['name'].'</td>
          <td>'.$row['weight'].'</td>
          <td>'.$row['info'].'</td>
          <td>'.$row['date']. '</td>
          <td>
            <button class="mdy">修改</button>
            <button>刪除</button>
          </td>
        </tr>
      ';
    }
    break;
}
