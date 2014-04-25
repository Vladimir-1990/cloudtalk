<?php

require ("include/config.php");
require ("include/auto_login.php");

$page_title = "Page not found";
STemplate::assign('page_title',$page_title);

$error_messages = array(
    "The requested document is totally fake",
    "No /404 here",
    "I'm really depressed about this",
    "You see, I'm just a web server...",
    "-- here I am, brain the size of the universe",
    "Trying to serve you a simple web page and then it doesn't even exist!",
    "I mean, I don't even know you.",
    "How should I know what you wanted from me?",
    "You honestly think I can *guess*",
    "Man, I'm so depressed I could just cry",
    "And then where would we be, I ask you?",
    "It's not pretty when a web server cries",
    "And where do you get off telling me what to show anyway",
    "Why does that give you the right to tell me what to do?"
);

$rand_keys = array_rand($error_messages, 1);
$random_message = $error_messages[$rand_keys];
STemplate::assign('random_message',$random_message);

$templateselect = '404.tpl';
STemplate::display('header.tpl');
STemplate::display($templateselect);
STemplate::display('footer.tpl');
//TEMPLATES END
?>