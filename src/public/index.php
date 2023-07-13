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


$paid = 'PAID';

define('STATUS_'. $paid, $paid);

echo STATUS_PAID;



