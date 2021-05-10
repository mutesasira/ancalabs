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
class Client extends Controller {

    //Views HERE
    public function index() {
        $model = new ClientModel();
        $data = $model->orderBy('id', 'DESC')->findAll();
    }
    
    public function create() {
        return view('create-client');
    }
    
    //CRUD methods

    public function edit($id = null) {
        $model = new ClientModel();
        $data['client'] = $model->find($id);
        return view('edit-client', $data);
    }

    

    public function save() {
        helper(['form', 'url']);
        $model = new ClientModel();
        $id = $this->request->getVar('id');
        #TODO: Add other attributes for client
        $data = [
            'first_name' => $this->request->getVar('first_name'),
            'last_name' => $this->request->getVar('first_name'),
        ];

        $insert = $model->insert($data);

        return redirect()->to(base_url('clients'));
    }

    public function update() {
        helper(['form', 'url']);
        
        $model = new ClientModel();
        $id = $this->request->getVar('id');
        #TODO: Add other attributes for client
        $data = [
            'first_name' => $this->request->getVar('first_name'),
            'last_name' => $this->request->getVar('first_name'),
        ];
        
        $update = $model->update($id, $data);
        
    }

    public function delete($id = null) {
        $model = new ClientModel();
        $data[] = $model->where('id', $id)->delete();

        return redirect()->to(base_url('clients'));
    }

}
