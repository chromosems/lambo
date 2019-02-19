"use strict"

function show_selected() {
	alert('here');
	
	var selector = document.getElementById('id_of_select');
	var value = selector[selector.selectedIndex].value;

	document.getElementById('display').innerHTML = value;
}
