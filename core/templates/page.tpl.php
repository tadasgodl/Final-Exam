<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php print $data['title'] ?></title>
    <?php foreach ($data['css'] as $path) : ?>
        <link rel="stylesheet" href="<?php print $path; ?>">
    <?php endforeach; ?>
    <?php foreach ($data['js'] as $path) : ?>
        <script src="<?php print $path; ?>" defer></script>
    <?php endforeach; ?>

</head>
<body>
<header>
    <?php print $data['header'] ?>
</header>
<main>
    <?php print $data['content']; ?>
</main>
<?php if ($data['footer'] !== false && isset($data['footer'])): ?>
    <footer>
        <?php print $data['footer']; ?>
    </footer>
<?php endif; ?>
</body>
</html>
