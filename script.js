function myFuncTg() {
	var 
		
		sssend = document.getElementById('ssend').value;
		ssend_file = document.getElementById('send_file').value;
		result = 'Ваша ссылка: <a href="https://api.telegram.org/bot7438125944:AAFSoH6twja_5JXGbIIb-H8Tzh2lpn7JtZ0/sendMessage?chat_id=-1001983516058&parse_mode=html&text=' + sssend + '">' + 'Отправить текст' + '</a>',
		resultp = 'Ваша ссылка: <a href="https://api.telegram.org/bot7438125944:AAFSoH6twja_5JXGbIIb-H8Tzh2lpn7JtZ0/sendPhoto?chat_id=-1001983516058&parse_mode=html&photo=' + ssend_file + '">' + 'Отправить фото' + '</a>',
		paragr = document.getElementsByTagName('p')[0];
		ahka = document.getElementsByTagName('h5')[0];
		
	
	console.log(sssend)
	console.log(ssend_file)
	paragr.innerHTML = (result);
	ahka.innerHTML = (resultp);
		
}

function myFunc() {
	var 
		
		sssend = document.getElementById('ssend').value;
		ssend_file = document.getElementById('send_file').value;
		result = 'Ваша ссылка: <a href="https://api.telegram.org/bot7438125944:AAFSoH6twja_5JXGbIIb-H8Tzh2lpn7JtZ0/sendMessage?chat_id=6069595782&parse_mode=html&text=' + sssend + '">' + 'Отправить текст маме' + '</a>',
		resultp = 'Ваша ссылка: <a href="https://api.telegram.org/bot7438125944:AAFSoH6twja_5JXGbIIb-H8Tzh2lpn7JtZ0/sendPhoto?chat_id=6069595782&parse_mode=html&photo=' + ssend_file + '">' + 'Отправить фото маме' + '</a>',
		paragr = document.getElementsByTagName('p')[0];
		ahka = document.getElementsByTagName('h5')[0];
		
	
	console.log(sssend)
	console.log(ssend_file)
	paragr.innerHTML = (result);
	ahka.innerHTML = (resultp);
		
}