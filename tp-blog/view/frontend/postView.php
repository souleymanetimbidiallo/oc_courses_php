<?php $title = 'Commentaires'; ?>

<?php ob_start(); ?>
<p><a href="index.php">Retour à la liste des billets</a></p>

<div class="news">
    <h3>
        <?= htmlspecialchars($post['title']); ?>
        <em>le <?= $post['creation_date_fr']; ?></em>
    </h3>
    
    <p><?= nl2br(htmlspecialchars($post['content']));?></p>
</div>

<h2>Commentaires</h2>
<?php
    while ($comment = $comments->fetch())
    {
?>
    <p>
        <strong><?= htmlspecialchars($comment['author']); ?></strong> 
        le <?= $comment['comment_date_fr']; ?>
    </p>
    <p><?= nl2br(htmlspecialchars($comment['comment'])); ?></p>
<?php
    } 
?>

<form action="index.php?action=addComment&amp;id=<?= $post['id'] ?>" method="post">
    <fieldset>
        <div>
            <label for="author">Auteur</label><br />
            <input type="text" id="author" name="author" />
        </div>
        <div>
            <label for="comment">Commentaire</label><br />
            <textarea id="comment" name="comment"></textarea>
        </div>
        <div>
            <input type="submit" />
    </div>
    </fieldset>
</form>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>