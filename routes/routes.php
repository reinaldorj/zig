<?php
/*-----------------------------------------------------
* Declaração das rotas do Sistema
*/

# ----- LoginController --------------------------------
$route->get('/', 'LoginController@index');
$route->get('login', 'LoginController@index');
$route->post('login/logar', 'LoginController@logar');
$route->get('login/logout', 'LoginController@logout');

# recuperação de senha do usuário
$route->get('login/senha', 'Login\SenhaController@index');
$route->post('login/senha', 'Login\SenhaController@recuperar');
$route->get('login/senha/recuperacao/{any}', 'Login\SenhaController@recuperacao');
$route->post('login/senha/recuperacao/{any}', 'Login\SenhaController@update');

$route->get('home', 'HomeController@index');

# ----- UsuarioController --------------------------------
$route->get('usuario', 'UsuarioController@index');
$route->post('usuario/save', 'UsuarioController@save');
$route->get('usuario/modalFormulario/{idUsuario?}', 'UsuarioController@modalFormulario');
$route->post('usuario/update', 'UsuarioController@update');
$route->get('usuario/verificaSeEmailExiste/{email}/{idUsuario?}', 'UsuarioController@verificaSeEmailExiste');

$route->get('usuario/teste', 'UsuarioController@testeEmail');


# ----- RelatorioController --------------------------------
$route->get('relatorio', 'RelatorioController@index');
$route->get('relatorio/vendasPorPeriodo', 'RelatorioController@vendasPorPeriodo');
$route->post('relatorio/vendasChamadaAjax', 'RelatorioController@vendasChamadaAjax');
$route->get('relatorio/gerarXls/{de}/{ate}/{opcao?}', 'RelatorioController@gerarXls');
$route->get('relatorio/gerarPDF/{de}/{ate}/{opcao?}', 'RelatorioController@gerarPDF');

# ----- ProdutoController --------------------------------
$route->get('produto', 'ProdutoController@index');
$route->get('produto/modalFormulario/{idProduto?}', 'ProdutoController@modalFormulario');
$route->post('produto/save', 'ProdutoController@save');
$route->post('produto/update', 'ProdutoController@update');

# ----- ConfiguracaoController --------------------------------
$route->get('configuracao', 'ConfiguracaoController@index');
$route->post('configuracao/alterarConfigPdv', 'ConfiguracaoController@alterarConfigPdv');

# ----- PdvPadraoController  --------------------------------
$route->get('pdvPadrao', 'PdvPadraoController@index');
$route->post('pdvPadrao/save', 'PdvPadraoController@save');

# ----- PdvDiferencialController  --------------------------------
$route->get('pdvDiferencial', 'PdvDiferencialController@index');
$route->get('pdvDiferencial/colocarProdutosNaMesa/{idProduto}', 'PdvDiferencialController@colocarProdutosNaMesa');
$route->get('pdvDiferencial/obterProdutosDaMesa/{posicaoProduto?}', 'PdvDiferencialController@obterProdutosDaMesa');

$route->get('pdvDiferencial/alterarAquantidadeDeUmProdutoNaMesa/{idProduto}/{quantidade}',
  'PdvDiferencialController@alterarAquantidadeDeUmProdutoNaMesa');

$route->get('pdvDiferencial/retirarProdutoDaMesa/{idProduto}', 'PdvDiferencialController@retirarProdutoDaMesa');
$route->post('pdvDiferencial/saveVendasViaSession', 'PdvDiferencialController@saveVendasViaSession');

$route->get('pdvDiferencial/obterValorTotalDosProdutosNaMesa',
  'PdvDiferencialController@obterValorTotalDosProdutosNaMesa');

# ----- ClienteController --------------------------------
$route->get('cliente', 'ClienteController@index');
$route->get('cliente/modalFormulario/{idCliente?}', 'ClienteController@modalFormulario');
$route->post('cliente/save', 'ClienteController@save');
$route->post('cliente/update', 'ClienteController@update');
$route->get('cliente/desativarCliente/{idCliente}', 'ClienteController@desativarCliente');
$route->get('cliente/ativarCliente/{idCliente}', 'ClienteController@ativarCliente');

$route->get('cliente/verificaSeEmailExiste/{email}/{idCliente?}', 'ClienteController@verificaSeEmailExiste');
$route->get('cliente/verificaSeCnpjExiste/{cnpj}/{idCliente?}', 'ClienteController@verificaSeCnpjExiste');
$route->get('cliente/verificaSeCpfExiste/{cpf}/{idCliente?}', 'ClienteController@verificaSeCpfExiste');

# ----- EnderecoController --------------------------------
$route->post('clienteEndereco/save', 'ClienteEnderecoController@save');
$route->post('clienteEndereco/update', 'ClienteEnderecoController@update');
$route->get('clienteEndereco/modalFormulario/{idCliente}/{idEnderecoCliente?}',
  'ClienteEnderecoController@modalFormulario');
$route->get('clienteEndereco/buscarEnderecoViaCep/{cep?}', 'ClienteEnderecoController@buscarEnderecoViaCep');
$route->get('clienteEndereco/modalVisualizarEnderecos/{idCliente}',
  'ClienteEnderecoController@modalVisualizarEnderecos');

# ----- PedidoController --------------------------------
$route->get('pedido', 'PedidoController@index');
$route->get('pedido/modalFormulario/{idPedido?}', 'PedidoController@modalFormulario');
$route->get('pedido/enderecoPorIdCliente/{idCliente?}', 'PedidoController@enderecoPorIdCliente');
$route->get('pedido/adicionarProduto/{idProduto}/{quantidade}', 'PedidoController@adicionarProduto');
$route->get('pedido/retirarProdutoDoPedido/{idProduto}', 'PedidoController@retirarProdutoDoPedido');
$route->get('pedido/mudarAquantidadeDoProduto/{idProduto}/{quantidade}', 'PedidoController@mudarAquantidadeDoProduto');
$route->get('pedido/save', 'PedidoController@save');
$route->get('pedido/obterAQuantidadeDoProdutoNoPedido/{idProduto}', 'PedidoController@obterAQuantidadeDoProdutoNoPedido');

$route->get('pedido/teste', 'PedidoController@teste');

$route->get('pwa/login', 'Api\InicioPwaController@index');
$route->post('pwa/logar', 'Api\LoginController@logar');
$route->get('pwa/pdv', 'Api\InicioPwaController@pdv');
$route->get('test/vendedores', 'Api\TesteController@vendedores');

# ----- LogController --------------------------------
$route->get('logs', 'LogAcessoController@index');

# ----- EmpresaController --------------------------------
$route->get('empresa', 'EmpresaController@index');
$route->post('empresa/save', 'EmpresaController@save');
$route->post('empresa/update', 'EmpresaController@update');
$route->get('empresa/modalFormulario/{idEmpresa?}', 'EmpresaController@modalFormulario');
$route->get('empresa/verificaSeEmailExiste/{email}/{idEmpresa?}', 'EmpresaController@verificaSeEmailExiste');

# Router run
$route->run();
