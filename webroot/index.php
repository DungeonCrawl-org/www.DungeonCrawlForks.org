<?php 
    include 'views/header.php';
    include 'views/neck.php';
	echo "<h2><center><img src='/img/portals/exit_dungeon.png'>" . _(" Welcome to DungeonCrawlForks.org! ") . "<img src='/img/portals/exit_dungeon.png'></center></h2>";
	echo '<a href="/forks/chili"><img src="/img/forks/dcchili/DungeonCrawlChiliOrg-YourLogoHere.gif"  width="256" style="float:right" title="Want your logo here? Contact RoGGa via discord!"></a>';
	echo '<h4>' . _("Dungeon Crawl (DC) is the game with many forks to choose from,") . "</h4>";
	echo _("and this is the <b>NEW</b> website with all the details about DC forks currently being developed where you can:");
 	echo '<ul><li><a href="online_servers">' . _("Play online") . "</a>" . _(" for free on a DC server located in various countries around the world.") . "</li>";
	echo     '<li><a href="download_forks">' . _("Download") . "</a>" . _(" an offline version for free of one of the DC forks.") . "</li>";
	echo     '<li><a href="forks_details">' . _("View a fork's details") . "</a>.</li>";
	echo     "<li>" . _("Join our ") . '<a href="https://discord.gg/gMnE5JFcB7" target="_blank">' . _("Dungeon Crawl community") . "</a>". _(" discord server; the only place to discuss all DC forks!") . "</li>";
	echo     "<li>" . _("Read or Post to subReddit: ") . '<a href="https://www.reddit.com/r/dungeoncrawl/" target="_blank">' . _("r/dungeoncrawl") . "</a></li></ul>";

	echo "<h2>" . _("The latest NEWS") . "</h2>";
	echo "<ul><li>" . _("A new Dungeon Crawl fork was launched in June and it is named: ") . "<a href='https://www.dungeoncrawlforks.org/forks/chili' target='_blank'><b>Dungeon Crawl Chili</b></a> (DC Chili)</li>";
	echo     "<li>" . _("DC Chili is available to play online on the new Webtiles server <a href='https://dcf.dungeoncrawlforks.org/' target='_blank'><b>Dungeon Crawl Fajita (DCF)</b></a> located in Ontario Canada</li>");
	echo     "<li>" . _("During July, the webtiles server <a href='https://cco.crawlcosplay.org' target='_blank'><b>CCO</b></a> will be moving to a European server in order to reduce monthly costs and will also be hosting Dungeon Crawl Chili.") . "</li>";
	echo     "<li>" . _("Also during July, the leadership of Crawl Cosplay will be handed over progressively from RoGGa to Colgate, with Draconius offering support to Colgate for external PR things, especially for communications with the DCSS team. FYI, the primary purpose of this leadership transfer is to try to acheive the remaining 2026 ojectives for Crawl Cosplay in regards to interactions with the DCSS team.</li>");
	echo 	 "<li>" . _("The ") . '<a href="/ccft">' . _("Crawl Cosplay Forks Tournament") . '</a> (CCFT#2) ' . _("will start in August.") . "</li>";
	echo 	 "<li>" . _("The ") . '<a href="/cctt">' . _("Crawl Cosplay Trunk Tournament") . '</a> (CCFT#2) ' . _("will likely start in October.") . "</li></ul>";

	echo "<h2>" . _("Want to chat?") . "</h2>";
	echo '<img src="/img/title_banner/DungeonCrawlForks-chatGPTimage.gif" title="Image created by ChatGPT with guidance from RoGGa." style="float:right">';
	echo "<p>" . _("Come chat with us on our")
	           . ' <a href="https://discord.gg/gMnE5JFcB7" target="_blank">'
		   . _("Dungeon Crawl community discord server") . '<img src="/img/discord_transparent_border.png" width="18" height="18" ></a> '
		   . _("with over 175 members!") . "</p>";	
	echo "<p>" . _("Happy Crawling!") . "</p>";
?>
<h2>Other Websites</h2>
<ul>
	<li><a href="https://www.crawlcosplay.org/" target="_blank">Crawl Cosplay</a> website</li>
    <li><a href="https://discord.gg/JYJf7ndQJK" target="_blank">Crawl Cosplay 2.0 community</a> discord server</li>
    <li><a href="http://dungeoncrawl.org/" target="_blank">Linley's Dungeon Crawl</a>: the orginal game!</li>
</ul>
<h3><b><center>Unique Visitors since June 2026</center></b></h3>
<p><center><script type="text/javascript" src="https://counter.websiteout.com/js/2/5/-1/1"></script></center></p><br>
<?php require 'views/footer.php'; ?>
