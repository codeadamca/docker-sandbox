<?php

$connect = mysqli_connect(
    'db', 
    'demo', 
    'password'
);
mysqli_select_db($connect, 'demo');

$query = 'SELECT * FROM colours';
$result = mysqli_query($connect, $query);

while($record = mysqli_fetch_assoc($result))
{
    echo '<pre>';
    print_r($record);
    echo '</pre>';
}
