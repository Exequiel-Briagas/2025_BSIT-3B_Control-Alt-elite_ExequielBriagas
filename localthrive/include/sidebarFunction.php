<?php 
function get_categories() {
    global $mydb;  // Ensure $mydb is accessible, otherwise define it
    
    // Fix the query to check for errors
    $mydb->setQuery("SELECT * FROM `tblcategory`");
    $cur = $mydb->loadResultList();
    
    if ($cur) { // Check if the query returned results
        foreach ($cur as $result) {
            // Safely output category
            $categoryName = htmlspecialchars($result->CATEGORIES, ENT_QUOTES, 'UTF-8');
            echo '<ul>
                    <li><a href="index.php?q=product&category='.$categoryName.'">'.$categoryName.'</a></li> 
                </ul>';
        }
    } else {
        // Handle case where no categories are found
        echo '<p>No categories found.</p>';
    }
}



?>