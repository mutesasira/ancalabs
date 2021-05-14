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
    protected $allowedFields = ['first_name', 'last_name', 'other_namea', 'sex', 'date_of_birth', 'nationality', 'national_id', 'email', 'phone', 'alternative_phone', 'nok_full_name', 'nok_phone', 'nok_email' ];



}
