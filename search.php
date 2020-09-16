<!doctype html>
<html dir="ltr" lang="en">
<head>
    <meta charset="utf-8" />
	<title>%s</title>
	<meta name="robots" content="NOINDEX, NOFOLLOW">
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
<?php
/* require the class definition */
require_once(dirname(__FILE__) . '/google-search-appliance/google-search-appliance.php');

/**
 * instantiate object 
 * Setting all options can be performed when the object is created, or set 
 * later using the appropriate methods
 */
$gsa = new google_search_appliance( /* $appliance_options, $search_options */ );

/**
 * appliance options
 * The appliance URL and name are both required, but other options 
 * are only used if you output a search form using the get_search_form()
 * method, or if you implement paging navigation using the get_paging_links()
 * method
 */
$appliance_options = array(
	
	/* REQUIRED parameters */
	// URL for search appliance, including the 'search' keyword
	'appliance_url'  => 'http://search.leeds.ac.uk/search',
	// The appliance name(s) or site/sites configured on the appliance
	'appliance_name' => 'mediapapers',

	/* OPTIONAL parameters - defaults are shown here */
	// the URL of the page where the search is carried out - defaults to current URL
	'search_url'     => '',
	// The name of the query variable used by search form
	'query_var'      => 's',
	// The name of the paging variable used by search form
	'paging_var'     => 'paged',
	// if the page is behind a proxy, enter the proxy URL/port here
	'proxy'          => '',
	// The number of results to return per page
	'per_page'       => 10

);

/* set the appliance options */
$gsa->set_appliance_options( $appliance_options );

/**
 * search options
 * this is a greatly reduced subset of the options presented in the
 * Documentation for the GSA Request format. Defaults are shown here.
 */
$search_options = array(
	'sort'   => 'date:D:L:d1',
	'output' => 'xml_no_dtd',
	'filter' => '0',
	'ie'     => 'UTF-8',
	'oe'     => 'UTF-8'
);

/* set the search options */
$gsa->set_search_options( $search_options );

/* add a callback filter for summaries */
function gsa_summary_filter($text, $context)
{
	return '<span class="' . $context . '">' . preg_replace( array("/b>/", "/i>/", "/<br ?\/?>/"), array("strong>", "em>", " "), $text ) . '</span>';
}
$gsa->add_filter( 'summary', 'gsa_summary_filter');

/* add a callback filter for titles */
class gsa_title_filter
{
	/* this is an example of using a static method of a class as a callback */
	public static function run_filter($text, $context)
	{
		// trims the title to the first » symbol
		if ( false !== strpos( $text, "»" ) ) {
			return substr( $text, 0, strpos( $text, "»" ) );
		}
		// don't forget to return the text!
		return $text;
	}
}
$gsa->add_filter( 'title', array( 'gsa_title_filter', 'run_filter' ) );

/* get results */
$results = $gsa->search();

print('<h2>Search Results</h2>');
/* go through displaying results */
if ( $results['number'] > 0 ) {
	/* display a list of results with navigation underneath */
	printf( '<p>Showing results %d to %s for your query <em>%s</em></p>', $results["start"], $results["end"], $results["query"] );
	printf( '<ol start="%s">', $results["start"] );
	foreach ( $results["docs"] as $r ) {
		printf( '<li><a href="%s">%s</a><br />%s</li>', $r["url"], $r["title"], $r["summary"] );
	}
	print( '</ol>' );
	print( $gsa->get_paging_navigation( $results ) );
} else {
	/* display message for no results */
	printf('<p>Sorry, there were no results for your query <em>%s</em></p>', $gsa->get_search_query() );
}
?>
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