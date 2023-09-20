<?php
// File path to store the visitor count
$countFile = 'visitor_count.txt';

// Read the current visitor count from the file
$count = file_exists($countFile) ? (int)file_get_contents($countFile) : 0;

// Increment the visitor count
$count++;

// Update the visitor count in the file
file_put_contents($countFile, $count);

// Display the visitor count
echo "Visitor Count: " . $count;
?>