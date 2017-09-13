// Importando express
var app = require('./config/express')();

// Coloca o servidor online
app.listen(3000,function(){
	console.log('servidor online');
});