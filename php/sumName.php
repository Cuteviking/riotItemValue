<?php
	$url = 'https://euw.api.pvp.net/api/lol/euw/v1.4/summoner/by-name/'.rawurlencode($_GET['sumName']).'?api_key=a39d07f6-2520-4c21-9c24-e1e34c2777df';
    $return = json_decode(file_get_contents($url), true);
    echo $return[str_replace(' ','',$_GET['sumName'])]['id'];
?>