var http = require('http');
var configuracoes = {
	host : 'localhost',
	port : 3000,
	path: '/produtos',
	method: 'post',
	headers: {
		'Accept' : 'application/json',
		'Content-type' : 'application/json'
	}
};

var client = http.request(configuracoes,function(res){
	console.log(res.statusCode);
	res.on('data',function(body){
		console.log('Corpo:'+body);
	});
});

var produto = {
	titulo: 'mais sobre node',
	preco: 123,
	descricao: 'livro de teste para cadastro direto no terminal'
};

client.end(JSON.stringify(produto));