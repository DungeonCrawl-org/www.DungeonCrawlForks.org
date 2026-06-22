<!DOCTYPE html>
<?php echo $this->part('head_localisation'); ?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?=$page_title ?? 'Dungeon Crawl Forks'?></title>
    <link rel="icon" href="/img/Rift.png" type="image/png">
    <!-- <link rel="stylesheet" 	href="/css/reset.css"> -->
    <link rel="stylesheet" href="/css/default.css?v=<?=time()?>">
    <!-- <link rel="stylesheet" href="https://crawl.develz.org/tournament/0.23/tourney-score.css"> -->

	<meta name="default" content="Dungeon Crawl Forks: DCSS, Stoat Soup, BCrawl, BCadren, and Dungeon Crawl Chili.">

<?php

    if (isset($meta) && is_array($meta) && isset($meta['filename'])) {
        $meta += [
            'width' => 256,
            'height' => 256,
            'alt' => "Dungeon Crawl Forks",
            'type' => "image/png",
        ];
        if (strpos($meta['filename'], 'https') === 0) {
            $meta['secure_filename'] = $meta['filename'];
            $meta['filename'] = str_replace("https", "http", $meta['filename']);
        } else {
            $meta['secure_filename'] = str_replace("http", "https", $meta['filename']);
        }
        echo <<<META
            <meta property="og:image" content="{$meta['filename']}" />
            <meta property="og:image:secure_url" content="{$meta['secure_filename']}" />
            <meta property="og:image:type" content="{$meta['type']}" />
            <meta property="og:image:width" content="{$meta['width']}" />
            <meta property="og:image:height" content="{$meta['height']}" />
            <meta property="og:image:alt" content="{$meta['alt']}" />
        META;
    }

?>
</head>
<body class="page_back">
<div class="page_floor">
