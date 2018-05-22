<?php
require_once("../abre-sessao.php");
require_once("../../Lapserver2/models/Entidade.php");

$pdo = Conecta();

$lista = ListarEntidades($pdo, "profissionais");
?>

