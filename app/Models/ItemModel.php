<?php
//Model for Item
namespace App\Models;
use CodeIgniter\Model;
class ItemModel extends Model
{
  protected $table = 'item';

  public function getItem($id = false)
  {
    if($id === false){
      return $this->findAll();
    } else {
      return $this->where(['item_id' => $id])->findAll();
    }
  }

  public function saveItem($data)
  {
    $builder = $this->db->table($this->table);
    return $builder->insert($data);
  }

  public function editItem($data,$id)
  {
    $builder = $this->db->table($this->table);
    $builder->where('item_id', $id);
    return $builder->update($data);
  }

}
