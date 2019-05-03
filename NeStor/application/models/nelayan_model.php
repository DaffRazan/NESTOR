<?php
    
    class nelayan_model extends CI_Model {

        public function create_user($data){
            $this->db->insert('users',$data);
        }

    }




?>