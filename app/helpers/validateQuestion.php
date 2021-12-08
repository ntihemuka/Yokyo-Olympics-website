<?php

function validateQuestion($question){

        $errors = array();

if(empty($question['title'])) {
    array_push($errors, 'Title Required');
}

if(empty($question['body'])) {
    array_push($errors, ' message Required');
}

if(empty($question['frequent_id'])) {
    array_push($errors, 'Select F.A.Q category');
}

    return $errors;
}