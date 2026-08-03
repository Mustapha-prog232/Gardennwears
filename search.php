<?php
// Get the search query from URL parameter
$query = isset($_GET['query']) ? trim($_GET['query']) : '';

if (!empty($query)) {
    // Sanitize input to prevent XSS
    $query = htmlspecialchars($query);
    
    echo "<p>Results for: <strong>$query</strong></p>";
    
    // Perform your search logic here
}
?>