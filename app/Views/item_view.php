<div class="container pt-5">
  <a href="<?= base_url('item/add');?>" class="btn btn-success mb-2">Add Item</a>
  <div class="card">
    <div class="card-header bg-info text-white">
      <h4 class="card-title">Item Data</h4>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>No.</th>
              <th>Item</th>
              <th>Qty</th>
              <th>Price</th>
              <th>Cost</th>
              <th>Edit</th>
            </tr>
          </thead>
          <tbody>
            <?php $no=1; foreach($getItem as $isi){?>
              <tr>
                <td><?= $no;?></td>
                <td><?= $isi['item_name'];?></td>
                <td><?= $isi['qty'];?></td>
                <td>Rp<?= number_format($isi['price']);?>,-
                </td>
                <td>Rp<?= number_format($isi['cost']);?>,-
                </td>
                <td>
                  <a href="<?= base_url('item/edit/'. $isi['item_id']);?>" class="btn btn-success"> Edit</a>
                <a href="<?= base_url('item/delete/'. $isi['item_id']);?>" onclick="javascript:return confirm('Do you want to delete ?')" class="btn btn-danger">
                Delete</a>
              </td>
            </tr>
            <?php $no++;}?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
