<div class="heading-bg"><h1 class="heading"><?php print $data['heading'] ?></h1></div>

<article class="ads-container">
    <div class="width-limit">
    <?php foreach ($data['ads'] as $ad): ?>
        <section class="advertisement">
            <div class="ad-image-container">
                <img src="<?php print $ad['image']; ?>" alt="image" class="ad-image">
            </div>
            <div class="ad-text-container">
            <p class="title"><?php print $ad['title']; ?></p>
            <p class="text"><?php print $ad['text']; ?></p>
            </div>
            <p class="ad-readmore">Read More</p>
        </section>
    <?php endforeach; ?>
    </div>
</article>

<?php foreach ($data['maps'] as $map): ?>
    <iframe src="<?php print $map['location']; ?>" class="map"></iframe>
<?php endforeach; ?>
