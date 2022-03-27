<?php

namespace App\Controllers;
use App\Models\UsersModel;

class Home extends BaseController
{
    
    public function index()
    {   
        $model = new UsersModel();
        $dataCouriers = $model->getByCouriersAll();
        session()->set('dataCouriers',$dataCouriers);
        echo view('templetes/header');
        echo view('templetes/menu');
        echo view('pages/home');
        echo view('templetes/footer');
        
    }
}
