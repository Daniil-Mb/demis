<?php
require_once './config/connect.php';

class Model_Feedback extends Model
{
    public function get_data($data)
    {
        return [
            'name' => $data['name'],
            'address' => $data['address'],
            'number' => $data['number'],
            'email' => $data['email']
        ];
    }

    public function save_data($data)
    {
        require_once './config/connect.php';
        mysqli_query($this->connect, "INSERT INTO feedback (id, name, address, number, email) VALUES (NULL, '". $data['name']. "' ,'".$data['address'] . "',  '". $data['number'] ."', '".  $data['email'] . "')");    }
}

?>