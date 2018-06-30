<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Page extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->model("categorymodel","cm");
		$this->load->model("subcategorymodel","scm");
	}

        public function index(){
            $this->load->view('dashboard');
		}

		public function dashboard(){
			$this->load->view ('dashboard');
		}

		public function main_categories() {
			$this->load->view ('main_categories');
		}

		public function sub_categories() {
			$this->load->view ('sub_categories');
		}

		public function product() {
			$this->load->view ('product');
		}

		public function customer() {
			$this->load->view ('customer');
		}

		public function seller() {
			$this->load->view ('seller');
		}

	function savecategory(){
		$data=array(
			'name_category'=>$this->input->post('txtname_category'),
		);
		$this->db->insert('tbl_category', $data);
		redirect('page/main_categories');
	}

	function deletecategory($categoryid){
		$categoryid = $this->db->where('category_id', $categoryid);
		$this->db->delete('tbl_category');
		redirect('page/main_categories','refresh');
	}

	function listcategoryname(){
	$data['tbl_category']=$this->categorynamemodel->getcategorynamemodel();
	$this->load->view('page/sub_categories',$data);
 
    }
	
	function savesubcategory(){
		$data=array(
			'fcategory_id'=>$this->input->post('txt_fcategoryid'),
			'name_subcategory'=>$this->input->post('txtname_subcategory')

		);
		$this->db->insert('tbl_subcategory', $data);
		redirect('page/sub_categories');
	}

	function deletesubcategory($subcategoryid){
		$subcategoryid = $this->db->where('subcategory_id', $subcategoryid);
		$this->db->delete('tbl_subcategory');
		redirect('page/sub_categories','refresh');
	}







}
        
        