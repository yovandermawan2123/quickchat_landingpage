<?php

class Information_model extends CI_Model {
    private $_table = "information";

    public $title;
    public $description;
    public $type;

    function rules()
    {
        return [
            ['field' => 'title',
            'label' => 'title',
            'rules' => 'required'],

            ['field' => 'description',
            'label' => 'description',
            'rules' => 'required'],
            
            ['field' => 'type',
            'label' => 'type',
            'rules' => 'required'],

           
        ];
    }

    function getData(){
        return $this->db->get('information');
    }

    public function delete($id)
    {
        return $this->db->delete('information', array("id" => $id));
    }

    public function save()
    {
        $post = $this->input->post();
        $this->title = $post["title"];
        $this->description = $post["description"];
        $this->type = $post["type"];
        return $this->db->insert($this->_table, $this);
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id" => $id])->row();
    }
    public function getByType($type)
    {
        return $this->db->get_where($this->_table, ["type" => $type])->row();
    }

    public function update($id)
    {
        $post = $this->input->post();
        $this->title = $post["title"];
        $this->description = $post["description"];
        $this->type = $post["type"];
        return $this->db->update($this->_table, $this, array('id' => $id));
    }
}