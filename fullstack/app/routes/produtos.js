// Rotas
module.exports = function(app){
	var listaProdutos = function(request,response){
		// Abre conexao
		var connection = app.infra.connectionFactory();

		var produtosBanco = new app.infra.produtosBanco(connection);

		produtosBanco.lista(function(err, results){
			response.format({
				html: function(){
					response.render('produtos/lista',{
						lista : results,
					});
				},
				json: function(){
					response.json(results);
				}
			});
		});
		// Fecha conexao
		connection.end();
	};

	// Exibi Produtos
	app.get('/produtos',listaProdutos);

	// Form de salvar produtos
	app.get('/produtos/form',function(request,response){
		response.render('produtos/form');
	});

	// Grava produtos POST
	app.post('/produtos',function(request,response){

		var produto = request.body;

		// Abre conexao
		var connection = app.infra.connectionFactory();
		var produtosBanco = new app.infra.produtosBanco(connection);

		produtosBanco.salva(produto,function(err, results){
			// Redireciona depois que salva
			response.redirect('/produtos')
		});
	});
};