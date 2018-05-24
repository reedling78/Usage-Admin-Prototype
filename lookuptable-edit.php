<?php include 'header.php'; ?>


<div class="row page-header">
    <div><h2>Lookup Tables</h2></div>
</div>

<div class="row">
    <div class="col-3">
    
    <ul class="list-group">
        <li class="list-group-item active">Action</li>
        <li class="list-group-item">Source</li>
        <li class="list-group-item">Usage</li>
    </ul>
    </div>
    <div class="col-9">
    <div class="alert alert-success d-none" role="alert">
                    alert-danger alert-success d-none d-block
                    A simple success alert—check it out!
                </div>

    <form>
  <div class="form-group">
    <label for="exampleFormControlInput1">ID</label>
    <input class="form-control" type="text" placeholder="ID" readonly>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Description</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <a href="/lookuptable.php" class="btn btn-secondary">Cancel</a>
  <button type="submit" class="btn btn-primary">Save</button>
</form>
    </div>
</div>






<?php include 'footer.php'; ?>