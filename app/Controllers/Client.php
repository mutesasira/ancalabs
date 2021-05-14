<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ClientModel;

/**
 * Description of Client
 *
 * @author stephocay
 */
class Client extends Controller
{
    private $load;
    //Views HERE
    public function index()
    {
        $model = new ClientModel();
        $data = $model->orderBy('id', 'DESC')->findAll();
    }

    public function create()
    {
        
        return view('create-client');
    }

    
	public function saveData()
	{
		helper(['form','url']);
        $model = new ClientModel();
        
            $data = [
                'first_name' => $this->request->getVar('first_name'),
                'last_name' => $this->request->getVar('last_name'),
                'other_namea'  => $this->request->getVar('other_namea'),
                'sex'  => $this->request->getVar('sex'),
                'date_of_birth'  => $this->request->getVar('date_of_birth'),
                'nationality'  => $this->request->getVar('nationality'),
                'national_id'  => $this->request->getVar('national_id'),
                'email'  => $this->request->getVar('email'),
                'phone'  => $this->request->getVar('phone'),
                'alternative_phone'  => $this->request->getVar('alternative_phone'),
                'passport_number'  => $this->request->getVar('passport_number'),
                'expiry_date'  => $this->request->getVar('expiry_date'),
                'nok_full_name'  => $this->request->getVar('nok_full_name'),
                'nok_phone'  => $this->request->getVar('nok_phone'),
                'nok_email'  => $this->request->getVar('nok_email'),
            ];
            //print_r($data);
        $insert = $model->insert($data);
        print_r($insert);
	}
	



    //CRUD methods

    public function edit($id = null)
    {
        $model = new ClientModel();
        $data['client'] = $model->find($id);
        return view('edit-client', $data);
    }



    
    public function delete($id = null)
    {
        $model = new ClientModel();
        $data[] = $model->where('id', $id)->delete();

        return redirect()->to(base_url('clients'));
    }
}
