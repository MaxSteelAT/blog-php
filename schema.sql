CREATE TABLE post (
  id INTEGER PRIMARY KEY AUTOINCREMENT,
  title TEXT NOT NULL,
  article TEXT NOT NULL,
  image TEXT NOT NULL,
  active INTEGER DEFAULT 0
)