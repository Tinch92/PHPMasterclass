<?php
function databaseConnection()
{
    $user = 'root'; //root;
    $password = ''; //""
    $db = 'tecaj'; //ime baze
    $host = 'localhost:3306'; //localhost;
    $con = "mysql:host=$host;dbname=$db";
    $pdo = new PDO($con, $user, $password);
    return $pdo;
}

// Urejanje rezultatov v bazi tako, da je struktura postov ista kot je bila pri statičnem array-ju.
function structurePostsArray($postsFromDb)
{
    $structurePosts = [];
    foreach ($postsFromDb as $post) {
        $structuredPosts[$post['ID']] = [
            'title' => $post['title'],
            'content' => $post['content'],
            'image' => [
                'url' => $post['url'],
                'alt' => $post['alt'],
            ],
            'authored by' => $post['name'] . ' ' . $post['surname'],
            'authored on' => $post['created'],
        ];
    }
    return $structuredPosts;
}

// Pridobivanje vseh podatko o vseh postih.
function allPosts()
{
    $pdo = databaseConnection();
    $structuredPosts = FALSE;
    $query = 'SELECT * FROM posts
    LEFT JOIN users ON users.id = posts.author
    LEFT JOIN image ON image.id = posts.image';
    $statement = $pdo->query($query);
    $posts = $statement->fetchAll(PDO::FETCH_ASSOC);
    if ($posts) {
        $structuredPosts = structurePostsArray($posts);
    }
    return $structuredPosts;
}

function getPost($id)
{
    $pdo = databaseConnection();
    $post = FALSE;
    $sql = "SELECT p.id, p.title, p.content, p.created, u.name, u.surname, i.alt, i.url, i.id as fid FROM posts p " .
        "LEFT JOIN users u ON u.id = p.author " .
        "LEFT JOIN image i ON i.id = p.image " .
        "WHERE p.id = :id";

    $query = $pdo->prepare($sql);
    $query->execute(array(':id' => $id));
    $posts = $query->fetchAll(PDO::FETCH_ASSOC);
    if ($posts) {
        $post = structuredPost($posts);
    }
    return $post;
}


function structuredPost(array $posts)
{
    $structuredPost = [];
    foreach ($posts as $post) {
        $structuredPost = [
            'id' => $post['id'],
            'title' => $post['title'],
            'content' => $post['content'],
            'authored by' => $post['name'] . ' ' . $post['surname'],
            'authored on' => $post['created'],
            'image' => [],
        ];

        if ($post['url']) {
            $structuredPost['image'] = [
                'url' => $post['url'],
                'alt' => $post['alt'],
                'fid' => $post['fid'],
            ];
        }
    }
    return $structuredPost;
}


