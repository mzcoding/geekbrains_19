<?php foreach ($news as $newsItem): ?>
 <hr />
<br />
<div>
    <h2><a href="<?=route('news.show', ['id' => $newsItem['id']])?>"><?=$newsItem['title']?></a></h2>
    <h4><?=$newsItem['author']?> (<?=$newsItem['created_at']?>)</h4>
    <p><?=$newsItem['description']?></p>
</div>
<?php endforeach; ?>

