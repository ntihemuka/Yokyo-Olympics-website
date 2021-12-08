<?php

function validateUser($user){

        $errors = array();

if(empty($user['username'])) {
    array_push($errors, 'Username Required');
}

if(empty($user['email'])) {
    array_push($errors, 'E-mail Required');
}

if(empty($user['password'])) {
    array_push($errors, 'Password is required');
}


if($user['passwordconf'] !==$_POST['password']) {
    array_push($errors, 'Passwords dont match');
}



$existingUser = selectOne('users', ['email' => $user['email']]);
if($existingUser){

   if(isset($user['update-user']) && $existingUser['id'] != $user['id']) {
array_push($errors, ' E-mail already taken');
   }
if(isset($user['create-admin'])) {
   array_push($errors, 'E-mail Title is taken');
       }
    }
    return $errors;
}




function validateLogin($user){

    $errors = array();

if(empty($user['username'])) {
array_push($errors, 'Username Required');
}

if(empty($user['password'])) {
array_push($errors, 'Password is required');
}

return $errors;
}