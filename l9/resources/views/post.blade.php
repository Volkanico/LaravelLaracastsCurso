<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>
</head>
<link rel="stylesheet" href="/css/posts.css">

<body>

    <article>
        <h1><?= $post->title; ?></h1>

        <div>
        <?= $post->body; ?>
        </div>
    </article>
    
    <a href="/posts">Go back</a>
    


</body>

</html>