<?php
//connect to the MySOL database
$connect = mysqli_connect(
        'localhost',
        'root',
        '',
        'demo'
);

// Create a query
$query = 'SELECT *
    FROM teams
    ORDER BY name';
$result = mysqli_QUERY($connect, $query);

//output the number of the rows
echo 'Rows: '.mysqli_num_rows($result);

while($record = mysqli_fetch_assoc($result))
{
    //out each record
    //print_r($record);

    echo '<h2>'.$record['name'].'</h2>';
    echo '<p>
        League: '.$record['league'].'
        <br>
        Rank: '.$record['rank'].'
        </p>';
    if($record['logo'])  
    { 
    echo '<img src="images/'.$record['logo'].'" width="100">';
    }
    echo '<hr>';
}