<?php

function validateTopic($topic){

        $errors = array();

if(empty($topic['name'])) {
    array_push($errors, 'Topic name Required');
}

/*
 $existingTopic = selectOne('topics', ['name' => $topic['name']]);
 if($existingTopic){
    array_push($errors, 'This topic already exists');
 }
*/

$existingTopic = selectOne('topics', ['name' => $topic['name']]);
if($existingTopic){

   if(isset($topic['update-topic']) && $existingTopic['id'] != $topic['id']) {
array_push($errors, ' Topic already exists');
   }
if(isset($topic['add-topic'])) {
   array_push($errors, 'This Topic already exists');
       }
    }
    return $errors;
}


