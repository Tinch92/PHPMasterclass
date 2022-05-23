<?php
include 'inc/functions.php';

$id = isset($_GET['id']) ? $_GET['id'] : FALSE;

$post = getPost($id);
if (!$post) {
    header('Location : 404.php');
    die();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="utf-8"/>
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
      <meta name="description" content=""/>
      <meta name="author" content=""/>
      <title><?php echo $post['title']; ?> - Agiledrop PHP-Masterclass</title>
      <!-- Favicon-->
      <link rel="icon" type="image/x-icon" href="assets/favicon.ico"/>
      <!-- Core theme CSS (includes Bootstrap)-->
      <link href="css/styles.css" rel="stylesheet"/>
    </head>
<body>
<!-- Responsive navbar-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
            <a class="navbar-brand" href="index.php">Agiledrop PHP-Masterclass</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                                 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
                        class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.php">Home</a></li>
                      </ul>
                </div>
          </div>
    </nav>
<!-- Page content-->
<div class="container">
      <div class="row">
          <?php
            echo '<div class="col-sm-12">';
            //slika
            if (!empty($post['image'])) {
                          echo '<img src="' . $post['image']['url'] . '" alt="'.$post['image']['alt'].'">';
            }
            //naslov
            echo "<h1>{$post['title']}</h1>";
            //vsebina
            echo "<p>{$post['content']}</p>";
            //datum in avtor
            $date = date('d.m.Y', $post['authored on']);
            echo "<p>{$date}, {$post['authored by']}</p>";
            echo '</div>';

          ?>
      </div>
</div>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>
</body>
</html>