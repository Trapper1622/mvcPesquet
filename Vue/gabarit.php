<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?= $titre ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="Contenu/style.css" />
  <script src="main.js"></script>
</head>

<body>
  <div id="global">
    <header>
      <a href="index.php">
        <h1 id="titreBlog">Mon Blog</h1>
      </a>
      <p>Je vous souhaite la bienvenue sur ce modeste blog.</p>
    </header>
    <div id="contenu">
      <?= $contenu ?> <!-- element spécifique -->
    </div><!-- #contenu -->
    <footer id="piedBlog">
      Blog réalisé avec PHP, HTML5 et CSS.
    </footer>
  </div><!-- #global -->
</body>

</html>