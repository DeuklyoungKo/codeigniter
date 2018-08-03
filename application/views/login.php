<div class="modal fade show" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="display: block;">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Login</h5>
      </div>
      <form action="/index.php/auth/authentication" method="post">
        <div class="modal-body">
            <div class="form-group">
              <label for="id" class="col-form-label">ID</label>
              <input type="text" class="form-control" id="id" name="id" placeholder="Email">
            </div>
            <div class="form-group">
              <label for="="" class="col-form-label">Password</label>
              <input type="password" class="form-control" id="password" placeholder="password" name="password"></textarea>
            </div>
        </div>
        <div class="modal-footer">
          <input type="submit" class="btn btn-primary" value="Login">
        </div>
      </form>
    </div>
  </div>
</div>
