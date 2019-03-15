 <?php
class Prod_model extends CI_model{

   public function __construct()
     {
      parent::__construct();
     }
       
     public function index(){
      //select * from tbluser
      $q=$this->db->get('product');
      return $q->result_array();
     }
 

     public function addprod($productnm,$price)
     {
      $sql="INSERT INTO product (product_name,price) VALUES('$productnm','$price')";
       $this->db->query($sql);

       $this->load->model('prod_model');
       $data['prod']=$this->prod_model->index();
    
        $this->load->view("prod",$data);
    
     }

      public function editprod($x)
     {
            $q=$this->db->where("id",$x)
                 ->get("product");
          return $q->result_array();
     }
      
       public function updateprod($id,$productnm,$price)
    {
      $sql="UPDATE product SET product_name='$productnm',price='$price' where id='$id' ";
       $this->db->query($sql);

        $this->load->model('prod_model');
       $data['prod']=$this->prod_model->index();
    
        $this->load->view("prod",$data);
    }


    public function deleteprod($x)
    {
        $sql="DELETE FROM product  where id='$x' ";
       $this->db->query($sql);

        $this->load->model('prod_model');
       $data['prod']=$this->prod_model->index();
    
        $this->load->view("prod",$data);
    }

  }   
?>






