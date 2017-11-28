<?php
function curl($url) {
 	$ch = @curl_init();
 	curl_setopt($ch, CURLOPT_URL, $url);
 	$head[] = "Connection: keep-alive";
 	$head[] = "Keep-Alive: 300";
 	$head[] = "Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
 	$head[] = "Accept-Language: en-us,en;q=0.5";
 	curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/37.0.2062.124 Safari/537.36');
 	curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
 	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
 	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
 	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
 	curl_setopt($ch, CURLOPT_TIMEOUT, 60);
 	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
 	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
 	curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
 	$page = curl_exec($ch);
 	curl_close($ch);
 	return $page;
}

function googleplus($link) {
 	$fetch = curl($link);
 	$varlow = explode('[18,640,360,"', $fetch);
 	$datareslow = explode('\u003d', $varlow[1]);
 	$SD = urldecode($datareslow[0]);
 	$resSD = ''.$SD.'=m18';
 	$varhigh = explode('[22,1280,720,"', $fetch);
 	$datareshigh = explode('\u003d', $varhigh[1]);
 	$HD = urldecode($datareshigh[0]);
 	$resHD = ''.$HD.'=m22';
 	if($HD != '') {
 		$source = '[{"type": "video/mp4", "label": "HD", "file": "'.$resHD.'"}, {"type": "video/mp4", "label": "SD", "file": "'.$resSD.'"}]';
 		echo $source;
	} else {
 		$source = '[{"type": "video/mp4", "label": "SD", "file": "'.$resSD.'"}]';
 		echo $source;
	}
}
?>
