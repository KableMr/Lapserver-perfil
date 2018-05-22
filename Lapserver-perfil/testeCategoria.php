<?php
require_once ("abre-sessao.php");
require_once ("class/CategoriaDao.php");


$pdo = Conectar();

$categoria = new CategoriaDao($pdo);
$categoriaLista = $categoria->ListarCotegoria();


echo "<pre>"; print_r($categoriaLista); die();


