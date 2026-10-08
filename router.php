<?php
// Router for PHP built-in server
$uri = $_SERVER['REQUEST_URI'];
$path = parse_url($uri, PHP_URL_PATH);

// If the file exists on disk, serve it directly (CSS, JS, images, etc.)
$filePath = __DIR__ . $path;
if ($path !== '/' && file_exists($filePath) && !is_dir($filePath)) {
    // For PHP files, change to their directory so relative includes work
    if (pathinfo($filePath, PATHINFO_EXTENSION) === 'php') {
        chdir(dirname($filePath));
        include $filePath;
        return true;
    }
    return false; // Let built-in server handle static files
}

// Default: serve PHP/index.php
if ($path === '/' || $path === '') {
    $indexFile = __DIR__ . '/PHP/index.php';
    chdir(dirname($indexFile));
    include $indexFile;
    return true;
}

// Otherwise let the server handle it
return false;
