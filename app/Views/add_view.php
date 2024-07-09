<div class="container-fluid p-5">
  <a href="<?= base_url('item');?>" class="btn btn-secondary mb-2">Kembali Kembali</a>
  <div class="card">
    <div class="card-header bg-info text-white">
      <h4 class="card-title">Add Item</h4>
    </div>
    <div class="card-body">

      <form method="post" action="<?= base_url('item/addit');?>">
        <div class="form-group">
          <label for="">Item Name</label>
          <input type="text" name="name" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="">Item Desc</label>
          <input type="text" name="desc" class="form-control">
        </div>
        <div class="form-group">
          <label for="">Qty</label>
          <input type="number" name="qty" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="">Price</label>
          <input type="number" name="price" class="form-control"
          required>
        </div>
        <div class="form-group">
          <label for="">Cost</label>
          <input type="number" name="cost" class="form-control"
          required>
        </div>
        <button class="btn btn-success">Add</button>
      </form>

    </div>
  </div>
</div>
