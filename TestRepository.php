<?php


require_once __DIR__ . '/GetConnection.php';
require_once __DIR__ . '/Model/Comment.php';
require_once __DIR__ . '/Repository/CommentRepository.php';

use Repository\CommentRepositoryImpl;
use model\Comment;

$connection = getConnection();
$repository = new CommentRepositoryImpl($connection);

//$comment = new Comment(
//    email: 'repostiory@test.com', comment: 'hi');
//$repository->insert($comment);

//var_dump($comment->getId());
//$comment = $repository->findById(13);
//var_dump($comment);

$comments = $repository->findAll();
var_dump($comments);




$connection = null;