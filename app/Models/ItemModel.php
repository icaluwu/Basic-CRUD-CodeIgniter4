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
    }else{
      return $this->getWhere(['item_id' => $id]);
    }
  }
}
