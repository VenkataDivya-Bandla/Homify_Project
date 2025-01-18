<?php
// Sample user reviews and ratings for a product
$userReviews = array(
    array('rating' => 4),
    array('rating' => 5),
    array('rating' => 3),
    array('rating' => 4),
    array('rating' => 5),
);

// Function to calculate the average rating
function calculateAverageRating($reviews) {
    $totalRatings = 0;
    foreach ($reviews as $review) {
        $totalRatings += $review['rating'];
    }
    $averageRating = $totalRatings / count($reviews);
    return $averageRating;
}

// Calculate and display the average rating
$averageRating = calculateAverageRating($userReviews);
echo "Average Rating: " . round($averageRating, 1); // Rounded to 1 decimal place
?>
