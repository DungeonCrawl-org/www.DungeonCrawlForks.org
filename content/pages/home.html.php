<?php
	$dir_path = "img/titles";
	$files = scandir($dir_path);
	$count = count($files);
	$index = rand(2, ($count-1));
	$filename = $files[$index];
?>

<script
  src="https://unpkg.com/@lottiefiles/dotlottie-wc@0.9.14/dist/dotlottie-wc.js"
  type="module"
></script>

<?php
	echo "<h2>" . _("Welcome to DungeonCrawlForks.org!") . "</h2>";
	echo '<img src="'.$dir_path."/".$filename.'" alt="'.$filename.'"  width="350"  style="float:right">';

	echo '<h3>' . _("<b>BACKGROUND:</b> Dungeon Crawl (DC) is the game with many forks to choose from.") . "</h3>";
	echo _("And this is the NEW website with all the details about DC forks currently being developed where you can:");
 	echo '<ul><li><a href="online_servers">' . _("Play online") . "</a>" . _(" on a DC server.") . "</li>";
	echo     '<li><a href="download_forks">' . _("Download") . "</a>" . _(" an offline version of one of the DC forks.") . "</li>";
	echo     "<li>" . _("Join our ") . '<a href="https://discord.gg/gMnE5JFcB7" target="_blank">' . _("Dungeon Crawl community") . "</a>". _(" discord server; the only place to discuss all DC forks!") . "</li>";
	echo     "<li>" . _("Post to Reddit in ") . '<a href="https://www.reddit.com/r/dungeoncrawl/" target="_blank">' . _("r/dungeoncrawl") . "</a></li></ul>";

	echo "<h2>" . _("The latest NEWS") . "</h2>";
	echo "<ul><li>" . _("The ") . '<a href="https://www.crawlcosplay.org/ccsdt" target="_blank">' . _("Crawl Cosplay Sudden Death Tournament") . '</a>' . _(" (CCSDT#3) is currently LIVE");
?>
<dotlottie-wc
  src="https://lottie.host/8264036f-c526-4820-afa7-7ede2247bd13/Bby6r9p7r8.lottie"
  style="width: 30px;height: 30px"
  autoplay
  loop
></dotlottie-wc>

<?php
	echo     "<li>" . _("Before the end of July, the following will likely be happening:") . "</li>";
	echo     "<ul><li>" . _("In order to reduce costs, the webtiles server CCO (cco.crawlcosplay.org) will be moved to a European server.") . "</li>";
	echo     	 "<li>" . _("A new Webtiles server will be setup in Ontario, Canada to be called: DCF (dcf.dungeoncrawlforks.org") . "</li></ul></ul>";
	
	echo "<h2>" . _("Want to chat?") . "</h2>";
	echo "<p>" . _("Come chat with us on our")
	           . ' <a href="https://discord.gg/gMnE5JFcB7" target="_blank">'
		   . _("Dungeon Crawl community discord server") . '<img src="/img/discord_transparent_border.png" width="18" height="18" ></a> '
		   . _("with over 175 members!") . "</p>";
	
	echo "<p>" . _("Happy Crawling,") . "</p>";
	echo "<p>" . _("RoGGa and the @VIPs members who all help make this site what it is.") . " :-D</p>";
?>
