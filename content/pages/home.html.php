<?php
	$dir_path = "img/titles";
	$files = scandir($dir_path);
	$count = count($files);
	$index = rand(2, ($count-1));
	$filename = $files[$index];

	echo "<h2>" . _("Welcome to DungeonCrawlForks.org!") . "</h2>";
	echo '<img src="'.$dir_path."/".$filename.'" alt="'.$filename.'"  width="350"  style="float:right">';

	echo '<h3>' . _("<b>BACKGROUND:</b> Dungeon Crawl (DC) is the game with many forks to choose from.") . "</h3>";
	echo _("And this is the NEW website with all the details about DC forks currently being developed where you can:");
 	echo '<ul><li><a href="online_servers">' . _("Play online") . "</a>" . _(" on a DC server.") . "</li>";
	echo     '<li><a href="https://www.dungeoncrawlcentral.org/download_forks.html" target="_blank">' . _("Download") . "</a>" . _(" an offline version of one of the DC forks.") . "</li>";
	echo     "<li>" . _("Join our ") . '<a href="https://discord.gg/gMnE5JFcB7" target="_blank">' . _("Dungeon Crawl community") . "</a>". _(" discord server; the only place to discuss all DC forks!") . "</li>";
	echo     "<li>" . _("Post to Reddit in ") . '<a href="https://www.reddit.com/r/dungeoncrawl/" target="_blank">' . _("r/dungeoncrawl") . "</a></li></ul>";

	echo "<h2>" . _("Watch a video about the Crawl Cosplay website") . "</h2>";
	echo "<p>" . _("For indepth details about the Crawl Cosplay website, see:")
		   . ' <a href="https://www.youtube.com/watch?v=x7u0PwESwPM&t=39s" target="_blank">' . _("Dumalacath's CC video") . "</a></p>";

	echo "<h2>" . _("Want to chat?") . "</h2>";
	echo "<p>" . _("Come chat with us on our Dungeon Crawl Crawl community")
	           . ' <a href="https://discord.gg/gMnE5JFcB7" target="_blank">'
		   . _("Discord server") . '<img src="/img/discord_transparent_border.png" width="18" height="18" ></a> '
		   . _("with over 300 members!") . "</p>";
	
	echo "<p>" . _("Happy Crawling,") . "</p>";
	echo "<p>" . _("from RoGGa your host, and the @VIPs members who all help make this site what it is.") . " :-D</p>";
?>
