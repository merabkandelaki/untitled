<meta charset="UTF-8">
<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');
mb_internal_encoding('UTF-8');

// მოთხოვნები მონაცემთა ბაზასთან MySQL PHP-ის დახმარებით
require_once 'setting.php';

// დაკავშირება MySQL-თან
$connection = new mysqli($host, $user, $pass, $data);
if ($connection->connect_error) die('Error connection');

// მონაცემების მოთხოვნა
$query = "SELECT * FROM users";
$result = $connection->query($query);

if (!$result) die('Error select');

//$rows = $result->num_rows;
//for ($i = 0; $i < $rows; ++$i) {
//    $result->data_seek($i);
//    echo 'ID: ' . $result->fetch_assoc()['id_user'] . ' ';
//    $result->data_seek($i);
//    echo 'name: ' . $result->fetch_assoc()['name'] . '<br>';
//}

foreach ($result as $value) {
    echo 'ID: ' . $value['id_user'] . ', NAME: ' . $value['name'] . ', AGE: ' . $value['age'] .
        ', LOGIN: ' . $value['login'] . '<br>';
}
//$result->close();
//$connection->close();


//echo '<pre>';
//print_r($rows);
//echo '</pre>';
