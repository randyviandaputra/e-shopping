<div class="container">
  <div class="row">
    <div class="col-md-12 content">
      <h3 class="content-head"><span class="glyphicon glyphicon-plus"></span> Add Category Product</h3>
      <div class="col-md-10">
        <form class="form-horizontal" method="post" action="?saveCategory" enctype="multipart/form-data">
          <div class="form-group">
            <label for="category_name" class="col-sm-2 control-label">Category Name</label>
            <div class="col-sm-10">
              <input type="text" name="category_name" class="form-control" id="category_name" placeholder="Category Name">
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" name="addCategory" class="btn btn-primary" value="addCategory">Save</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>