 <?php
class Trac_model extends CI_model{

 public function __construct()
     {
      parent::__construct();
     }
       
     public function index(){
      //select * from tbluser
      $q=$this->db->get('product');
      return $q->result_array();
     }
 
     public function get($id)
     {
     	 //$q=$this->db->where("id",$id)
           //      ->get("product");
          //return $q->result();
     	$results = $this->db->get_where('product',array('id' => $id))->result();
        $result=$results[0];
        return $result;

     }

     public function order_mo($prodnmqty,$totalprice)
     {
      $sql="INSERT INTO   transaction_tb (prodnmqty,totalprice) VALUES('$prodnmqty','$totalprice')";
       $this->db->query($sql);
       redirect('transaction');  
     }
     
     public function view_orders()
     {
      $q=$this->db->get('transaction_tb');
      return $q->result_array();
     }
}
?> 