function produtosBanco(connection){
	this._connection = connection;	
}

produtosBanco.prototype.lista = function(callback){
	this._connection.query('select * from livros',callback);
}

produtosBanco.prototype.salva = function(produto,callback){
	this._connection.query('insert into livros set ?',produto, callback);
}

module.exports = function(){
	return produtosBanco;
}