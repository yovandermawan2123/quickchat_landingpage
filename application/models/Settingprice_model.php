<?php

class Settingprice_model extends CI_Model {
    private $_table = "setting_prices";

    public $plan_name;
    public $price;
    public $discount;

    function rules()
    {
        return [
            ['field' => 'plan_name',
            'label' => 'plan_name',
            'rules' => 'required'],

            ['field' => 'price',
            'label' => 'price',
            'rules' => 'required'],
            
            ['field' => 'discount',
            'label' => 'discount'],
         

           
        ];
    }

    function getData(){
        return $this->db->get('setting_prices');
    }
  

    public function delete($id)
    {
        return $this->db->delete('setting_prices', array("id" => $id));
    }

    public function save()
    {
        $post = $this->input->post();
        $this->plan_name = $post["plan_name"];
        $this->price = $post["price"];
        $this->discount = $post["discount"];
        return $this->db->insert($this->_table, $this);
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id" => $id])->row();
    }

    public function update($id)
    {
        $post = $this->input->post();
        $this->plan_name = $post["plan_name"];
        $this->price = $post["price"];
        $this->discount = $post["discount"];
        return $this->db->update($this->_table, $this, array('id' => $id));
    }

    
}