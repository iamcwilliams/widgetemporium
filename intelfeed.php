<?php
$html = "";
$url = "http://www.ruralintelligence.com/index.php/feed/RSS_2.0";
$xml = simplexml_load_file($url);
for($i = 0; $i < 10; $i++){
	$title = $xml->channel->item[$i]->title;
	$link = $xml->channel->item[$i]->link;
	
        $html .= "<a href='$link'><h3>$title</h3></a>";
}
echo $html;
?>