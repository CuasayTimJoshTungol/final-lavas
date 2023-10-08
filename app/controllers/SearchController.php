<?php
// SearchController.php

class SearchController
{
    public function showForm()
    {
        // Display the search form view
        include 'views/search_form.php';
    }

    public function processSearch()
    {
        // Process the search and display the results
        $searchTerm = $_POST['search_term'];
        // Perform your search logic here

        // Display the search results view
        include 'views/search_results.php';
    }
}
