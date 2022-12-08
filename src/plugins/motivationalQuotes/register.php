<?php

/**
 * MotivationalQuotes
 *
 * Register Events here
 *
 */

//Create function for the event
function showQuote($payload)
{
    // code here
    $motivationalQuotesSvc = new \leantime\plugins\services\motivationalQuotes();
    $randomQuote = $motivationalQuotesSvc->getRandomQuote();
    echo"<br />";

    echo "<h3 style='font-style: italic;'><i class='fa-solid fa-quote-left'></i> ".$randomQuote->quote."</h3>";
    echo "<small>- ".$randomQuote->author."</small>";
}

//Register event listener
    \leantime\core\events::add_event_listener("core.template.dispatchTplEvent.afterWelcomeMessage", 'showQuote');




