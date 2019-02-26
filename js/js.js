/**javascript for the central dispatch**/
/**js.js**/

function bookmark() {
	//console.log("bookmark");
	var url = "http://www.thecentraldispatch.com";

	//console.log(url);
	document.getElementById('bookmark').innerHTML = "<p>" + url + "</p>";

};
function init() {
	'use strict';
	//console.log('go');
	document.getElementById('bookmark').onmouseover = bookmark;
};
window.onload = init;
