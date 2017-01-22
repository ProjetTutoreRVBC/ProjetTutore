<?php
use AppBundle\Model\Post;
$post = new Post();
$post->delete($_POST['idPost']);