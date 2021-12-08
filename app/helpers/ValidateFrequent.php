<?php

function validateFrequent($frequent){

        $errors = array();

if(empty($frequent['name'])) {
    array_push($errors, 'Category Required');
}


$existingFrequent = selectOne('frequently_asked', ['name' => $frequent['name']]);
if($existingFrequent){

   if(isset($frequent['update-frequent']) && $existingFrequent['id'] != $frequent['id']) {
array_push($errors, ' Category already exists');
   }
if(isset($frequent['add-frequent'])) {
   array_push($errors, 'This Category already exists');
       }
    }
    return $errors;
}


