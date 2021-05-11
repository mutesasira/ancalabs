<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Controllers;

use CodeIgniter\Controller;

/**
 * Description of Client
 *
 * @author mutesasira
 */
class MainController extends Controller {
    
    public function lab() {
        return view('lab-booking');
    }

    public function hotel() {
        return view('hotel-booking');
    }
    public function travel(){
        return view('travel-details');
    }
   
}
