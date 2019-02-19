<h2><?php echo $title; ?></h2>

<?php foreach ($posts as $post): ?>
<h3><?php echo $post['title']; ?></h3>
    <?php echo $post['body']; ?>
<small> Posted at: <?php echo $post['created_at']; ?></small>
<?php endforeach; ?>
