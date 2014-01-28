<!-- gb 16:50 25/04/2009 -->
<?php
$ip = $_SERVER['REMOTE_ADDR'];
$hostaddress = gethostbyaddr($ip);
$browser = $_SERVER['HTTP_USER_AGENT'];

$referred = "";
if(isset($_SERVER['HTTP_REFERER'])) {
        $referred = $_SERVER['HTTP_REFERER'];
}

$via = "";
if (isset($_SERVER['HTTP_VIA'])) {
        $via = $_SERVER['HTTP_VIA'];
}

$x_forwarded_for = "";
if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $x_forwarded_for = $_SERVER['HTTP_X_FORWARDED_FOR'];
}

print "<strong>IP adres van je pc:</strong><br />\n";
print "$ip<br /><br />\n";
print "<strong>Heeft je computer een website?</strong><br />\n";
print "<a href=\"http://$ip/\">http://$ip/</a><br /><br />\n";

print "<strong>Meer gegevens over dit adres:</strong><br />\n";
print "$hostaddress<br /><br />\n";
print "<strong>Weet Robtex iets meer?</strong><br />\n";
print "<a href=\"http://www.robtex.com/dns/$hostaddress\">$hostaddress</a><br /><br />\n";


print "<strong>Het originele IP adres van je pc:</strong><br />\n";
if ($x_forwarded_for == "") {
print "kan niet bepaald worden.";
}
print "$x_forwarded_for<br /><br />\n";

print "<strong>Proxy</strong><br />\n";
if ($via == "") {
print "Blijkbaar gebruik je geen proxy.";
}
print "$via<br /><br />\n";

print "<strong>Browser info</strong>:<br />\n";
print "$browser<br /><br />\n";

print "<strong>De link die je naar deze pagina bracht</strong>:<br />\n";
if ($referred == "") {
print "Je kwam rechtstreeks naar deze pagina.<br /><br />\n";
}
else {
print "$referred<br /><br />\n";
}
print "<strong>Alternatief: <a href=\"http://fmbip.com/\">fmbip</a></strong><br />\n";
print "<strong>Alternatief: <a href=\"http://www.dnsstuff.com/tools/aboutyou/\">DNSstuff</a></strong><br />\n";
?>
