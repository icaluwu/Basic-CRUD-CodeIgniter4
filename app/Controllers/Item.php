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

  public function edit($id)
  {
    $model = new ItemModel;
    $getItem = $model->getItem($id);
    if(isset($getItem))
    {
      $data['item'] = $getItem;
      if(isset($getItem['item_name'])) {
        $data['title'] = 'Edit '.$getItem['item_name'];
      } else {
        $data['title'] = 'Edit Item'; // Default title if "item_name" key does not exist
      }

      echo view('header_view', $data);
      echo view('edit_view', $data);
      echo view('footer_view', $data);
    }else{
      echo '<script> alert("Item ID '.$id.' Not found"); window.location="'.base_url('item').'" </script>';
    }
  }

  public function update()
  {
    $model = new ItemModel;
    $id = $this->request->getPost('itemid');
    $data = array(
      'item_name'=> $this->request->getPost('name'),
      'qty'  => $this->request->getPost('qty'),
      'price'=> $this->request->getPost('price'),
      'cost'=> $this->request->getPost('cost')
    );
    $model->editItem($data,$id);
    echo '<script> alert("Item was succesfully changed"); window.location="'.base_url('item').'" </script>';
  }

  public function delete($id)
{
    $model = new ItemModel;
    $getItem = $model->getItem($id);

    if(!empty($getItem))
    {
        $model->deleteItem($id);
        echo '<script> alert("Delete success"); window.location="'.base_url('item').'"</script>';
    } 
    else{ 
        echo '<script> alert("Delete failed !, ID Item '.$id.' not found"); window.location="'.base_url('item').'"</script>';
    }
}

}
