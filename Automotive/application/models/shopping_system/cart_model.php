<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Cart_model extends CI_Model {

	public function __construct()
	{
		//$this->load->database();
	}

	function update_cart($rowid, $qty, $price, $amount) {
 		$data = array(
			'rowid'   => $rowid,
			'qty'     => $qty,
			'price'   => $price,
			'amount'   => $amount
		);

		$this->cart->update($data);
	}
	
	
	

	
	public function get_all_products_by_category_name($cat_url_name =
													  null) {
		if ($cat_url_name) {
			$this->db->where('cat_url_name', $cat_url_name);
			$cat_query = $this->db->get('categories');
			foreach ($cat_query->result() as $row) {
				$category_id = $row->cat_id;
			}
			$this->db->where('category_id');

		}
		$query = $this->db->get('products');
		return $query;
	}

	public function get_all_categories($cat_url_name = null) {
		if ($cat_url_name) {
			$this->db->where('cat_url_name', $cat_url_name);
		}
		$query = $this->db->get('categories');
		return $query;
	}


	public function get_categories()
	{
		$query = $this->db->get('categories');
		$return = array();
		foreach ($query->result() as $category)
		{
			$return[$category->cat_id] = $category;
		}
		return $return;
	}
}