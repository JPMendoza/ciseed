<?php

class Student extends CI_Model
{

    public function __construct ()
    {
        parent::__construct();
    }

    public function get_students() 
    {

        $query = $this->db->get('Student');

        return $query->result();
    }
    public function add_student($user_name, $password) 
    {
        $this->user_name = $user_name;
        $this->password = $password;

        if ($this->db->insert('Student',$this))
            return true;
        else
            return false;
    }
}

?>