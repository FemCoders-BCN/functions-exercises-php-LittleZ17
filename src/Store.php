<?php

namespace App;

class Store
{
    //Ejercicio 1 -> escribe una función llamada increase() que sume 1 a un valor dado.
    //Exercise 1 -> write a function called increase() that adds 1 to a given value.

    public function increase($num)
    {
        //Escribe tu código aquí...
        return $num+1;
    }

    //Ejercicio 2 -> escribe una función llamada decrease() que reste 1 a un valor dado. Cuando llegue a 0 se quedará en 0 y no bajará a números negativos.
    //Exercise 2 -> write a function called decrease() that subtracts 1 from a given value. When it reaches 0 it will stay at 0 and will not go down to negative numbers.

    //Escribe tu código aquí...

    function decrease($num)
    {
        if ($num == 0){
            return $num;
        }
        if ($num > 0) {
            return $num-1;
        }   
    }

    //Ejercicio 3 -> escribe una función llamada rateByPrice() que devuelva el signo € si el valor es de 0 a 50, devuelva €€ si el valor es de 50.01 a 100 y devuelva €€€ si el valor es de 100.01 para arriba.
    //Exercise 3 -> write a function called rateByPrice() that returns the € sign if the value is from 0 to 50, returns €€ if the value is from 50.01 to 100 and returns €€€ if the value is 100.01 for up.

    //Escribe tu código aquí...

    function rateByPrice($num)
    {

        if ($num >= 0 && $num <= 50) {
            return '€';
        }
        if ($num >= 50.01 && $num <= 100) {
            return '€€';
        } else if ($num >= 100.01) {
            return '€€€';
        }
    }

    //Ejercicio 4 -> 
    //escribe una función llamada randomItem() que devuelva 3 números de manera aleatoria dentro de un array,
    //pasándole un máximo de números a escoger.
    //Exercise 4 -> write a function called randomItem() that returns 3 numbers randomly within an array, passing a maximum of numbers to choose from.

    //Escribe tu código aquí...

    function randomItem($maxnum)
    {
        $newArray = [];
        for ($i = 0; $i < 3; $i++) {
            $value = rand(0, $maxnum);
            $newArray = array_merge($newArray, [$value]);
        }
        return $newArray;
    }

    //Ejercicio 5 -> escribe una función llamada getItem() que devuelva un array que contengan todos los elementos que tengan un valor menor o igual a un valor dado.
    //Exercise 5 -> write a function called getItem() that returns an array containing all items that have a value less than or equal to a given value.

    //Escribe tu código aquí...

    function getItem($array, $valorDado){
        $newArray = [];
        for($i = 0; $i < count($array); $i++){
            if($array[$i] <= $valorDado){
                $newArray = array_merge($newArray, [$array[$i]]);
            }
        }
        return $newArray;
    }
}
