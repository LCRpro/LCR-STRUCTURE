<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des articles</title>
</head>
<body>
    <h1>Liste des articles</h1>
    <ul>
        <?php foreach ($articles as $article): ?>
            <li>
                <h2><?php echo $article['title']; ?></h2>
                <p><?php echo $article['content']; ?></p>
                <p>Catégorie : <?php echo $article['category']; ?></p>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
