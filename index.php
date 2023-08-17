
<?php 
$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '/netmatters':
    case '/netmatters/':
        require __DIR__ . '/views/home.php';
        break;

    case '/netmatters/contact':
        require __DIR__ . '/views/contact.php';
        break;

    case '/netmatters/contact/enquiry':
        require __DIR__ . '/views/enquiry.php';
        break;

    default:
        http_response_code(404);
        require __DIR__ . '/views/404.php';
}
?>