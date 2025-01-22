<!doctype html>
<html>
<head>
    <title>Links and Arrays</title>
</head>
<body>
    
    <h1>Links and Arrays</h1>
    
    <p>Use PHP echo and arrays to output the following link information:</p>
        
    <hr>
    
    <?php
    
    $link['name'] = 'Codecademy';
    $link['url'] = 'https://www.codecademy.com/';
    $link['image'] = 'codecademy.png';
    $link['description'] = 'Learn to code interactively, for free.';
    
echo '<h1>'.$link['name'].'</h1>';
echo "URL: " . $link['url'] . "<br>";
echo "Image: " . $link['image'] . "<br>";
echo "Description: " . $link['description'] . "<br>";

    ?>
        
</body>
</html>
