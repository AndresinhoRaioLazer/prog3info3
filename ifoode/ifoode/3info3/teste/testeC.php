<?php

require "../app/modelos/Categoria.php";
require "../app/modelos/CrudCategoria.php";

//$c1 = new Categoria();
//$c1->setIdCategoria(1);
//$c1->setNome('andrezinho');
//$c1->setDescricao('Pipipi popopo');
//
//$c2 = new Categoria('2','Lukfetao', 'a sim');

$cat = new CrudCategoria();
$cat->InsertCategoria();