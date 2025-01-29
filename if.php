<!doctype html>
<html>
    <head>
        <title>PHP If Statements</title> 
    </head>
    <body>

        <h1>PHP If Statements</h1> 

        <p>Use PHP echo and variables to output the following link information, use if statements to make sure everything outputs correctly:</p>

        <?php

        // **************************************************
        // Do not edit this code

        // Generate a random number (1, 2, or 3)
        $randomNumber = ceil(rand(1,3));

        // Display the random number
        echo '<p>The random number is '.$randomNumber.'.</p>';

        // Based on the random number PHP will define four variables and fill them with information about Codecademy, W3Schools, or MDN
        
        // The random number is 1, so use Codecademy
        if ($randomNumber == 1) {
            $linkName = 'Codecademy';
            $linkURL = 'https://www.codecademy.com/';
            $linkImage = 'codecademy.png';
            $linkDescription = 'Learn to code interactively, for free.';
        }

        // The random number is 2, so use W3Schools
        elseif ($randomNumber == 2) {
            $linkName = 'W3Schools';
            $linkURL = 'https://www.w3schools.com/';
            $linkImage = 'w3schools.png';
            $linkDescription = 'W3Schools is optimized for learning, testing, and training.';
        }

        // The random number is 3, so use MDN
        else {
            $linkName = 'Mozilla Developer Network';
            $linkURL = 'https://developer.mozilla.org/';
            $linkImage = 'mozilla.png';
            $linkDescription = 'The Mozilla Developer Network (MDN) provides information about Open Web technologies.';
        }

        // **************************************************

        // Display the link information
        echo '<h2>'.$linkName.'</h2>';
        echo '<p>'.$linkDescription.'</p>';
        echo '<p><a href="'.$linkURL.'" target="_blank">Visit '.$linkName.'</a></p>';

        // Display image if available
        if (!empty($linkImage)) {
            echo '<img src="'.$linkImage.'" alt="'.$linkName.'" width="200">';
        }

        ?>

    </body>
</html>