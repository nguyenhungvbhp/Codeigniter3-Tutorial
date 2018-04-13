<?php

class Blog_model extends CI_Model {

    public function get_data(){
        $data['title'] = "Codeigniter 3";
        $data['body'] = "Codeigniter tuyệt vời quá";

        return $data;
    }


}

?>