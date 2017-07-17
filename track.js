$(document).ready(function() {
	var uid = window.getComputedStyle(document.querySelector('#email-address'), ':after').getPropertyValue('content');
	console.log(uid);
  //use ajax to send to webserver
});
