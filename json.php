<?php

// Function to fetch user data from the JSONPlaceholder API
function getUsers() {
    $url = "https://jsonplaceholder.typicode.com/users";
    $data = file_get_contents($url);
    return json_decode($data, true);
}

// Get the list of users
$users = getUsers();

// Display user information
if (!empty($users)) {
    echo "<h2>User List</h2>\n<ul>";
    
    for ($i = 0; $i < count($users); $i++) {
        echo "<li>";
        echo "<strong>Name:</strong> " . htmlspecialchars($users[$i]['name']) . "<br>";
        echo "<strong>Email:</strong> " . htmlspecialchars($users[$i]['email']) . "<br>";
        echo "<strong>Company:</strong> " . htmlspecialchars($users[$i]['company']['name']) . "<br>";
        echo "</li>\n";
    }
    
    echo "</ul>";
} else {
    echo "<p>No users found.</p>";
}

?>
