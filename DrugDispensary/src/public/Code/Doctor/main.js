function sendItemToAPI(){
	var req = new XMLHttpRequest();
	req.open('POST','/add');
	req.send(item);

	req.addEventListener('load', (e) => {
		//console.log(req.responseText);
		console.log('Request done!');
	});

	req.addEventListener('error', () => {
		console.log('An Error Occured.');
		console.log(e);
	});
}