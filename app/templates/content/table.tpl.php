<table class="table">
    <tr>
        <?php foreach ($data['headers'] as $header): ?>
            <th><?php print $header; ?></th>
        <?php endforeach; ?>
    </tr>
</table>

<?php if (isset($data['forms']['create'])): ?>
    <div id="update-modal" class="modal">
        <div class="wrapper">
            <span class="close">&times;</span>
            <?php print $data['forms']['create']; ?>
        </div>
    </div>
<?php endif; ?>