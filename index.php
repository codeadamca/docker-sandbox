<?php

$connect = mysqli_connect(
    'db',
    'demo',
    'password',
    'demo'
);

$query = 'SELECT *
    FROM test';
$result = mysqli_query($connect, $query);

echo '<h1>MySQL Content:</h1>';

while($record = mysqli_fetch_assoc($result))
{
    echo '<h2>'.$record['something'].'</h2>';
    echo '<hr>';
}



// phpinfo();

