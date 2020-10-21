<?php

/* Recall, see varriable as pot/container.....See array as stove/gas with two or more burning faces.With array,
we can perform differnt actions with one function or we can store different values with one function.
An array is a special variable whicjh can hold more than one value at a time.[a variable would hold 
only one value at a time]. while one array can store multiple values at a time.
*/
//numeric array
$names = array('Ada','Gabriel',"Funsho", 245, 1.0);
echo "Hey!, People call me ".$names[0].'<br/>';
//Associative array
$surnames = array('Ada' => 'eziagorchy', "Gabriel" => 'Osemwinge', "Funsho" => 'Ogene', 0 => 1);
echo "But, i am ".$surnames['Ada'].'<br/>';
//Multidimensional arrays 
$Ace_Supermarket =array(
                  'Phone'=> array('Infinix' => array('Note1', 'Hot_6_pro'),
                                   'Samsung'=> array('s7', 's20_ultra'),
                                   'Iphone'=> array('iphone_x', 'iphone_5s')),
                  'food'=> array('rice','beans','milk'),
                  'cars'=> array('bmw','toyota','honda')

                  );
                  echo "Ace_Supermarket sells Infinix ". $Ace_Supermarket['Phone']['Infinix'][0].'<br/>';
echo $names[0]."'s phone is ".$Ace_Supermarket['Phone']['Infinix'][1].'<br/>';
//echo $Ace_Supermarket[0];  








?>