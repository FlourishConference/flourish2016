<?php
// decode JSON
$str = file_get_contents('./test.json');
$json = json_decode($str, true);
?>
<!doctype html>
<html class="no-js" lang="en">
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>Speakers | Flourish! 2016</title>
<link rel="stylesheet" href="bower_components/foundation-sites/dist/foundation.min.css">
<link href="bower_components/normalize-css/normalize.css" rel='stylesheet' type='text/css' />
<link href="css/main.css" rel='stylesheet' type='text/css' />
</head>
<body>
 
<div class="title-bar" data-responsive-toggle="nav-bar" data-hide-for="medium">
        <button class="menu-icon" type="button" data-toggle></button>
        <div class="title-bar-title">Menu</div>
      </div>
      
      <div class="top-bar" id="nav-bar">
        <div class="top-bar-left">
          <ul class="dropdown vertical medium-horizontal menu" data-dropdown-menu>
            <li class="menu-text"><a href="./"><img src="images/f16-logo-wtagline-white.png" alt="Flourish! 2016" width="124px"></a></li>
            <li><a href="./">Home</a></li>
            <li><a href="about.html">About Flourish!</a></li>
            <li><a href="speakers.php">Speakers</a></li>
            <li><a href="sponsor.html">Sponsorship</a></li>
            <li><a href="miniexpo.html">Mini-Expo</a></li>
            <li><a href="contact.html">Contact Us</a></li>
          </ul>
		</div>
		<div class="top-bar-right">
          <ul class="menu">
            <li><a href="//flourish2016.eventbrite.com" class="button">Register for Flourish! 2016</a></li>
          </ul>
        </div>

</div>
 
<div class="callout large lightbg">
<div class="row column text-center">
<h2 class="subheader">Featured Speakers</h2>
</div>
</div>
 
<div class="row medium-12 large-12 columns">



<?php
if(!isset($_GET['id'])) {
echo "<div class=\"speakers\">";
/*******************************************/
/*                                         */
/*    Speakers informaiton and such        */
/*                                         */
/*                                         */
/*******************************************/
//             ..:::::::..
//            //////\\\\\\\
//            |||||||||||||
//            |||||||||||||
//            |||||||||||||
//        HH  |||||||||||||   HH
//        HH==================HH
//        HH==================HH
//        HH  #############   HH
//        HH  #############   HH
//        HH   ###########    HH
//        HH    #########     HH
//        HH     #######      HH
//        HH      #####       HH
//        HH        ()        HH
//        \\         ()       //
//          \\       ()     //
//            \\      ()  //
//              \\     (//
//                \\  //)(
//              ____\/___()
//          ,#################....
//         #####################  ```
//        ~~~~~~~~~~~~~~~~~~~~~~~
$speakersHead = "<div id = \"speakers\">
<!-- Significant references from http://clearleft.com/thinks/270  -->
<!-- Credit to Charlotte Jackson -->
<!-- 15TH APRIL 2015 -->
    <ul class=\"list\">";
$speakersTail = "    </ul>
<!-- End significant references from http://clearleft.com/thinks/270 -Charlotte Jackson -->
</div>";

echo $speakersHead . "\n";
$id = 0;
foreach($json['speakers'] as $mydata){
    $id++;
	echo "        <li class=\"list-item\">\n";
	echo "          <a href=\"?id=$id\">\n";
	echo "            <div class=\"list-content\">\n";
    echo "                <h2>". $mydata['name'] . "</h2>\n";
    echo "                <img src=\"images/speakers/thumbnails/". $mydata['image'] ."\" alt=\"". $mydata['name'] ."\" />\n";
    
   /* foreach($mydata['descriptions'][0] as $values){//write code so just one para is added.
       echo "                <p>". $values ."</p>\n";
	}*/
    
	echo "            </div>\n";
	echo "          </a>\n";
    echo "        </li>\n";
} 
echo $speakersTail . "\n";
echo "</div><!-- speakers class -->";
} // if
else {
$id = intval($_GET['id'])-1;
$person = $json['speakers'][$id];
echo "
<div class=\"row medium-12 large-12 columns\">
    <div class=\"blog-post\">";
echo "        <h2>" . $person['name'] . "</h2>
        <hr>
        <div class=\"row\">
        <div class=\"large-3 columns\">
            <img src=\"images/speakers/" . $person['image'] . "\" alt=\"" . $person['name'] . "\" />
        </div><!-- columns 3-->
        <div class=\"large-9 columns\">
            <h3>Biography</h3>
            <hr>";
    foreach($person['descriptions'][0] as $values){//write code so just one para is added.
       echo "                <p>". $values ."</p>\n";
	}

            
echo"        </div><!-- columns 9-->
        </div><!-- row -->
		<hr>
        <p><a href=\"speakers.php\"> &laquo; Back to Speaker List</a></p>
    </div><!-- blog-post -->
</div><!-- row -->
";

}
?>

</div><!-- row medium large columns-->
<footer>
	<div class="row expanded callout secondary">
		<div class="large-4 columns">
			<h5>Disclaimer</h5>
			<div class="row">
				<div class="callout">
				<p class="">The statements, opinions, and ideas conveyed in this program do not necessarily express the position of the University of Illinois at Chicago.</p>
				<p>If you have a disability and need an accommodation in order to participate in this event, please call (312) 413-5070 at least one week prior to the event.</p>
				</div>
			</div>
		</div>
		<div class="large-4 columns">
			<h5>Chatter: Spread the word of Flourish!</h5>
			<span class="secondary label"><a href="//facebook.com/flourishconf">Facebook</a></span>
			<span class="secondary label"><a href="//plus.google.com/+Flourishconf/posts">Google+</a></span>
			<span class="secondary label"><a href="//twitter.com/flourishconf">Twitter</a></span>
			<span class="secondary label"><a href="//flickr.com/flourishconf">Flickr</a></span>
			<span class="secondary label"><a href="//youtube.com/flourishconf">YouTube</a></span>
		</div>
		<div class="large-4 columns">
			<h5>What is this?!</h5>
			<p>01000100 01101001 01100100 00100000 01111001 01101111 01110101 00100000 01100110 01101001 01101110 01100100 00100000 01110100 01101000 01100101 00100000 01100101 01100001 01110011 01110100 01100101 01110010 00100000 01100101 01100111 01100111 00111111</p>
		</div>
	</div>
	<div class="row expanded">
		<div class="medium-6 columns">
			<ul class="menu">
				<li>Interested in helping out? Contact us here: <a href="mailto:volunteer@flourishconf.com">volunteer@flourishconf.com</a></li>
			</ul>
		</div>
		<div class="medium-6 columns">
			<ul class="menu align-right">
				<li class="menu-text">Open Source, Open Future.</li>
			</ul>
		</div>
	</div>
</footer>



<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="bower_components/foundation-sites/dist/foundation.min.js"></script>
<script>
      $(document).foundation();
    </script>
</body>
</html>

