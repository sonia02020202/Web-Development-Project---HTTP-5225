<?php

/*
Zoo Feeding Schedule:
- 5 AM - 9 AM: Breakfast (Bananas, Apples, and Oats)
- 12 PM - 2 PM: Lunch (Fish, Chicken, and Vegetables)
- 7 PM - 9 PM: Dinner (Steak, Carrots, and Broccoli)
- Other times: No feeding
*/

$hour = date('G'); // Get current hour in 24-hour format

// Debugging: Set a fixed time for testing (uncomment for manual testing)
// $hour = 14; // Example: 2 PM

echo '<p>
    The current hour is '.$hour.'.
    </p>';

if ($hour >= 5 && $hour < 9) {
    echo '<p>It\'s breakfast time! The animals should eat: Bananas, Apples, and Oats.</p>';
} elseif ($hour >= 12 && $hour < 14) {
    echo '<p>It\'s lunch time! The animals should eat: Fish, Chicken, and Vegetables.</p>';
} elseif ($hour >= 19 && $hour < 21) {
    echo '<p>It\'s dinner time! The animals should eat: Steak, Carrots, and Broccoli.</p>';
} else {
    echo '<p>The animals are not being fed at this time.</p>';
}

?>
