<h2><?php echo $title; ?></h2>

<?php foreach ($posts as $post): ?>
<h3><?php echo $post['title']; ?></h3>
<small class="post-date"> Posted at: <?php echo $post['created_at']; ?></small><br>
    <?php echo $post['body']; ?>
    <p><a href="<?php echo base_url('/posts/' . $post['slug']); ?>" class="btn btn-outline-secondary">Read more</a></p>
<?php endforeach; ?>
