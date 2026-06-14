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

	<meta name="default" content="Dungeon Crawl Forks: DCSS, Stoat Soup, BCrawl & BCadren!">

<style>
    #gloamvault-close {
    position: absolute;
    top: 4px;
    right: 4px;
    z-index: 99999;
    cursor: pointer;
}

        .floated-video {
            float: right;         /* Pulls the video to the right */
            margin-left: 20px;    /* Adds space between the text and the video */
            margin-bottom: 10px;  /* Adds space below the video */
            max-width: 67%;       /* Ensures the video scales responsively */
            height: auto;
        }

        /* Prevents subsequent website sections from breaking */
        .clearfix::after {
            content: "";
            clear: both;
            display: table;
        }
	
table {
    width: 100%;
    border-collapse: collapse;
    border: 0px solid #ccc;
    font-size: 16px;
}
td, th {
    text-align: left;
    padding: 2px 4px;
}
th {
    border-top: 2px solid #ddd;
    border-bottom: 2px solid #ddd;
}

#table_for_float_image {
  border-collapse: separate;
  border-spacing: 15px 50px;
}

.centerTable { 
    margin: 0px auto; 
    border: none;
}

h1	{
	font-size: 48px;
	text-align: center;
}

.dropbtn {
  background-color: #7D623C;
  color: black;
  padding: 12px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  right: 0;
  background-color: #7D623C;
  min-width: 500px;
  white-space: nowrap;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 12px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #000000;}
.dropdown:hover .dropdown-content {display: block;}
.dropdown:hover .dropbtn {background-color: #7D623C;}

	.ad-banner {
	  text-align: center;
	  margin: 20px 0;
	}
	
	.ad-banner img {
	  max-width: 100%; /* Makes it responsive */
	  height: auto;
	  border-radius: 8px;
}

    .floating-banner {
        position: fixed;
        right: 32px;       /* Distance from right edge */
        top: 50%;          /* Center vertically */
        transform: translateY(-50%); 
        z-index: 9999;     /* Keeps it on top of other content */
        box-shadow: 0 4px 10px rgba(0,0,0,0.2);
    }

    .floating-banner img {
        display: block;
        width: 160px;      /* Standard wide skyscraper width */
        height: auto;
    }

    .close-btn {
        position: absolute;
        top: -10px;
        right: -10px;
        background: #000;
        color: #fff;
        border: none;
        border-radius: 50%;
        width: 25px;
        height: 25px;
        cursor: pointer;
        font-size: 16px;
    }

    /* Hide on small screens to avoid covering content */
    @media (max-width: 1024px) {
        .floating-banner {
            display: none;
        }
    }
</style>

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
