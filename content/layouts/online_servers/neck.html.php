<div class="page information">
        <?php echo $this->part('neck_dropdown_menus'); ?>

    	<div class="toplinks"><br></div>
    	<div class="page_content">
        	<div class="heading">
            		<h1><center><a href="/forks/DCChili"><img src="/img/title_banner/coming_soon-DCChile.gif"  height="256" title="click to view the details about the DCChili fork"></a>
								<a href="/forks/stoat_soup"><img src="/img/title_banner/banner-left-stoatsoup.jpg"  height="256" title="click to view the details about the Stoat Soup fork"></a>
								<a href="/"><img src="/img/title_banner/DCF-logo-homepage.gif" width="256" height="256" title="Image created by our own Red Eye."></a>
								<a href="/forks/bcadren"><img src="/img/title_banner/banner-right-bcadren.jpg"  height="256" title="click to view the details about the BCadren fork"></a>
								<a href="/forks/stone_soup"><img src="/img/title_banner/banner-right-dcss.jpg" height="256" title="click to view the details about the Stone Soup (aka DCSS) fork"></a>
								<a href="/forks/DCChili"><img src="/img/title_banner/coming_soon-DCChile.gif"  height="256" title="click to view the details about the DCChili fork"></a>
							</center></h1>
			<div class="fineprint"><center>Come chat with us in our <a href="https://discord.gg/gMnE5JFcB7" target="_blank">Dungeon Crawl community discord server<img src="/img/discord_transparent_border.png" width="18" height="18" ></a></center></div>
        	</div>
		<div class="fineprint" align="right">
			<?php if ($this->request->session('admin')) : ?>
        			  Subs <a href="/admin/submissions/list">Official</a> <a href="/admin/submissions/moderate">Moderate</a> <a href="/admin/submissions/add">New</a>
	        		| Players <a href="/admin/players/list">List</a> <a href="/admin/players/add">New</a>
    				| Challenges <a href="/admin/challenges/list">List</a> <a href="/admin/challenges/add">New</a>
	        		| <a href="/admin/logout">Logout</a>
			<?php else : ?>
<!--          			<a href="/backoffice">Admin</a> 
	--> <br>
			<?php endif; ?>
		</div>
        	<img src="/img/HR-right.png"><br />
        	<div class="content" onclick="window.location = '/dismiss';">
        		<?php if ($msg = $this->request->session()->get('message')) : ?>
            			<div class="message"><?=$msg?> <br /><br /><a href="/dismiss">--more--</a></div>
        		<?php endif; ?>
        	</div>
