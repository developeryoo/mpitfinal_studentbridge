<?php 
	$conn = mysqli_connect('localhost', 'root', '', 'studentbridge');
    $postimg = $_POST['post_img'];
    $posttitle = $_POST['post_title'];
    $posttext = $_POST['post_text'];


	$query_text = "INSERT INTO posts (img,title,info) VALUES ('{$_POST['post_img']}', '{$_POST['post_title']}', '{$_POST['post_text']}')";
	$query = mysqli_query($conn, $query_text);

	header("Location: more_news.php");	
?>