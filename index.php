<?php
// Output Caching using Predis to significantly improve load times
require __DIR__ . '/vendor/autoload.php';

$redisConfig = [
    'scheme' => 'tcp',
    'host'   => '127.0.0.1',
    'port'   => 6379,
];

try {
    $redis = new Predis\Client($redisConfig);
    
    // Generate a unique cache key based on the URI
    $cacheKey = 'mineib_page_cache_' . md5($_SERVER['REQUEST_URI']);
    
    // Check if we have a cached version
    if ($redis->exists($cacheKey)) {
        echo $redis->get($cacheKey);
        echo "\n<!-- Served blazing fast from Redis Cache -->";
        exit;
    }
} catch (Exception $e) {
    // If Redis is down or not running, gracefully fallback to normal rendering
    $redis = null;
}

// Start capturing all output
ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mine IB - AI Native Engineering Partner</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/logo/mine-ib-logo.png" type="image/x-icon">
    <!-- Header CSS -->
    <link rel="stylesheet" href="assets/css/header.css">
    <style>
        /* Basic body styling for demo */
        .hero-section {
            padding: 100px 20px;
            text-align: center;
            background: linear-gradient(180deg, #f0f7ff 0%, #ffffff 100%);
            min-height: 80vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .hero-tag {
            color: var(--primary-color);
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 2px;
            font-size: 14px;
            margin-bottom: 20px;
        }
        .hero-title {
            font-size: clamp(32px, 5vw, 64px);
            color: var(--text-main);
            max-width: 900px;
            line-height: 1.2;
            margin-bottom: 30px;
            font-weight: 700;
        }
        body {
            overflow-x: hidden;
            width: 100%;
        }
    </style>
    <link rel="stylesheet" href="assets/css/services.css">
    <link rel="stylesheet" href="assets/css/reviews.css">
    <link rel="stylesheet" href="assets/css/creative-services.css">
</head>
<body>

    <?php include 'includes/header.php'; ?>

    <main>
        <?php include 'components/hero.php'; ?>
        <?php include 'components/creative-services.php'; ?>
        <?php include 'components/reviews.php'; ?>
    </main>

</body>
</html>
<?php
// Get the captured HTML
$htmlOutput = ob_get_clean();

// Cache the HTML in Redis for 1 hour if Redis is available
if (isset($redis)) {
    try {
        // Cache for 1 hour (3600 seconds)
        $redis->setex($cacheKey, 3600, $htmlOutput);
    } catch (Exception $e) {
        // Ignore save errors
    }
}

// Finally, output the HTML to the browser
echo $htmlOutput;
?>
