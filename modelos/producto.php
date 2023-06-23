<?php

class Producto {
    public $Id;
    public $Nombre;
    public $Codigo;
    public $Precio;
    public $Marca;
    public $ListaProveedores = array();

    public function MostrarDatos() {
        echo 'Datos del producto:'.'<br>';
        echo 'Id: '.$this->Id.'<br>';
        echo 'Nombre: '.$this->Nombre.'<br>';
        echo 'Código: '.$this->Codigo.'<br>';
        echo 'Precio : '.$this->Precio.'<br>';
        echo 'Marca: '.$this->Marca.'<br>';
        echo 'Datos de los proveedores: '.'<br>';

        foreach ($this->ListaProveedores as $lp) {
            echo 'Id: '.$lp->Id.'<br>';
            echo 'Nombre: '.$lp->Nombre.'<br>';
            echo 'Cuil: '.$lp->Cuil.'<br>';
            echo 'Dirección: '.$lp->Direccion.'<br>';
            echo 'Teléfono: '.$lp->Telefono.'<br>';
        }
    }
}