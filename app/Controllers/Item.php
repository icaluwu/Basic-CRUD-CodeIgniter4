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

  public function add()
  {
    $data['title']  = 'Add Item';
    echo view('header_view', $data);
    echo view('add_view', $data);
    echo view('footer_view', $data);
  }

  public function addit()
  {
    $model = new ItemModel;
    $data = array(
      'item_name' => $this->request->getPost('name'),
      'item_desc'  => $this->request->getPost('desc'),
      'qty'  => $this->request->getPost('qty'),
      'price'  => $this->request->getPost('price'),
      'cost'  => $this->request->getPost('cost')
    );

    $model->saveItem($data);
    echo '<script> alert("added"); window.location="'.base_url('item').'"</script>';
  }
}
