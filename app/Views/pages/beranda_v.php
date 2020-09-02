<?php if (!empty($news) && is_array($news)) : ?>

    <?php foreach ($news as $news_item) : ?>

        <h3><?= esc($news_item['title']); ?></h3>

        <div class="main">
            <?= esc($news_item['body']); ?>
        </div>
        <?php if ($slug == false) { ?>
            <p><a href="<?php echo base_url($method) . '/' . esc($news_item['slug']);  ?>">View article</a></p>
        <?php } ?>

    <?php endforeach; ?>

<?php else : ?>

    <h3>No News</h3>

    <p>Unable to find any news for you.</p>

<?php endif ?>
<?php if ($slug !== false) { ?>
    <p><a href="<?php echo base_url($method)  ?>">Back to Home</a></p>
<?php } ?>