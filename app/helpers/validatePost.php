<?php

function validatePost($post){

        $errors = array();

if(empty($post['title'])) {
    array_push($errors, 'Title Required');
}

if(empty($post['body'])) {
    array_push($errors, ' Body Required');
}

if(empty($post['topic_id'])) {
    array_push($errors, 'Select topic');
}


 $existingPost = selectOne('posts', ['title' => $post['title']]);
 if($existingPost){

    if(isset($post['update-post']) && $existingPost['id'] != $post['id']) {
array_push($errors, ' Title already taken');
    }
if(isset($post['add-post'])) {
    array_push($errors, 'This Title is taken');
        }
    }
    return $errors;
}