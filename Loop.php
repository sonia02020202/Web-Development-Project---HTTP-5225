<?php
for ($i = 1; $i <= 40; $i++) {
    if ($i % 4 == 0 && $i % 5 == 0) {
        echo "<p style='color: purple;'>$i</p>";
    } elseif ($i % 5 == 0) {
        echo "<p style='color: red;'>$i</p>";
    } elseif ($i % 4 == 0) {
        echo "<p style='color: blue;'>$i</p>";
    } else {
        echo "<p style='color: black;'>$i</p>";
    }
}
?>

<?php

for($i = 1; $i <= 40; $i++)
{

    if($i % 5 == 0 && $i % 4 == 0)
    {
        echo '<font color="purple">'.$i.'</font>';
    }
    elseif($i % 5 == 0)
    {
        echo '<font color="red">'.$i.'</font>';
    }
    elseif($i % 4 == 0)
    {
        echo '<font color="blue">'.$i.'</font>';
    }
    else
    {
        echo '<font color="black">'.$i.'</font>';
    }

    echo '<br>';

}