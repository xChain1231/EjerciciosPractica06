<?php
    echo "Welcome to PHPSandbox";
$longitud=rand(10,1000);

print "--<p>longitud:-$longitud</p>\n";

print"\n";
print"--<p>";
print"----<svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" \n";
print"------width=\"".$longitud."px\"-height=\"10px\">\n";

// forma alternativa
// print "width=\"".$longitud."px\" height=\"10px\">\n";

print "<line x1=\"1\" y1=\5\" x2=$longitud\" y2=\"5\" stroke=\"black\" stroke-width=\"10\"/>\n";

print "</svg>\n";
print"</p>";

?>