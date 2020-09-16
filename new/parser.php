<?php
/**
 * Phil Taylor website parser
 * takes a bunch of HTML files and adds the university header/footer to them
 */
$head = <<<HEAD
<!doctype html>
<html dir="ltr" lang="en">
<head>
    <meta charset="utf-8" />
	<title>%s</title>
    <meta name="description" content="This is an archive of the website of Phil Taylor.">
    <link rel="Shortcut Icon" type="image/ico" href="http://www.leeds.ac.uk/site/favicon.ico" />
    <!-- site styles -->
    <link rel="stylesheet" href="css/uol.min.css" />
    <link rel="stylesheet" href="css/style.css" />
</head>
<body class="sidebar-corporate sidebars-site">
    <div class="header"> 
        <a id="logo" href="http://www.leeds.ac.uk/" title="University of Leeds Homepage"><img src="img/logo/logo_black.png" class="hidden" alt="University of Leeds" /></a>
        <h2><a href="http://media.leeds.ac.uk/" title="School of Media and Communication">School of Media and Communication</a></h2>
	</div>
    <div class="content">
    	<h1><a href="http://media.leeds.ac.uk/papers/" title="Phil Taylor's papers" rel="home"><span>Phil Taylor's papers</span></a></h1>
		<ul id="menu-header-menus" class="nav-main">
			<li id="menu-item-index" class="menu-item"><a href="http://media.leeds.ac.uk/papers/">Home</a></li>
			<li id="menu-item-propaganda" class="menu-item"><a href="http://media.leeds.ac.uk/papers/propaganda.html">Propaganda</a></li>
			<li id="menu-item-psyops" class="menu-item"><a href="http://media.leeds.ac.uk/papers/psyops.html">PSYOPS</a></li>
			<li id="menu-item-war" class="menu-item"><a href="http://media.leeds.ac.uk/papers/war.html">WAR</a></li>
			<li id="menu-item-communications" class="menu-item"><a href="http://media.leeds.ac.uk/papers/communications.html">Communications</a></li>
			<li id="menu-item-phil_taylor" class="menu-item"><a href="http://media.leeds.ac.uk/papers/phil_taylor.html">Phil Taylor's Publications</a></li>
		</ul>
        <div class="site-sidebar">
            <div class="site-search">
        		<h4>Search site</h4>
        		<form role="search" method="get" action="http://media.leeds.ac.uk/papers/search.php">
					<div>
						<label class="screen-reader-text">Search for:</label>
						<input type="text" value="" name="s" class="searchinput" />
						<input type="submit" class="searchsubmit" value="Go" />
					</div>
				</form>
			</div>
        	<div class="right-menu" id="nav_menu-3">
        		<div class="menu-r-h-menu-container">
	        		<ul id="menu-r-h-menu-1" class="menu">
						<li class="menu-item"><a href="http://media.leeds.ac.uk/papers/vf016ddb.html">Must-reads</a></li>
						<li class="menu-item"><a href="http://media.leeds.ac.uk/papers/vf0162af.html">Useful Publications</a></li>
						<li class="menu-item"><a href="http://media.leeds.ac.uk/papers/links.html">Links</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="content-main">

HEAD;
$foot = <<<FOOT
		</div>
	</div>
    <div class="content-info">
        <ul id="menu-footer-links" class="nav">
			<li id="menu-item-209" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-209"><a href="http://media.leeds.ac.uk/privacy/">Privacy Statement</a></li>
			<li id="menu-item-210" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-210"><a href="http://media.leeds.ac.uk/accessibility/">Accessibility Statement</a></li>
			<li id="menu-item-208" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-208"><a href="http://media.leeds.ac.uk/terms/">Terms and Conditions</a></li>
			<li id="menu-item-211" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-211"><a href="http://www.leeds.ac.uk/freedom-of-information">Freedom of Information</a></li>
		</ul>
        <p>&copy; Copyright Leeds 2014</p>
    </div>

<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-1846923-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
</body>
</html>
FOOT;
$pages = array();
$pages["links"] = <<<LINKS
<h2>Links</h2>
<ol>
<li><a href="vf01c1df.html">Libraries & Archives</a> (1&nbsp;item)</li>
<li><a href="vf01d6ae.html">On-line journals</a> (2&nbsp;items)</li>
<li><a href="vf011378.html">Links to Military Resources</a> (5&nbsp;items)</li>
<li><a href="vf01df69.html">Links to News Organisations</a> (3&nbsp;items)</li>
<li><a href="vf01a520.html">Relevant Blog Sites</a> (9&nbsp;items)</li>
</ol>
LINKS;
$pages["phil_taylor"] = <<<PT
<h2>Phil Taylor's publications</h2>
<ol>
<li><a href="vf01021b.html">Professor Taylor's professional biography and complete list of publications</a> (6&nbsp;items)</li>
<li><a href="vf01d4b8.html">Some Taylor publications and media output</a> (36&nbsp;items)</li>
<li><a href="vf019a5d.html">Powerpoint Lectures & Presentations & Teaching Materials by Prof Taylor</a> (46&nbsp;items)</li>
</ol>
PT;
$pages["propaganda"] = <<<PROPAGANDA
<h2>Propaganda</h2>
<ol>
<li><a href="vf01d900.html">PROPAGANDA - General (theory, practice and history)</a> (104&nbsp;items)</li>
<li><a href="vf013c78.html">Propaganda and Iraq 2003 to date: an introduction and timeline</a> (1&nbsp;item)</li>
<li><a href="vf017395.html">PROPAGANDA AND THE GLOBAL 'WAR' ON TERROR (GWOT) Years 1 and 2, ie  9/11-2003 </a> (204&nbsp;items)</li>
<li><a href="vf01cec0.html">PROPAGANDA AND THE GWOT Year 3 - 2004 (mainly Iraq)</a> (189&nbsp;items)</li>
<li><a href="vf01bbda.html">PROPAGANDA AND THE GWOT Year 4 - 2005</a> (192&nbsp;items)</li>
<li><a href="vf016c6c.html">PROPAGANDA AND THE GWOT Year 5 - 2006</a> (64&nbsp;items)</li>
<li><a href="vf01d411.html">PROPAGANDA AND THE GWOT Year 6 - 2007</a> (46&nbsp;items)</li>
<li><a href="vf017b1e.html">PROPAGANDA AND THE GWOT (NOW 'THE LONG WAR') Year 7 - 2008 </a> (44&nbsp;items)</li>
<li><a href="vf018b4b.html">PROPAGANDA AND THE LONG WAR - Year 8 - 2009</a> (17&nbsp;items)</li>
<li><a href="vf016ccc.html">THE END OF THE WAR ON TERROR?</a> (31&nbsp;items)</li>
<li><a href="vf018c9c.html">PROPAGANDA 'OWN GOALS' IN THE GWOT</a> (86&nbsp;items)</li>
<li><a href="vf01e2f2.html">TALIBAN & AL QAIDA PROPAGANDA (including the 'bin Laden Tapes' & AQ statements) with analysis</a> (82&nbsp;items)</li>
</ol>
PROPAGANDA;
$pages["psyops"] = <<<PSYOPS
<h2>Psychological Operations</h2>
<ol>
<li><a href="vf0199e9.html">PSYOPS IN IRAQ 2003-6</a> (61&nbsp;items)</li>
<li><a href="vf01174c.html">PSYCHOLOGICAL OPERATIONS (PSYOPS) - General.  Rebranded 2010 as MISO</a> (92&nbsp;items)</li>
<li><a href="vf0102e5.html">INFORMATION WARFARE (IW) & INFORMATION OPERATIONS (IO)</a> (141&nbsp;items)</li>
<li><a href="vf01acd8.html">'NATION BUILDING' & CIVIL-MILITARY AFFAIRS (including CIMIC)</a> (69&nbsp;items)</li>
</ol>
PSYOPS;
$pages["war"] = <<<WAR
<h2>War</h2>
<ol>
<li><a href="vf012910.html">WAR & CRISIS REPORTING</a> (223&nbsp;items)</li>
<li><a href="vf017403.html">Military Recruitment Videos</a> (1&nbsp;item)</li>
<li><a href="vf01cd0b.html">War and Representations of War in the Media</a> (14&nbsp;items)</li>
<li><a href="vf01da63.html">War, Film & History</a> (24&nbsp;items)</li>
<li><a href="vf018cde.html">The Gulf War of 1991</a> (34&nbsp;items)</li>
<li><a href="vf0103f0.html">Somalia, 1992-3</a> (8&nbsp;items)</li>
<li><a href="vf01df42.html">The Balkans conflicts of the 1990s</a> (29&nbsp;items)</li>
<li><a href="vf016a24.html">The Kosovo conflict 1999</a> (86&nbsp;items)</li>
<li><a href="vf01845d.html">Forgotten Wars</a> (14&nbsp;items)</li>
</ol>
WAR;
$pages["communications"] = <<<COMMS
<h2>Communications</h2>
<ol>
<li><a href="vf01b196.html">STRATEGIC COMMUNICATIONS c. 2006 onwards</a> (28&nbsp;items)</li>
<li><a href="vf015afe.html">PUBLIC DIPLOMACY (PD) and CULTURAL DIPLOMACY (CD)</a> (309&nbsp;items)</li>
<li><a href="vf01b747.html">MILITARY-MEDIA RELATIONS</a> (194&nbsp;items)</li>
<li><a href="vf01cfda.html">Public Opinion</a> (41&nbsp;items)</li>
<li><a href="vf01767d.html">INTERNATIONAL BROADCASTING (see also Public Diplomacy)</a> (123&nbsp;items)</li>
<li><a href="vf01aaae.html">British/American Foreign Policy and the War on Terrorism</a> (52&nbsp;items)</li>
<li><a href="vf01ad2a.html">The Bush Doctrine - Key Speeches & Analysis</a> (101&nbsp;items)</li>
<li><a href="vf012c50.html">Al Jazeera controversy</a> (34&nbsp;items)</li>
<li><a href="vf01d6d8.html">The Far Side - sick or psycopath(et)ic?</a> (9&nbsp;items)</li>
</ol>
COMMS;
$pages["404"] = <<<FOUR
<h2>Page not found</h2>
<p>Sorry but the page you are looking for cannot be found.</p>
<p>This website was archived in 2014 as a series of nearly 6000 HTML pages from an antiquated software system which is no longer maintained. As a result, all the URLs on this site have changed. Unfortunately, it was not possible to rewrite the old URLs to their new locations due to the complexity of the site.</p>
<p>Please try looking for the page using the site search, or by browsing through the site using the menus. If you continue to have difficulty locating the page, please contact <a href="mailto:mediatechs@leeds.ac.uk">mediatechs@leeds.ac.uk</a></p>
FOUR;
$pages["index"] = <<<INDEX
<img src="pmt/picture.jpg" style="float:right;margin:1em 0 1em 1em" alt="Phil Taylor" />
<p>Professor Phil Taylor, Professor of International Communications, one of the field's outstanding scholars and a founding member of the Institute, died in December 2010.</p>
<p>Phil graduated from Leeds with a First in History in 1975 followed, in 1978, by a PhD.  In the same year, he was appointed as Lecturer in the School of History and was subsequently promoted to Senior Lecturer in 1987. Phil was seconded as Deputy Director to the Institute of Communications Studies in 1990, this position becoming permanent in 1993, along with his promotion to Reader. In 1998 he was appointed to a Chair of International Communications and was Head of the Institute until 2002.</p>
<p>Phil was an internationally renowned scholar of international communications and propaganda, a charismatic and popular teacher, and an excellent colleague.</p>
<p>From 1995, Phil maintained a website to serve as a key resource for matters relating to:</p>
<ul>
<li><a href="communications.html">International and Strategic Communications</a></li>
<li><a href="propaganda.html">Propaganda and the global 'war' on terror</a></li>
<li><a href="vf01b747.html">Military-Media Relations</a></li>
<li><a href="vf015afe.html">Public Diplomacy</a></li>
<li><a href="psyops.html">Psychological Operations, Information Warfare &amp; Information Operations</a></li>
<li><a href="war.html">War Reporting</a></li>
</ul>
<p>In 2014, the School of Media and Communication archived the contents of that site here.</p>
INDEX;
$html_dir = dirname(__FILE__) . '/oldhtml';
$new_dir = dirname(dirname(__FILE__)) . '/';
foreach ( glob( $html_dir . '/*.html' ) as $filename ) {
	$content = file_get_contents( $filename );
	if ( preg_match('/.*<table[^>]*cellspacing=10 cellpadding=10[^>]*>(.*)<\/table.*<\/table.*/is', $content, $matches ) ) {
		$page_content = clean_content($matches[1]);
		if ( preg_match('/.*<title[^>]*>(.*)<\/title.*/is', $content, $title_matches ) ) {
			$head_txt = sprintf($head, $title_matches[1]);
		} else {
			$head_txt = sprintf($head, "School of Media and Communication");
		}
		$page_content = $head_txt . $page_content . $foot;
		file_put_contents( $new_dir . basename($filename), $page_content);
	} else {
		print(basename($filename));
	}
}
function clean_content($text)
{
	// strip tags and re-wrap in table
	$page_content = '<table class="container">' . strip_tags($text, '<p><a><b><i><strong><em><table><td><tr><img><br>') . '</table>';
	// rename links to main index
	$page_content = str_replace('index8f06', 'index', $page_content);
	// re-write table cell alignment with class/style
	$page_content = str_replace(' align="right"', ' class="aside"', $page_content);
	$page_content = preg_replace( '/ (h|v)align="([^"]*)"/', '', $page_content);
	// remove query strings from links
	$page_content = preg_replace( '/href="([^\.]+\.html)[^"]*"/i', 'href="$1"', $page_content );
	$page_content = preg_replace( "/href='([^\.]+\.html)[^']*'/i", 'href="$1"', $page_content );
	return $page_content;
}
foreach ($pages as $page => $content) {
	$page_content = sprintf($head, "Phil Taylor's Papers &raquo; " . ucfirst($page));
	$page_content = str_replace('menu-item-' . $page . '" class="', 'menu-item-' . $page . '" class="current-menu-item ', $page_content);
	$page_content .= $content;
	$page_content .= $foot;
	file_put_contents( $new_dir . $page . ".html", $page_content);
}
$search_page = file_get_contents(dirname(__FILE__) . '/search.php');
file_put_contents( $new_dir . 'search.php', sprintf($head, "Search Results") . $search_page . $foot);