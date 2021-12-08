<?php

function validateTransactions($transaction){

        $errors = array();

if(empty($transaction['slot'])) {
    array_push($errors, ' Time Slot Required');
}
if(empty($transaction['name'])) {
    array_push($errors, ' name Required');
}
    return $errors;
}