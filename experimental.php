<?php

function order_pizza($pizzaType, $for_who){
    $pizzaType ;
    $price = calculate_costs($pizzaType);
    $address = ''; //remove unknown to empty string

    

   // change if condition to switch

    switch ($for_who){
        case  'Koen':
            $address = 'a yacht in Antwerp';
            break;
        case 'Manuele':
            $address = 'somewhere in Belgium';
            break;
        case 'students':
            $address = 'BeCode office';
            break;
 
    }
    echo 'Creating new order... <br>';
    echo 'A ' .$pizzaType.' pizza should be sent to ' .$for_who . '.' .'<br>The address: ' .$address .'.';
    echo '<br>';
    echo 'The bill is €' .$price .'.<br>';
    echo 'Order finished.<br><br>';
}

function total_price($price){
    return $price;
}


// useless function 
// function test($pizza_type){
//     echo 'Test: type is'. $pizza_type. '<br>';
// }

function calculate_costs($pizzaType){
    $cost = '';

    // change if condition to switch, in the previous if condition no need for nesting!

    switch($pizzaType){
        case 'marguerita':
            $cost = 5;
            break;
        case 'golden':
            $cost = 100;
            break;
        case 'calzone':
            $cost = 10;
            break;
        case 'hawai':
            throw new Exception('Computer says no');
            break;
    }
    return $cost;
}

function order_pizza_all(){
    // $test = 0; //no need this variable
    order_pizza('calzone', 'Koen');
    order_pizza('marguerita', 'Manuele');
    order_pizza('golden', 'students');
}

order_pizza_all(); // call this function to execute it outside make_Allhappy function

// this function below is not needed 

// function make_Allhappy($orderPlaced){
//     if ($orderPlaced) {
//         order_pizza_all();
//     }
// }

// make_Allhappy(true);
