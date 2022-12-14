<?php

class Blog_model extends CI_Model {
    private $_table = "blogs";

    public $title;
    public $content;
    public $image;

    function rules()
    {
        return [
            ['field' => 'title',
            'label' => 'title',
            'rules' => 'required'],

            ['field' => 'content',
            'label' => 'content',
            'rules' => 'required'],
            
            // ['field' => 'image',
            // 'label' => 'image',
            // 'rules' => 'required'],
         

           
        ];
    }

    function getData(){
        return $this->db->get('blogs');
    }

    public function delete($id)
    {
        return $this->db->delete('blogs', array("id" => $id));
    }

    public function save($blogs = null)
    {
        $post = $this->input->post();
        $this->title = $post["title"];
        $this->content = $post["content"];
        $this->image = $blogs;
        return $this->db->insert($this->_table, $this);
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id" => $id])->row();
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