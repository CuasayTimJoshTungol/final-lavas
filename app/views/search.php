<?php
// Database connection (you may need to customize this part)
$dbHost = 'localhost';
$dbUser = 'root';
$dbPass = '';
$dbName = 'crudbd';

$conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

if (!$conn) {
    die('Database connection error: ' . mysqli_connect_error());
}

// Handle form submission
if (isset($_GET['query'])) {
    $searchQuery = $_GET['query'];

    // Perform the search query (customize this query based on your database structure)
    $sql = "SELECT * FROM tblbd WHERE FullName LIKE '%$searchQuery%'";

    $result = mysqli_query($conn, $sql);

    if (!$result) {
        die('Query error: ' . mysqli_error($conn));
    }

    // Display search results
    echo '<h2>Search Results</h2>';
    echo '<ul>';
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<li>' . $row['FullName'] . ' (Year ' . $row['YearLevel'] . ')</li>';
    }
    echo '</ul>';
}
?>

<!-- Include your HTML search form here -->
<form action="/search" method="post">
    <label for="search_term">Search:</label>
    <input type="text" id="search_term" name="search_term" required value="<?= isset($_POST['search_term']) ? htmlspecialchars($_POST['search_term']) : '' ?>">
    <button type="submit">Search</button>
</form>
