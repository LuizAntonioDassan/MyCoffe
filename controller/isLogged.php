<?php
if (!isset($_SESSION['idUsuario'])) {
  header('Location: /login');
  exit();
}
?>