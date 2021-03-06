<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class ReportOrderModel extends CI_Model {
	public function __Construct(){
		parent::__construct();
	}

	function gettableReportOrder(){
		if ($this->input->get('bulan')!='') {
			$bulan = $this->input->get('bulan');
			$where_bulan = " and month(tbl_order.order_date)='".$bulan."'";
		} else {
			$where_bulan='';
		}
		
		$query=$this->db->query("SELECT tbl_payment.order_id, tbl_order.order_date, tbl_user.user_fullname, tbl_product.product_name, tbl_product.user_id, tbl_orderdetails.product_quantity, tbl_orderdetails.product_price, tbl_shipping.shipping_name, tbl_shipping.shipping_price, tbl_payment.amount 
	
	FROM tbl_payment 
	JOIN tbl_order ON tbl_payment.order_id = tbl_order.order_id   
    JOIN tbl_orderdetails ON tbl_order.order_id = tbl_orderdetails.order_id 
    JOIN tbl_product ON tbl_orderdetails.product_id = tbl_product.product_id 
    JOIN tbl_shipping ON tbl_order.shipping_id = tbl_shipping.shipping_id
    JOIN tbl_user ON tbl_order.user_id = tbl_user.user_id
    WHERE true ".$where_bulan);
		return $query->result();
	}
}