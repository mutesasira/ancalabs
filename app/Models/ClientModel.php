<?php

/**
 * Description of ClientModel
 *
 * @author stephocay
 */
namespace App\Models;
use CodeIgniter\Model;


class ClientModel extends Model {
    //put your code here
    protected $table = "client";
//    protected $allowedFields = ['title', 'description'];

public function __construct()
{
  parent::__construct();
  $this->load->database();
}

public function saveClient($val)
{
    $data['first_name'] = $val['first_name'];
    $data['last_name'] = $val['last_name'];
    $data['other_namea'] = $val['other_namea'];
    $data['sex'] = $val['sex'];
    $data['date_of_birth'] = $val['date_of_birth'];
    $data['nationality'] = $val['nationality'];
    $data['national_id'] = $val['national_id'];
    $data['email'] = $val['email'];
    $data['phone'] = $val['phone'];
    $data['alternative_phone'] = $val['alternative_phone'];
    $data['nok_full_name'] = $val['last_name'];
    $data['nok_phone'] = $val['nok_phone'];
    $data['nok_email'] = $val['nok_email'];
    
    $this->db->insert('client', $data);

    return 'Success';
}
    
}
