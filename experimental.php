<?php

<<<<<<< HEAD
// fw = for who
function ordr_pz($pizzatype, $fw) {

$type = $pizzatype;
echo 'Creating new order... <br>';
$toPrint = 'A ';
$toPrint .= $pizzatype;
$p = calc_cts($type);

=======
function order_pizza($pizzatype, $for_who){
    $type = $pizzatype;
    $toPrint = 'A ';
    $toPrint .= $pizzatype;
    $price = calculate_costs($type);
>>>>>>> 22fdaca8070b43fea9c0dee5fff9f27220012aa1
    $address = 'unknown';

    if ($for_who == 'koen') {
        $address = 'a yacht in Antwerp';
    } else if ($for_who == 'manuele') {
        $address = 'somewhere in Belgium';
    } else if ($for_who == 'students') {
        $address = 'BeCode office';
    }

    echo 'Creating new order... <br>';
    $toPrint .= ' pizza should be sent to ' . $for_who . '. <br>The address: {$address}.';
    echo $toPrint;
    echo '<br>';
    echo 'The bill is €' . $price . '.<br>';
    echo 'Order finished.<br><br>';
}

function total_price($price){
    return $price;
}

function test($pizza_type){
    echo 'Test: type is {$pizza_type}. <br>';
}

function calculate_costs($pizza_type){
    $cost = 'unknown';

    if ($pizza_type == 'marguerita') {
        $cost = 5;
    } else {
        if ($pizza_type == 'golden') {
            $cost = 100;
        }

        if ($pizza_type == 'calzone') {
            $cost = 10;
        }

        if ($pizza_type == 'hawai') {
            throw new Exception('Computer says no');
        }
    }
    return $cost;
}

function order_pizza_all(){
    $test = 0;
    order_pizza('calzone', 'koen');
    order_pizza('marguerita', 'manuele');
    order_pizza('golden', 'students');
}

function make_Allhappy($do_it){
    if ($do_it) {
        order_pizza_all();
    } else {
        // Should not do anything when false
    }
}

make_Allhappy(true);
