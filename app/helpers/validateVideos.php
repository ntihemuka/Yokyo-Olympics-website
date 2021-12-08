<?php

function validateVideo($video){

        $errors = array();

if(empty($video['title'])) {
    array_push($errors, 'Title Required');
}

if(empty($video['body'])) {
    array_push($errors, ' Description Required');
}

if(empty($video['topic_id'])) {
    array_push($errors, 'Select topic');
}


 $existingVideo = selectOne('videos', ['title' => $video['title']]);
 if($existingVideo){

    if(isset($video['update-video']) && $existingVideo['id'] != $video['id']) {
array_push($errors, ' Title already taken');
    }
if(isset($post['add-video'])) {
    array_push($errors, 'This Title is taken');
        }
    }
    return $errors;
}