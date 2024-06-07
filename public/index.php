<?php
  // Obtém a URL solicitada
  $request = $_SERVER['REQUEST_URI'];
  
  // Remove a query string da URL (se houver)
  $request = strtok($request, '?');
  
  // Define o caminho base para os arquivos PHP
  $baseDir = __DIR__;

  if (preg_match('/\.(?:png|jpg|jpeg|gif|css|js)$/', $request)) {
    return false; // Permite que o servidor PHP integrado sirva os arquivos estáticos
}
  
  // Roteamento básico
  switch ($request) {
      case '/':
          require $baseDir . '/frontpage.php';
          break;
      case '/conta.php':
          require $baseDir . '/conta.php';
          break;
      case '/produtos.php':
          require $baseDir . '/produtos.php';
          break;
      // Adicione mais casos para outras páginas
      default:
          // Página 404 personalizada
          http_response_code(404);
          require $baseDir . '/404.php';
          break;
  }
  