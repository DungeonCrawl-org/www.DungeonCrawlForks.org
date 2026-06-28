<?php
// Fix path routing for sub-includes inside subdirectories
set_include_path(__DIR__ . '/../');

include __DIR__ . '/../views/header.php'; 
include __DIR__ . '/../views/neck.php'; 
?>

<h1 style="color:orange">BCrawl</h1>

<h2>BCrawl: a Dungeon Crawl fork based on Stone Soup fork (DCSS) v0.2x</h2>

<img src="/img/forks/bcrawl/xtuhua.png" style="float:right">

<p>GitHub repo: <a href="https://github.com/b-crawl/bcrawl" target="_blank">github.com/b-crawl/bcrawl</a></p>

<p>Download at: <a href="https://github.com/b-crawl/bcrawl/releases" target="_blank">github.com/b-crawl/bcrawl/releases</a></p>

<p>View the <a href="https://b-crawl.github.io/" target="_blank">About BCrawl</a> page.</p>

<p>Stats pages for BCrawl: <a href="https://bcrawl.montres.org.uk/overview.html" target="_blank">bcrawl.montres.org.uk/overview.html</a></p>
<?php include __DIR__ . '/../views/footer.php'; ?>