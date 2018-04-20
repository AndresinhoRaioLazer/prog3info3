<?php

require "../app/modelos/Produto.php";

$p1 = new Produto();
$p1->setId(1);
$p1->setNome('danel');
$p1->setDescricao('saladinha');
$p1->setFoto('a');
$p1->setPreco('1,99');
$p1->setIdCategoria('1');

$p2 = new Produto('2','jaco', 'jajaja cococo', 'coco', 40000, 1);
