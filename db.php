<?php
$db = new PDO('sqlite:blog.db');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->exec("CREATE TABLE IF NOT EXISTS post (
 id INTEGER PRIMARY KEY AUTOINCREMENT,
  title TEXT NOT NULL,
  article TEXT NOT NULL,
  image TEXT NOT NULL,
  active INTEGER DEFAULT 0
)");