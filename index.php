<!DOCTYPE HTML>
<?php
// decode JSON
$str = file_get_contents('./test.json');
$json = json_decode($str, true);
?>
<html class="mainbg">
	<head>
		<title>Flourish! 2016</title>
		<link href="bower_components/normalize-css/normalize.css" rel='stylesheet' type='text/css' />
		<link href="bower_components/foundation/css/foundation.min.css" rel='stylesheet' type='text/css' />
		<link href="css/main.css" rel='stylesheet' type='text/css' />
	</head>
	<body>
		<div class="masthead">
			<div class="inner">
			<img src="./images/tree-white.png" />
			<h1 class="front-head">Flourish! 2016</h1>
			<hr class="horiz" />
			<h2 class="tagline">April 1-2, 2016</h2>
			<div class="nav">
				<ul class="lg-btn">
					<li><a href="about.html">About Flourish!</a></li>
					<li><a href="sponsor.html">Sponsorship</a></li>
					<li><a href="miniexpo">Mini-Expo</a></li>
					<li><a href="contact.html">Contact Us</a></li>
				</ul>
			</div><!-- nav -->
			<br />
			<hr class="horiz"/>
			<div class="nav">
				<ul class="lg-btn">
					<li><a href="http://flourish2016.eventbrite.com">Registration Now Open!</a></li>
				</ul>
			</div>
			<p>More information coming soon!</p>
			</div><!-- inner -->
		</div><!-- masthead -->
        <div class="sponsors">
<?php

/*******************************************/
/*                                         */
/*          Sponsors* informaiton          */
/*                                         */
/*                                         */
/*******************************************/
//,--------------------------------------------------------------------------.
//| OV"|OOOOOOOO> U N I T E D  S T A T E S   OF  A M E R I C A <OOOOOOOV"|OO |
//| OO |OOOOOOOOOOOOmmmmOOOOOOmmmmmmmmmmmmmmmmmmOOOOOOOmmmmOOOOOOOOOOOOO |OO |
//| OO_|OO@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@OO_|OO |
//| OOOOO@6@@@@@@@@@@@@@@@@@@@@@'"           "`@@@@@@@@@@F@81497973A@@OOOOOO |
//| OO@@@@@@@@@@@@@@@@@@@@@@@@`  ,,:@@@@@@*.    `@@@@@@@@@@@@@@@@@@@@@@@@@OO |
//| OOO@@@@@' _`@@@@@@@@@@@@@`  W@@@@@@@@@@@;    `@@@@@@@@@@@@@@@@6@@@@@@OOO |
//| OOO@@@@' |_ `@@@@@@@@@@@'  (@@@@@;--;;--@'    `@@@@@@@@@@@@@@@@@@@@@@OOO |
//| OOO@@@@. |  .@@@@@@@@@@@   (@@@@  @  \@ ;@     @@@@@@@@@@@@@@@@@@@@@@OOO |
//| OOO@@@@@,  ,@@@@@@@@@@@@   (@@@@     _\ }@     @@@@@@@@'==`@@@@@@@@@@OOO |
//| OOO@@@@@@@@@@@@@@@@@@@@@.    \_@;;; __ ;;     .@@@@@@@@./\,@@@@@@@@@@OOO |
//| OO@@@@@F@81497973A@@@@@@@.   ,;;\_ .__/;,    .@@@@@@@@@@@@@@@@@@@@@@@@OO |
//| OOOOOO@@@@@@@@@@@@@@@@@@@@@. ,;;;\  , /;;;; .@@@@@@@@@@@@@@@@@@@@@OOOOOO |
//| OV"|OO@@@6@@@@@@@@@@@@@@@@@@@. Washington .@@@@@@@@@@@@@@@@@@@6@@@OV"IOO |
//| OO |OOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOO IOO |
//| OO_|OOOOOOOOOOOOOO>   O  N  E     D  O  L  L  A  R   <OOOOOOOOOOOOOO_IOO |
//`--------------------------------------------------------------------------'
//                                                    -Phoenix-
$sponsorsHead = "<div id = \"sponsors\">
<h1>Sponsors: </h1>
<!-- Significant references from http://clearleft.com/thinks/270  -->
<!-- Credit to Charlotte Jackson -->
<!-- 15TH APRIL 2015 -->
    <ul class=\"list\">";
    
$sponsorsTail = "    </ul>
<!-- End significant references from http://clearleft.com/thinks/270 -Charlotte Jackson -->
</div>";
    
echo $sponsorsHead . "\n";
foreach($json['sponsors'] as $mydata){
    
    echo "        <li class=\"list-item\">\n";
    echo "            <div class=\"list-content-". $mydata['level'] ."\">\n";
    echo "                <h2>". $mydata['name'] . "</h2>\n";
    echo "                <img src=\"images/". $mydata['image'] ."\" alt=\"". $mydata['name'] ."\" />\n";
    
    foreach($mydata['descriptions'][0] as $values){//write code so just one para is added.
       echo "                <p>". $values ."</p>\n";
    }
    
    echo "                <a href=\"#\">none</a>\n";
    echo "            </div>\n";
    echo "        </li>\n";
} 
echo $sponsorsTail;
?>
        </div><!-- sponsors -->
		<div class="faq">
<?php
/*******************************************/
/*                                         */
/*                  FAQ                    */
/*                                         */
/*                                         */
/*******************************************/
//            D. Hopwood
//            ________
//        _jgN########Ngg_
//      _N##N@@""  ""9NN##Np_
//     d###P            N####p
//     "^^"              T####
//                       d###P
//                    _g###@F
//                 _gN##@P
//               gN###F"
//              d###F
//             0###F
//             0###F
//             0###F
//             "NN@'
//
//              ___
//             q###r
//              ""

$FaqHead = "<div id = \"FAQ\">
<h1>Frequently Asked Questions </h1>
<!-- Significant references from http://clearleft.com/thinks/270  -->
<!-- Credit to Charlotte Jackson -->
<!-- 15TH APRIL 2015 -->";
    
$FaqTail = "<!-- End significant references from http://clearleft.com/thinks/270 -Charlotte Jackson -->
</div>";
    
echo $FaqHead . "\n";
foreach($json['faq'] as $mydata){
    
    echo "<h2>" . $mydata['type'] . "</h2>";
    echo "<h3>" . $mydata['comment'] . "</h3>";
    echo "<h5>" . $mydata['subcomment'] . "</h5>";
  
    echo "<ul class=\"list\">";
    foreach($mydata['general'] as $values){
        echo "        <li class=\"list-item\">\n";
        echo "            <div class=\"list-content-grey\">\n";
        echo "                <h3>".$values['Qusetion']."</h3>\n";
        echo "                <p>".$values['Answer']."</p>\n";
        echo "            </div>\n";
        echo "        </li>\n";
    }
    echo "    </ul>";

} 
echo $FaqTail;

?>
		</div><!-- faq -->
	</body>
</html>

