<?php
//Controller for Items
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\ItemModel;

class Item extends Controller
{
  public function index()
  {
    $model = new ItemModel;
    $data['title']  = 'Item Data';
    $data['getItem'] = $model->getItem();
    echo view('header_view', $data);
    echo view('item_view', $data);
    echo view('footer_view', $data);
  }
}
