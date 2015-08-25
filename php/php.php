<?php 
	/*
	 * Pierre Norrbrink
	 * 
	 * all neccesery var first
	 * main function
	 * small side functions [A-Z] 
	 * */ 
	
	$key = "a39d07f6-2520-4c21-9c24-e1e34c2777df";
	$itemList = json_decode('{"blocks":[{"items":[{"count":1,"id":"3301"},{"count":4,"id":"2003"},{"count":1,"id":"3340"}],"type":"starting"},{"items":[{"count":1,"id":"2049"},{"count":1,"id":"2043"},{"count":1,"id":"3341"}],"type":"First Back"},{"items":[{"count":1,"id":"3117"},{"count":1,"id":"3105"},{"count":1,"id":"3082"},{"count":1,"id":"3364"}],"type":"Midgame"},{"items":[{"count":1,"id":"3190"},{"count":1,"id":"3110"},{"count":1,"id":"2045"}],"type":"Lategame"}],"type":"global","associatedChampions":[],"mode":"any","sortrank":4,"associatedMaps":[],"map":"any","title":"itemValue","isGlobalForMaps":true,"uid":"LOL_18E10786-B65D-82DF-A028-866EEC7DFF5F","priority":false,"isGlobalForChampions":true}', true);
	//switch to url
	//
	
	
	//
	
	
	function getItemImg($id){
		return "http://ddragon.leagueoflegends.com/cdn/5.2.1/img/item/". $id . ".png";
	}
	
	function JSON($url){
		return json_decode(file_get_contents($url), true);
	}
?>