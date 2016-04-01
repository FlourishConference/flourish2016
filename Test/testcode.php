

<?php

// decode JSON
$str = file_get_contents('./test.json');
$json = json_decode($str, true);

//echo $str;

$stylesheet = "<link rel=\"stylesheet\" type=\"text/css\" href=\"styles.css\">";
//$htmlBegin ="<!--doctype-html-->";


//$htmlHaed

echo $stylesheet . "\n";



/*******************************************/
/*                                         */
/*        Header and random junk           */
/*                                         */
/*                                         */
/*******************************************/
//                              __//_\\__
//        ___________        _-~  ~   ~  ~-_
//    ,-~~           ~~-,  ,/               \,
//    `-__ ,-  ,-  ,-__-'  `-__           __-'
//    |   ~~~~~~~~~~~   |  |   ~~~~~~~~~~~   |
//    | ,-   _    _  ,- |  | ,-   _    _  ,- |
//    | |   |    |   |  |  | |   |    |   |  |
//    | |   |    |   |  |  | |   |    |   |  |
//    | |   |    |   |  |  | |   |    |   |  |
//    | |   |    |   |  |  | |   |    |   |  |
//    | |   |    |   |  |  | |   |    |   |  |
//    | |   |    |   |  |  | |   |    |   |  |
//    | |   |    |   |  |  | |   |    |   |  |
//    | |   |    |   |  |  | |   |    |   |  | -rmcn
//    | |   |    |   |  |  | |   |    |   |  | -Ross McNab-
//    | |   |    |   |  |  | |   |    |   |  |
//    | `-  `_   `_  `- |  | `-  `_   `_  `- |
//    `-__           __-'  `-__           __-'
//        ~~~~~~~~~~~          ~~~~~~~~~~~


$headHead="<!DOCTYPE HTML>
<html>
    <head>
        <title>Flourish! 2016</title>
        <link href=\"bower_components/normalize-css/normalize.css\" rel='stylesheet' type='text/css' />
        <link href=\"css/main.css\" rel='stylesheet' type='text/css' />
    </head>
    <body>
        <div class=\"masthead\">
            <div class=\"inner\">
            <img src=\"./images/tree-white.png\" />
            <h1>Flourish! 2016</h1>
            <h2 class=\"tagline\">April 1-2, 2016</h2>
            <div class=\"nav\">
                <ul class=\"lg-btn\">
                    <li><a href=\"#\">About Flourish!</a></li>
                    <li><a href=\"#\">Sponsorship</a></li>
                    <li><a href=\"#\">Mini-Expo</a></li>
                    <li><a href=\"contact.html\">Contact Us</a></li>
                </ul>
            </div>
            </div><!-- inner -->
        </div><!-- masthead -->";
$tailTail ="    </body>
</html>";

echo "<div id=\"addition\">\n";









/*******************************************/
/*                                         */
/*                Links                    */
/*                                         */
/*                                         */
/*******************************************/
// __|HM\
///HH\.M|
//HMHH\.|
//\HMHH\|
//\\HMHH\
//HH\HMHH\
//HHH\HMHH\
//    \HMHH\-HHH\
//     \HMHH\.HHM\
//      \HMHH\.HMH\
//      |\HMHH\\HMH\
//      |H\HHH| \HMH\
//      |MH\H/   \HMH\
//      |MH\      \HMH\
//      \HMH\      \HMH\
//       \HMH\    __|HM|
//        \HMH\  /HH\.M|
//         \HMH\ |MHH\.|
//          \HMH\\HMHH\|
//           \HMH\\HMHH\
//            \HMHH\HMHH\
//             \HHHH\HMHH\
//                   \HMHH\-HHH\
//                    \HMHH\.HHM\
//                     \HMHH\.HMH\
//                     |\HMHH|\HMH
//                     |H\HMH/ \HM
//                     |MH\H/   \H
//                     |MH\      \
//                     \HMH\
// VK                   \HMH\
//                       \HMH\

//echo $headHead;


























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
<h1>Featured Speakers</h1>
<!-- Significant references from http://clearleft.com/thinks/270  -->
<!-- Credit to Charlotte Jackson -->
<!-- 15TH APRIL 2015 -->
    <ul class=\"list\">";
$speakersTail = "    </ul>
<!-- End significant references from http://clearleft.com/thinks/270 -Charlotte Jackson -->
</div>";

echo $speakersHead . "\n";
foreach($json['speakers'] as $mydata){
    
    echo "        <li class=\"list-item\">\n";
    echo "            <div class=\"list-content\">\n";
    echo "                <h2>". $mydata['name'] . "</h2>\n";
    echo "                <img src=\"images/". $mydata['image'] ."\" alt=\"". $mydata['name'] ."\" />\n";
    
    foreach($mydata['descriptions'][0] as $values){//write code so just one para is added.
       echo "                <p>". $values ."</p>\n";
    }
    
    echo "                <a href=\"#\">none</a>\n";
    echo "            </div>\n";
    echo "        </li>\n";
} 
echo $speakersTail . "\n";

/*******************************************/
/*                                         */
/*           Conference Schedule           */
/*                                         */
/*                                         */
/*******************************************/
//              _.'_____`._
//            .'.-'  12 `-.`.
//           /,' 11      1 `.\
//          // 10      /   2 \\
//         ;;         /       ::
//         || 9  ----O      3 ||
//         ::                 ;;
//          \\ 8           4 //
//           \`. 7       5 ,'/
//            '.`-.__6__.-'.'
//             ((-._____.-))
//             _))       ((_
//            '--'SSt    '--'

$speakersHead = "<div id = \"schedule\">
<h1>Conference Schedule</h1>
<!-- Significant references from http://clearleft.com/thinks/270  -->
<!-- Credit to Charlotte Jackson -->
<!-- 15TH APRIL 2015 -->
    <ul class=\"list\">";
$speakersTail = "    </ul>
<!-- End significant references from http://clearleft.com/thinks/270 -Charlotte Jackson -->
</div>";

echo $speakersHead . "\n";

foreach($json['schedule'] as $mydata){
    
    echo "        <li class=\"list-item\">\n";
    echo "            <div class=\"list-content\">\n";
    echo " <h2 class='day-header'> " . $mydata['day'] . "</h2>";
    $i = 0;
    $j = 0;
    foreach($mydata['slot'] as $values){
        $i++;
    }
        
    foreach($mydata['slot'] as $values){
        if ($j!=$i-1){
            echo "                <p class='scheduleRegular'>";
        }
        else {
            echo "                <p class='scheduleLast'>";
        }
        
        echo "                    <span class=\"scheduleTime\">". $values['time'] ."</span>"
            ."                    <span class=\"scheduleName\">". $values['name'] ."</span>"
            ."                    <span class=\"scheduleWhere\">". $values['where'] ."</span>"
                           ."</p>\n";
        $j++;
    }
    echo "            </div>\n";
    echo "        </li>\n";
} 
echo $speakersTail . "\n";

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




    
/*******************************************/
/*                                         */
/*             Legal and other             */
/*                   End                   */
/*                                         */
/*******************************************/
//                   _______
//                   \     /
//                    )   (_.-._,.---------.,_.-._ _
//                   ((((((_)))_ Legal and other _)))_)_)
//                    )   ( '-' `'---------'` '-'
//                   /_____\lc 
//            
//~.:.~.:.~.:.~.:.~.:.~.:.~.:.~.:.~.:.~.:.~.:.<>.:.~.:.~.:.~.:.~.:.~.:.~.:.~.:.~.:.~.:.~.:.~
    
echo "</div>";
    
    
//echo $tailTail;
?>