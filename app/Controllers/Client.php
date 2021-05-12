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
        // if($this->request->getMethod()=='post'){
        //     $data = $this->request->getVar();

        //      print_r($data);
        // }
        return view('create-client');
    }

    public function save()
    {
        $data = array(
            'first_name' => $this->input->post('first_name'),
            'last_name' => $this->input->post('last_name'),
            'other_namea'  => $this->input->post('other_namea'),
            'sex'  => $this->input->post('sex'),
            'date_of_birth'  => $this->input->post('date_of_birth'),
            'nationality'  => $this->input->post('nationality'),
            'national_id'  => $this->input->post('national_id'),
            'email'  => $this->input->post('email'),
            'phone'  => $this->input->post('phone'),
            'alternative_phone'  => $this->input->post('alternative_phone'),
            'passport_number'  => $this->input->post('passport_number'),
            'expiry_date'  => $this->input->post('expiry_date'),
            'nok_full_name'  => $this->input->post('nok_full_name'),
            'nok_phone'  => $this->input->post('nok_phone'),
            'nok_email'  => $this->input->post('nok_email'),
        );
        echo($data);
        // $this->ClientModel->insert($data);

           // echo("ok for now");
        // redirect("clients/create-client");
    }







    //CRUD methods

    public function edit($id = null)
    {
        $model = new ClientModel();
        $data['client'] = $model->find($id);
        return view('edit-client', $data);
    }



    // public function save() {
    //     helper(['form', 'url']);
    //     $model = new ClientModel();
    //     $id = $this->request->getVar('id');
    //     #TODO: Add other attributes for client
    //     $data = [
    //         'first_name' => $this->request->getVar('first_name'),
    //         'last_name' => $this->request->getVar('first_name'),
    //     ];

    //     $insert = $model->insert($data);

    //     return redirect()->to(base_url('clients'));
    // }

    // public function update() {
    //     helper(['form', 'url']);

    //     $model = new ClientModel();
    //     $id = $this->request->getVar('id');
    //     #TODO: Add other attributes for client
    //     $data = [
    //         'first_name' => $this->request->getVar('first_name'),
    //         'last_name' => $this->request->getVar('first_name'),
    //     ];

    //     $update = $model->update($id, $data);

    // }

    public function delete($id = null)
    {
        $model = new ClientModel();
        $data[] = $model->where('id', $id)->delete();

        return redirect()->to(base_url('clients'));
    }
}
