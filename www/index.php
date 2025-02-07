<?php

$connect = mysqli_connect(
    'db',
    'demo',
    'password',
    'demo'
);

$query = 'SELECT * 
    FROM colours
    ORDER BY name';
$result = mysqli_query($connect, $query);

while($record = mysqli_fetch_assoc($result))
{

    echo '<h2>'.$record['name'].'</h2>
        <div style="
            width:100px; 
            height:100px; 
            background-color:#'.$record['rgb'].';"></div>
        <hr>';

    echo '<pre>';
    print_r($record);
    echo '</pre>';

}