<h1 class="feedback-title"><?php print $data['title']; ?></h1>

<section class="table-section">
<?php if (isset($data['table'])): ?>
    <?php print $data['table']; ?>
<?php endif; ?>
</section>

<?php if (isset($data['forms']['create'])): ?>
    <?php print $data['forms']['create']; ?>
<?php endif; ?>
