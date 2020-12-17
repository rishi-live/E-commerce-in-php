function genericajax( querystring, output, timeInterval) {
	var aj = new XMLHttpRequest();
	aj.onreadystatechange = function() {
		if(aj.readyState == 4 && aj.status == 200) {
			document.getElementById(output).innerHTML = aj.responseText;
		}
		if(timeInterval > 0) {
			setTimeout("genericajax( '"+querystring+ "', '"+output+"', "+timeInterval+" )",timeInterval);
		}
	}
	aj.open("GET",querystring,true);
	aj.send();
}