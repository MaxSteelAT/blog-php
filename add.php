<?php
//Incluir un archivo externo
require 'db.php';

$title = $_POST['title'] ?? '';
$article = $_POST['article'] ?? '';
$image = $_POST['image'] ?? '';

if ($title !== '' && $article !== '' && $image !== '') {
  $stmt = $db->prepare("INSERT INTO post (title, article, image) VALUES (?,?,?)");
  $stmt->execute([$title, $article, $image]);
}

echo $title;
header('Location: index.php');
exit;