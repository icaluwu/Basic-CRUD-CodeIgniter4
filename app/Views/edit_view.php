<div class="container-fluid p-5">
  <a href="<?= base_url('item');?>" class="btn btn-secondary mb-2">Back</a>
  <div class="card">
    <div class="card-header bg-info text-white">
      <h4 class="card-title">Edit item : <?= $item['item_name'];?></h4>
    </div>
    <div class="card-body">

      <form method="post" action="<?= base_url('item/update');?>">

        <div class="form-group">
          <label for="">Item Name</label>
          <input type="text" value="<?= $item['item_name'];?>"
          name="name" required class="form-control">
        </div>

        <div class="form-group">
          <label for="">Qty</label>
          <input type="number" value="<?= $item['qty'];?>" name="qty"
          required class="form-control">
        </div>

        <div class="form-group">
          <label for="">Harga Beli</label>
          <input type="number" value="<?= $item['price'];?>"
          name="price" required class="form-control">
        </div>

        <div class="form-group">
          <label for="">Harga Jual</label>
          <input type="number" value="<?= $item['cost'];?>" name="cost" required class="form-control">
        </div>

        <input type="hidden" value="<?= $item['itemid'];?>"
        name="id_item">
        <button class="btn btn-success">Edit Data</button>

      </form>

    </div>
  </div>
</div>