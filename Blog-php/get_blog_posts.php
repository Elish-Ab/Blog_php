<?php
// Fetch blog posts from a database or an API
$blogPosts = [
    [
        'title' => 'Blog Post Title 1',
        'publication_date' => 'January 1, 2023',
        'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'
    ],
    [
        'title' => 'Blog Post Title 2',
        'publication_date' => 'February 15, 2023',
        'excerpt' => 'Nullam at consequat nisi. Phasellus at nulla non mauris interdum facilisis.'
    ],
    [
        'title' => 'Blog Post Title 3',
        'publication_date' => 'March 22, 2023',
        'excerpt' => 'Sed malesuada, diam sed congue efficitur, eros neque eleifend massa.'
    ]
];

// Return blog posts as JSON response
header('Content-Type: application/json');
echo json_encode($blogPosts);