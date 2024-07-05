<?php
session_start();
// Obtém a URL solicitada
$request = $_SERVER['REQUEST_URI'];

// Remove a query string da URL (se houver)
$request = strtok($request, '?');

// Define o caminho base para os arquivos PHP
$baseDir = __DIR__;

if (preg_match('/\.(?:png|jpg|jpeg|gif|css|js)$/', $request)) {
    return false; // Permite que o servidor PHP integrado sirva os arquivos estáticos
}

switch ($request) {
    //paginas diretas
    case '/':
        require $baseDir . '/frontpage.php';
        break;
    //Paginas Cliente
    case '/conta':
        require $baseDir . '/documentos-html/conta.php';
        break;
    case '/produtos':
        require $baseDir . '/produtos.php';
        break;
    case '/login':
        require $baseDir . '/documentos-html/login.php';
        break;
    case '/cadastro':
        require $baseDir . '/documentos-html/cadastro.php';
        break;
    case '/carrinho':
        require $baseDir . '/documentos-html/carrinho.php';
        break;
    case '/confirmarPedido':
        require $baseDir . '/documentos-html/confirmarPedido.php';
        break;
    case '/adicionarEndereco':
        require $baseDir . '/documentos-html/adicionarEndereco.php';
        break;
    case '/semPermissao':
        require $baseDir . '/documentos-html/semPermissao.php';
        break;
    //Listagens Visao Funcionario
    case '/perfilFuncionario':
        require $baseDir . '/documentos-html/perfilFuncionario.php';
        break;
    case '/listaProdutos':
        require $baseDir . '/documentos-html/listaDeProdutos.php';
        break;
    case '/listaClientes':
        require $baseDir . '/documentos-html/listaDeClientes.php';
        break;
    case '/listaCategoria':
        require $baseDir . '/documentos-html/listaDeCategorias.php';
        break;
    case '/listaCargos':
        require $baseDir . '/documentos-html/listaDeCargos.php';
        break;
    case '/listaFuncionario':
        require $baseDir . '/documentos-html/listaDeFuncionarios.php';
        break;
    case '/relatorios':
        require $baseDir . '/documentos-html/relatorios.php';
        break;
    case '/relatorioVendas':
        require $baseDir . '/documentos-html/relatorioVendas.php';
        break;
    case '/relatoriosListagem':
        require $baseDir . '/documentos-html/listaRelatorios.php';
        break;
    //Cadastros
    case '/cadastraCategoria':
        require $baseDir . '/documentos-html/registrarCategoria.php';
        break;
    case '/cadastraFuncionario':
        require $baseDir . '/documentos-html/registrarFuncionario.php';
        break;
    case '/cadastroProduto':
        require $baseDir . '/documentos-html/registrarProduto.php';
        break;
    case '/cadastroCargo':
        require $baseDir . '/documentos-html/registrarCargo.php';
        break;
    case '/cadastroPermissao':
        require $baseDir . '/documentos-html/registrarPermissao.php';
        break;
    case '/vincularPermissao':
        require $baseDir . '/documentos-html/vincularPermissaoCargo.php';
        break;
    //Ediçao
    case '/editarProduto':
        require $baseDir . '/documentos-html/editarProduto.php';
        break;
    case '/editarCategoria':
        require $baseDir . '/documentos-html/editarCategoria.php';
        break;
    case '/editarCliente':
        require $baseDir . '/documentos-html/editarCliente.php';
        break;
    case '/editarFuncionario':
        require $baseDir . '/documentos-html/editarFuncionario.php';
        break;
    //Controladores
    case '/createSimplifiedUser':
        require 'controller/createSimplifiedUser.php';
        break;
    case '/cancelarCompra':
        require 'controller/cancelarCompra.php';
        break;
    case '/verifySessionCpf':
        require 'controller/verifySessionCpf.php';
        break;
    case '/excluir_produto.php':
        require 'controller/excluir_produto.php';
        break;
    case '/getRelatorios.php':
        require 'controller/getRelatorios.php';
        break;
    case '/getRelatoriosVendas':
        require 'controller/getRelatoriosVenda.php';
        break;
    case '/salvaEndereco':
        require 'controller/salvarEndereco.php';
        break;
    case '/editCliente':
        require 'controller/editCliente.php';
        break;
    case '/adicionar_permissao':
        require 'controller/adicionar_permissao.php';
        break;
    case '/adicionar_cargo':
        require 'controller/adicionar_cargo.php';
        break;
    case '/associar_permissao':
        require 'controller/associar_permissao.php';
        break;
    case '/finalizaCompra':
        require 'controller/finalizaCompra.php';
        break;
    case '/adicionar_carrinho':
        require 'controller/adicionar_carrinho.php';
        break;
    case '/editFuncionario':
        require 'controller/editFuncionario.php';
        break;
    case '/editCategoria':
        require 'controller/editCategoria.php';
        break;
    case '/editProduto':
        require 'controller/editProduto.php';
        break;
    case '/createCategoria':
        require 'controller/createCategoria.php';
        break;
    case '/emailExist.php':
        require 'controller/emailExist.php';
        break;
    case '/loginUser.php':
        require 'controller/loginUser.php';
        break;
    case '/logout':
        require 'controller/Logout.php';
        break;
    case '/createProduct':
        require 'controller/createProduct.php';
        break;
    case '/createFuncionario':
        require 'controller/createFuncionario.php';
        break;
    case '/createCargo':
        require 'controller/createCargo.php';
        break;
    //Tela de erro
    default:
        http_response_code(404);
        require $baseDir . '/404.php';
        break;
}
