<?php
$posts = [
0 => [
"title" => "What is Lorem Ipsum?",
"content" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
"image" => [
"url" => "https://www.fillmurray.com/284/196",
"alt" => "Fill Murray placeholder image."
],
"authored on" => "1652345293",
"authored by" => 'Janez Novak',
],
1 => [
"title" => "Where can I get some?",
"content" => "There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.",
"image" => [
"url" => "https://www.fillmurray.com/300/250",
"alt" => "Fill Murray placeholder image."
],
"authored on" => "1652345293",
"authored by" => 'Janez Novak',
],
2 => [
"title" => "Why do we use it??",
"content" => "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).",
"image" => [
"url" => "https://www.fillmurray.com/500/500",
"alt" => "Fill Murray placeholder image."
],
"authored on" => "1652345293",
"authored by" => 'Janez Novak',
],
3 => [
"title" => "Where does it come from?",
"content" => "Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of de Finibus Bonorum et Malorum (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet.., comes from a line in section 1.10.32.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from de Finibus Bonorum et Malorum by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.",
"image" => [
"url" => "https://www.fillmurray.com/300/200",
"alt" => "Fill Murray placeholder image."
],
"authored on" => "1652345293",
"authored by" => 'Janez Novak',
],
4 => [
"title" => "The standard Lorem Ipsum passage, used since the 1500s",
"content" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
"image" => [
"url" => "https://www.fillmurray.com/150/360",
"alt" => "Fill Murray placeholder image."
],
"authored on" => "1652345293",
"authored by" => 'Janez Novak',
],
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>Proceduralni CMS - Agiledrop PHP-Masterclass</title>
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

    //slika
    foreach ($posts as $id => $post) {
        echo '<div class="col-sm-4">';
        if (!empty($post['image'])) {
            echo '<img src="' . $post['image']['url'] . '" alt="'.$post['image']['alt'].'">';
        }
        //naslov
        echo "<h1>{$post['title']}</h1>";
        //vsebina + ... na koncu
        $teaser = substr($post['content'], 0, 150). "...";
        echo "<p>{$teaser}</p>";
        //avtor datum formata dd. mm. yyyy
        $date = date('d.m.Y', $post['authored on']);
        echo "<p><small>{$date}</small>, {$post['authored by']}</p>";
        //link do članka
        echo "<p><a href=\"article.php?id={$id}\">Preberi več</a></p>";
        echo '</div>';
    }

?>

</div>
</div>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>
</body>
</html>