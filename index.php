<?php

require_once 'modelos/producto.php';
require_once 'modelos/proveedor.php';

$lp1 = new Proveedor ();
$lp1->Id = 01;
$lp1->Nombre = 'Oreos';
$lp1->Cuil = 123456789;
$lp1->Direccion = 'Avellaneda 1004' ;
$lp1->Telefono = 4334499;


$lp2 = new Proveedor ();
$lp2->Id = 02;
$lp2->Nombre = 'Macuca';
$lp2->Cuil = 123456788;
$lp2->Direccion = 'Oroño 1001' ;
$lp2->Telefono = 4334488;

$lp3 = new Proveedor ();
$lp3->Id = 03;
$lp3->Nombre = 'Sonrisas';
$lp3->Cuil = 123456787;
$lp3->Direccion = 'Francia 1002';
$lp3->Telefono = 4334477 ;

$p = new Producto ();
$p->Id = 101;
$p->Nombre = 'Cookies';
$p->Codigo = 001010;
$p->Precio = 250 ;
$p->Marca = 'Macucas S.A' ;

$p->ListaProveedores [ ] = $lp1;
$p->ListaProveedores [ ] = $lp2;
$p->ListaProveedores [ ] = $lp3;

$p->MostrarDatos();