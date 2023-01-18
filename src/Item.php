<?php

namespace App;

//Ejercicio 1 -> Crear una clase Item que tenga 3 propiedades: 
//name, price y quantity cuyo valor será declarado al crear un objeto.
//Cada propiedad debe ser capaz de ser retornada con un método propio.
//Exercise 1 -> Create an Item class that has 3 properties: name, price and quantity whose value will be declared when creating an object. Each property must be able to be returned with its own method.

//Escribe tu código aquí...

class Item
{
    // Declaración de las propiedades
    public $name;
    public $price;
    public $quantity;

    //creacion del constructor para pasarle las variables.

    function __construct($name, $price, $quantity)
    {
        $this->name = $name;
        $this->price = $price;
        $this->quantity = $quantity;
    }

    // Declaración de los métodos
    public function getName()
    {
        return $this->name;
    }
    public function getPrice()
    {
        return $this->price;
    }
    public function getQuantity()
    {
        return $this->quantity;
    }
}

class ClaseSencilla
{
    // Declaración de una propiedad
    public $var = 'un valor predeterminado';

    // Declaración de un método
    public function mostrarVar()
    {
        echo $this->var;
    }
}
