 

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaction extends CI_Controller {


    public function __construct()
    {
        parent::__construct();
    }

   public function index()
    {
        $this->load->model('trac_model');
        $data['disprod']=$this->trac_model->index(); 
       // echo "<pre>";
        //print_r($data['disprod']);
        $this->load->view('displayproducts',$data);
    }
   public function add()
   {
     //echo "add() called";
       $id=$this->input->post('id');
       $this->load->model('trac_model');
       $products=$this->trac_model->get($id);
      //echo "<pre>";
      //print_r($products);
      //echo $products->price;
       $insert=array(
          'id'=>$id,
          'qty'=>1,
          'price'=>$products->price,
         'name'=>$products->product_name 
          );
      $this->cart->insert($insert);
      $this->load->view('displayproducts',$data);
      redirect('transaction');

   }

   public function remove($rowid)
   {
       $this->cart->update(array(
        'rowid' => $rowid,
        'qty' => 0
        ));
  redirect('transaction');       
   }
  
  public function order()
  {
    echo "order() called";
    $prodnmqty=$this->input->post('prodnmqty');
    $totalprice=$this->input->post('totalprice');
    echo $prodnmqty;
       $this->load->model('trac_model');
       $this->trac_model->order_mo($prodnmqty,$totalprice);
 
  }

 public function vieworders()
 {  $this->load->model('trac_model');
    $dataa['orders']=$this->trac_model->view_orders(); 
       //echo "<pre>";
       //print_r($dataa['orders']);
       $this->load->view('view_orders',$dataa);
 }

}
 

?>    