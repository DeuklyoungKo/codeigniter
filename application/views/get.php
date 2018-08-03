<div class="col-sm-10">
  <article>
    <h1><?=$topic->title?></h1>
    <div>
      <div><?=kdate($topic->created)?></div>
      <?=auto_link($topic->description)?>
    </div>
  </article>
  <div>
      <a href="/index.php/topic/add" class="btn btn-primary">추가</a>
  </div>
</div>
