<?php
// Allow requests from any origin
header("Access-Control-Allow-Origin: *");

// Allow specific HTTP methods
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");

// Allow specific headers
header("Access-Control-Allow-Headers: Content-Type, Authorization");

// If this is a preflight request, terminate early
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit();
}

// Your actual PHP logic
header('Content-Type: application/json');

// Example dynamic data
$data = [
    [
        "title" => "How to Start Blogging",
        "description" => "Learn the basics of starting your blogging journey with simple steps.",
        "image" => "./assets/blog.jpg"
    ],
    [
        "title" => "Modern Web Design Trends",
        "description" => "Explore the latest design trends in the web development world.",
        "image" =>"./assets/web-design.jpg"
    ],
    [
        "title" => "SEO Tips for 2025",
        "description" => "Optimize your blog for search engines with these essential tips.",
        "image" => "./assets/seo.jpg"
    ],
    [
        "title" => "JavaScript Best Practices",
        "description" => "Improve your JavaScript code with these tried-and-tested best practices.",
        "image" => "./assets/javascript.jpg"
    ],
    [
        "title" => "Content Marketing Strategies",
        "description" => "Boost your online presence with effective content marketing strategies.",
        "image" => "./assets/content-marketing.jpg"
    ],
    [
        "title" => "Understanding Web Accessibility",
        "description" => "Learn how to make your websites accessible to everyone.",
        "image" => "./assets/accessibility.jpg"
    ],
    [
        "title" => "Mobile-First Design Principles",
        "description" => "Build responsive designs with mobile-first design principles.",
        "image" => "./assets/mobile-design.jpg"
    ],
    [
        "title" => "How to Monetize Your Blog",
        "description" => "Explore different ways to generate income from your blog.",
        "image" => "./assets/monetize-blog.jpg"
    ],
    [
        "title" => "Using AI in Content Creation",
        "description" => "Leverage AI tools to streamline your content creation process.",
        "image" => "./assets/ai-content.jpg"
    ],
    [
        "title" => "Mastering CSS Grid Layouts",
        "description" => "Learn how to use CSS Grid for powerful layout designs.",
        "image" => "./assets/css-grid.jpg"
    ]
];

// Send JSON response
echo json_encode($data);
?>


