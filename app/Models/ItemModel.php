<?php
namespace App\Models;

use CodeIgniter\Model;

class ItemModel extends Model
{
  protected $table = 'item';
  protected $primaryKey = 'itemid';
  protected $allowedFields = ['item_name', 'item_desc', 'qty', 'price', 'cost'];

  public function getItem($id = false)
  {
    if($id === false)
    {
      return $this->findAll();
    } else {
      return $this->where(['itemid' => $id])->first();
    }
  }

  public function saveItem($data)
  {
    $this->insert($data);
  }

  public function editItem($data, $id)
{
  $this->set($data);
  $this->where('itemid', $id);
  $this->update('item');
}

}