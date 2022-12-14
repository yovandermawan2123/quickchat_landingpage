<?php

class Customer_model extends CI_Model {
    private $_table = "customers";

    public $name;
    public $email;
    public $phone_number;

    function rules()
    {
        return [
            ['field' => 'name',
            'label' => 'name',
            'rules' => 'required'],

            ['field' => 'email',
            'label' => 'email',
            'rules' => 'required'],
            
            ['field' => 'phone_number',
            'label' => 'phone_number',
            'rules' => 'required'],
         

           
        ];
    }

    function getData(){
        return $this->db->get('customers');
    }

    function countData(){
        return $this->db->get('customers')->num_rows();
    }

    public function delete($id)
    {
        return $this->db->delete('customers', array("id" => $id));
    }

    public function save()
    {
        $post = $this->input->post();
        $this->name = $post["name"];
        $this->email = $post["email"];
        $this->phone_number = $post["phone_number"];
        return $this->db->insert($this->_table, $this);
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id" => $id])->row();
    }

    public function update($id)
    {
        $post = $this->input->post();
        $this->name = $post["name"];
        $this->email = $post["email"];
        $this->phone_number = $post["phone_number"];
        return $this->db->update($this->_table, $this, array('id' => $id));
    }
}