<?php
session_start();
#session_register("count");

if (!isset($_SESSION))
{
        $_SESSION["count"] = 0;
        echo "<p>Counter initialized</p>\n";
}
else { $_SESSION["count"]++; }

echo "<p>Your browsers refresh count is <b>$_SESSION[count]</b></p>".
        "<p>please reload this page to increment</p>";

$ip = (getenv(HTTP_X_FORWARDED_FOR))
? getenv(HTTP_X_FORWARDED_FOR)
: getenv(REMOTE_ADDR);

echo "<p>This webserver sees your IP client address as <b>$ip</b>.</p>";
?>
