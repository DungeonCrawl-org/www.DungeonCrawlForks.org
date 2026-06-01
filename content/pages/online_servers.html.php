<style>

#dlTable {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#dlTable td, #dlTable th {
  border: 1px solid #ddd;
  padding: 8px;
}

#dlTable tr:nth-child(even){background-color: Dark Gray}

#dltable tr:hover {background-color: #ddd;}

#dlTable th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: drak gray;
  color: white;
}


div.score-sidebar-cca {
    float: right;
    clear: both;
    text-align: right;
    width: 575px;
    padding: 0 2em 5em;
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
  color: white;
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
  box-shadow: 0px 8px 12px 0px rgba(0,0,0,0.2);
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

</style>

<h2 style="color:orange"><center>Online Dungeon Crawl WebTiles servers</center></h2>

<h3>Click the botton to determine the closest Dungeon Crawl server from your location:</h3>
<center><button class="btn btn-success" onclick=" window.open('https://www.DungeonCrawlCentral.org/closest_server.html','_blank')"> <b>Find closest Dungeon Crawl WebTiles server</b> </button></center>

<h3>Or select a server manually depending on its forks installed:</h3>
<table>
<tr><td><details open style="display:inline-block;">
        <summary style="cursor:pointer; -webkit-user-select:none; -moz-user-select:none; -ms-user-select:none; user-select:none;">
                <a href="http://cco.crawlcosplay.org" target="_blank"><b>CCO*</b></a>:     Toronto, Canada - <a href="http://cco.crawlcosplay.org" target="_blank">WebTiles</a> & Console (coming soon)</summary>
            <ul><li>bcrawl</li>
                <li>bcadren</li>
                <li>stoatsoup</li>
                <li>Stone Soup v0.11 to v0.34 and unstable Trunk</li>
            </ul>
</details></td>

<td><details open style="display:inline-block;">
        <summary style="cursor:pointer; -webkit-user-select:none; -moz-user-select:none; -ms-user-select:none; user-select:none;">
                <a href="https://crawl.nemelex.cards" target="_blank"><b>CNC</b></a>:     Gyeonggi, Korea - <a href="https://crawl.nemelex.cards" target="_blank">WebTiles</a> & Console</summary>
            <ul><li>bcrawl</li>
                <li>bcadren</li>
                <li>stoatsoup</li>
                <li>Stone Soup v0.30 to v0.34 and unstable Trunk</li>
            </ul>
</details></td>

</tr>

<tr><td><details open style="display:inline-block;">
        <summary style="cursor:pointer; -webkit-user-select:none; -moz-user-select:none; -ms-user-select:none; user-select:none;">
                <a href="https://crawl.akrasiac.org:8443" target="_blank"><b>CAO</b></a>: Arizona, USA - <a href="https://crawl.akrasiac.org:8443" target="_blank">Webtiles</a> & Console</summary>
            <ul><li>Stone Soup v0.11 to v0.34 and unstable Trunk</li></ul>
</details></td>

<td><details open style="display:inline-block;">
        <summary style="cursor:pointer; -webkit-user-select:none; -moz-user-select:none; -ms-user-select:none; user-select:none;">
                 <a href="https://cbro.berotato.org" target="_blank"><b>CBRO</b></a>:      Ohio, USA - <a href="https://cbro.berotato.org" target="_blank">WebTiles</a> & Console</summary>
            <ul><li>Stone Soup v0.24 to v0.34 and unstable Trunk</li></ul>
</details></td>
</tr>

<tr><td><details open style="display:inline-block;">
        <summary style="cursor:pointer; -webkit-user-select:none; -moz-user-select:none; -ms-user-select:none; user-select:none;">
                <a href="https://crawl.dcss.io" target="_blank"><b>CDI</b></a>:           New York, USA - <a href="https://crawl.dcss.io" target="_blank">WebTiles</a> & Console</summary>
            <ul><li>Stone Soup v0.30 to v0.34 and unstable Trunk</li></ul>
</details></td>

<td><details open style="display:inline-block;">
        <summary style="cursor:pointer; -webkit-user-select:none; -moz-user-select:none; -ms-user-select:none; user-select:none;">
                <a href="https://crawl.develz.org" target="_blank"><b>CDO</b></a>:        Nuremberg, Germany - Console ONLY</summary>
            <ul><li>Stone Soup v0.2x to v0.34 and unstable Trunk</li></ul>
</details></td>
</tr>

<tr><td><details open style="display:inline-block;">
        <summary style="cursor:pointer; -webkit-user-select:none; -moz-user-select:none; -ms-user-select:none; user-select:none;">
                <a href="https://crawl.xtahua.com" target="_blank"><b>CXC</b></a>:        Paris, France - <a href="https://crawl.xtahua.com" target="_blank">WebTiles</a> & Console</summary>
            <ul><li>bcrawl</li>
                <li>bcadren</li>
                <li>stoatsoup</li>
                <li>Stone Soup v0.25 to v0.34 and unstable Trunk</li></ul>
</details></td>

<td><details open style="display:inline-block;">
        <summary style="cursor:pointer; -webkit-user-select:none; -moz-user-select:none; -ms-user-select:none; user-select:none;">
                <a href="https://underhound.eu:8080" target="_blank"><b>CUE</b></a>:      Falkenstein, Germany - <a href="https://underhound.eu:8080" target="_blank">Webtiles</a> & Console</summary>
            <ul><li>bcrawl</li>
                <li>Stone Soup v0.10 to v0.34 and unstable Trunk</li>
            </ul>
</details></td>
</tr>

<tr>
<td><details open style="display:inline-block;">
        <summary style="cursor:pointer; -webkit-user-select:none; -moz-user-select:none; -ms-user-select:none; user-select:none;">
                <a href="http://lazy-life.ddo.jp:8080/#lobby" target="_blank"><b>LLD</b></a>:   Tokyo, Japan - <a href="http://lazy-life.ddo.jp:8080/#lobby" target="_blank">WebTiles ONLY</a></summary>
            <ul><li>Stone Soup v0.34 only</li></ul>
</details></td>

<td><details open style="display:inline-block;">
        <summary style="cursor:pointer; -webkit-user-select:none; -moz-user-select:none; -ms-user-select:none; user-select:none;">
                <a href="https://crawl.project357.org" target="_blank"><b>CPO</b></a>:    Sydney, Australia - <a href="https://crawl.project357.org" target="_blank">WebTiles ONLY</a></summary>
            <ul><li>stoatsoup</li>
                <li>Stone Soup v0.25 to v0.34 and unstable Trunk</li>
            </ul>
</details></td>
</tr>

<tr>
<td><details open style="display:inline-block;">
        <summary style="cursor:pointer; -webkit-user-select:none; -moz-user-select:none; -ms-user-select:none; user-select:none;">
                <a href="https://crawl.roguelikes.gg/#lobby" target="_blank"><b>CRG</b></a>:   Oregon, USA - <a href="https://crawl.roguelikes.gg/#lobby" target="_blank">WebTiles</a> & Console</summary>
            <ul><li>Stone Soup v0.30 to v0.34 and unstable Trunk</li></ul>
</details></td>

<td><details open style="display:inline-block;">
        <summary style="cursor:pointer; -webkit-user-select:none; -moz-user-select:none; -ms-user-select:none; user-select:none;">
                <a href="https://crawl-br.roguelikes.gg/#lobby" target="_blank"><b>CBRG</b></a>:    Brazil - <a href="https://crawl-br.roguelikes.gg/#lobby" target="_blank">WebTiles</a> & Console</summary></summary>
            <ul><li>Stone Soup v0.30 to v0.34 and unstable Trunk</li>
            </ul>
</details></td>
</tr>
</table>
<p>*CCO isn't tracked by the DCSS bots or stats pages.</p>
		<br />
