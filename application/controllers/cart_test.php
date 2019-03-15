<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart_test extends CI_Controller {

  public function add()
   {
     echo "hello";
     
      $data=array(
          'id'=>'42',
          'name'=>'Biscuits',
          'qty'=>1,
          'price'=>20
      	);
      $this->cart->insert($data);
      echo "add() called";

    }
   public function show()
    {
    	$cart=$this->cart->contents();
        echo "<pre>";
        print_r($cart);
    }

    public function add2()
   {
     echo "hello";
     
      $data=array(
          'id'=>'32',
          'name'=>'Cokkies',
          'qty'=>2,
          'price'=>30
      	);
      $this->cart->insert($data);
      echo "add2() called";

    }

   public function update(){
   	$data=array(
        'rowid'=>'a1d0c6e83f027327d8461063f4ac58a6',
        'qty'=>'1'
   		);
   	$this->cart->update($data);

   }
   public function total()
   {
   	 echo $this->cart->total();
   }
   
   public function remove()
   {
   	$data=array(
        'rowid'=>'a1d0c6e83f027327d8461063f4ac58a6',
        'qty'=>'0'
   		);
   	$this->cart->update($data);
   	echo "remove() called";


   }

   public function destroy()
   {
   	$this->cart->destroy();
   	echo "destroy() called";
   }

}
?>