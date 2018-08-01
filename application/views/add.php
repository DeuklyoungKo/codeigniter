
<form action="/index.php/topic/add" method="post" class="col-sm-10">
  <div class="form-group">
    <?php echo validation_errors(); ?>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="title"  placeholder="제목">
  </div>
  <div class="form-group">
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="15" name="description" placeholder="본문"></textarea>
  </div>
  <button type="submit" class="btn btn-success">추가</button>
</form>
