<?php
	$dir_path = "img/titles";
	$files = scandir($dir_path);
	$count = count($files);
	$index = rand(2, ($count-1));
	$filename = $files[$index];

	echo "<h2><center><img src='/img/portals/exit_dungeon.png'>" . _(" Welcome to DungeonCrawlForks.org! ") . "<img src='/img/portals/exit_dungeon.png'></center></h2>";
	echo '<a href="/forks/chili"><img src="/img/forks/dcchili/DungeonCrawlChiliOrg-YourLogoHere.gif"  width="256" style="float:right" title="Want your logo here? Contant RoGGa!"></a>';

	echo '<h4>' . _("Dungeon Crawl (DC) is the game with many forks to choose from,") . "</h4>";
	echo _("and this is the <b>NEW</b> website with all the details about DC forks currently being developed where you can:");
 	echo '<ul><li><a href="online_servers">' . _("Play online") . "</a>" . _(" for free on a DC server located in various countries around the world.") . "</li>";
	echo     '<li><a href="download_forks">' . _("Download") . "</a>" . _(" an offline version for free of one of the DC forks.") . "</li>";
	echo     '<li><a href="forks_details">' . _("View a fork's details") . "</a>.</li>";
	echo     "<li>" . _("Join our ") . '<a href="https://discord.gg/gMnE5JFcB7" target="_blank">' . _("Dungeon Crawl community") . "</a>". _(" discord server; the only place to discuss all DC forks!") . "</li>";
	echo     "<li>" . _("Read or Post to subReddit: ") . '<a href="https://www.reddit.com/r/dungeoncrawl/" target="_blank">' . _("r/dungeoncrawl") . "</a></li></ul>";

	echo "<h2>" . _("The latest NEWS") . "</h2>";
	echo '<img src="'.$dir_path."/".$filename.'" alt="'.$filename.'"  width="350"  style="float:right">';

	echo "<ul><li>" . _("A new fork was just launched named: ") . "<a href='/forks/chili'>Dungeon Crawl Chili</a></li>";
	echo     "<li>" . _("The CNC 2nd Anniversary Tournament will be held for two weeks starting at 00:00 on the 18th (KST): ") . "<a href='https://refracta.github.io/nemelex.cards/cnc-2nd-anniversary-tournament/details.html' target='_blank'>Website's Details</a></li>";
	echo     "<li>" . _("Before the end of July, the following will likely be happening:") . "</li>";
	echo     "<ol><li>" . _("In order to reduce costs, the webtiles server CCO (cco.crawlcosplay.org) will be moved to a European server.") . "</li>";
	echo     	 "<li>" . _("A new Webtiles server will be setup in Ontario, Canada to be called: DCF (dcf.dungeoncrawlforks.org).") . "</li></ol>";
	echo 	 "<li>" . _("The ") . '<a href="https://www.crawlcosplay.org/ccft" target="_blank">' . _("Crawl Cosplay Forks Tournament") . '</a> (CCFT#2) ' . _("will likely start in August.") . "</li></ul>";
	
	echo "<h2>" . _("Want to chat?") . "</h2>";
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
<p><center><script type="text/javascript" src="https://counter.websiteout.com/js/2/5/-1/1"></script></center></p>
<br>
