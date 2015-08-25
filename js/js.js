/*
 * Pierre Norrbrink
 * 
 * all functions that are uing ajax is conected [function name] and [function name]return.
 * 
 * init 
 * all the used functions [A-Z]
 * ajax 
 */

function init(){
	document.getElementById("sumNameButton").addEventListener("click", sumName, false);
}


//-- 


function sumName(){
	ajax("php/sumName.php?sumName="+document.getElementById("sumName").value,sumNameReturn);
}

function sumNameReturn(XHR){
	//replace becuase there is no space in the json Edit: changed the result from sumName.php to only ID 

	document.getElementById("sumNameOutput").innerHTML = XHR; 
}

//-- ajax 
function ajax(url, callback){
	var XHR = null;
		if (XMLHttpRequest) {
		XHR = new XMLHttpRequest();
	} 
	else {
		XHR = new ActiveXObject("Microsoft.XMLHTTP");
	}
	
	XHR.onreadystatechange = function () {
		if (XHR.readyState == 4 || XHR.readyState == "complete") {
			if (XHR.status == 200) {
				console.log(XHR.responseText);
				callback(JSON.parse(XHR.responseText));
			} 
			else {
				alert("Server down! :c");

			}
		}
	}
	
	XHR.open("GET", url, true);
	XHR.send(null);
}
//--
window.addEventListener("load",init,false);