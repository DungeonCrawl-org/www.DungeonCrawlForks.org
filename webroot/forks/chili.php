<?php
// Fix path routing for sub-includes inside subdirectories
set_include_path(__DIR__ . '/../');

include __DIR__ . '/../views/header.php'; 
include __DIR__ . '/../views/neck.php'; 
?>

<h1 style="color:orange">Dungeon Crawl Chili</h1>

<h2>DC Chili is a Dungeon Crawl fork based on the Stone Soup (DCSS) fork v0.35 trunk</h2>

<a href="https://dungeoncrawlchili.org/" target="_blank"><img src="/img/forks/dcchili/DungeonCrawlChiliOrg.gif" height=256 style="float:right" title="Your logo here! Contact us to have your logo featured here."></a>
<p>...with significant content to be imported from BCadren Crawl.</p>

<h4>Website: <a href="https://dungeoncrawlchili.org/" target="_blank">www.DungeonCrawlChili.org</a></h4>
<p>The fork was launched in: <b>June 2026</b></p> ...with the goal of having a working beta version on the CCO Webtiles server in time for the CCForksTournament starting at some point in August 2026.

<h4><b>GitHub repository</b>: <a href="https://github.com/DungeonCrawl-org/DungeonCrawlChili" target="_blank">github.com/DungeonCrawl-org/DungeonCrawlChili</a></h4>
<?php include __DIR__ . '/../views/footer.php'; ?>
