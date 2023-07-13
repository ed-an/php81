<?php

//define constants

//function define
define('FIRSTNAME', 'Edmilson');

// key word const
const LASTNAME=' Neves';

//check if the constants exist
if (defined('FIRSTNAME')){
    echo FIRSTNAME;
};


if (defined('LASTNAME')){
    echo LASTNAME;
}

// dinamic constants
$paid = 'PAID';
define('STATUS_'. $paid, $paid);

echo STATUS_PAID;


//variable variable
// a variavel $foo recebe o valor de 'bar';
$foo = 'bar';
// Variavel de variavel é quando o valor de uma variavel recebe u
//um valor, para isso atribua mais um dolar a variable $$foo
// cujo valor passa a  ser variavel, assim $bar, cujo o valor é teste;
//$$foo='teste'; é o mesmo que $bar = teste
$$foo='teste';

printf( "<br><br>'\$foo rebece ': %s<br>", $foo);
printf( "<br> '\$\$foo' tem a variavel : $$foo");
printf( "<br> '\$bar o valor é': %s<br>", $bar);

echo "<br>$foo , {$$foo} <br>";
echo "<br>$foo , ${foo} <br>";

