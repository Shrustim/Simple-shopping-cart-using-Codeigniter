 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {


    public function __construct()
    {
        parent::__construct();
    }
    
    public function index()
    {
        $this->load->model('prod_model');
        $data['prod']=$this->prod_model->index(); 
        $this->load->view('prod',$data);
        
    }

    public function insert(){
             $productnm = $this->input->post('productnm');
             $price = $this->input->post('price');

            $this->load->model('prod_model');
            $this->prod_model->addprod($productnm,$price);

          
    }

     public function view($x="")
    {
        //echo "welcome to veiw page".$x;

            $this->load->model('prod_model');
            $dat['eprod']=$this->prod_model->editprod($x);
            $this->load->view('editprod',$dat);


    }

   public function edit()
    {        $id = $this->input->post('id');
       $productnm = $this->input->post('productnm');
            $price = $this->input->post('price');
 
            //echo $usernm."\t".$email."\t".$pass;
             $this->load->model('prod_model');
            $this->prod_model->updateprod($id,$productnm,$price);

    }

    public function delete($x="")
    {
        //echo "welcome to veiw page".$x;

        $this->load->model('prod_model');
            $this->prod_model->deleteprod($x);
            

    }

}
?>