<?php

function validateActivity($activity){

        $errors = array();

if(empty($activity['title'])) {
    array_push($errors, 'Title Required');
}

if(empty($activity['body'])) {
    array_push($errors, ' Body Required');
}
if(empty($activity['slot'])) {
    array_push($errors, ' Time Slot Required');
}

if(empty($activity['topic_id'])) {
    array_push($errors, 'Select topic');
}


 $existingActivity = selectOne('activities', ['title' => $activity['title']]);
 if($existingActivity){

    if(isset($Activity['update-activity']) && $existingActivity['id'] != $activity['id']) {
array_push($errors, ' Title already taken');
    }
if(isset($activity['add-activity'])) {
    array_push($errors, 'This Title is taken');
        }
    }
    return $errors;
}