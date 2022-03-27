<?php

namespace App\Controllers;
use App\Models\UsersModel;

class Users extends BaseController
{
 
    public function index()
    {   
      echo view('templetes/header');
      echo view('templetes/menu');
      echo view('pages/register');     
      echo view('templetes/footer');
        
    }
    public function registerCourier(){
      helper(["form"]);
      $dataForm =[
        'name'        => $this->request->getPost('name'),
        'email'       => $this->request->getPost('email'),
        'birth_date'  => $this->request->getPost('dataNas'),
        'cep'         => $this->request->getPost('cep'),
        'rua'         => $this->request->getPost('rua'),
        'bairro'      => $this->request->getPost('bairro'),
        'cidade'      => $this->request->getPost('cidade'),
        'uf'          => $this->request->getPost('uf'),
        'complemento' => $this->request->getPost('complemento'),
      
        
      ];
     
       $register = new UsersModel();
       $register->registerCourier($dataForm);
       return redirect()->to('/Home');
  }
    public function editPage($id){
      $edit = new UsersModel();
    $dadosCourier = $edit->getByCourier($id);
    session()->set('dadosCourier',$dadosCourier);
    echo view('templetes/header');
      echo view('templetes/menu');
      echo view('pages/edit');     
      echo view('templetes/footer');
  }
  public function updateCourier($id){
    helper(["form"]);
      $dataForm =[
        'name'        => $this->request->getPost('name'),
        'email'       => $this->request->getPost('email'),
        'birth_date'  => $this->request->getPost('dataNas'),
        'cep'         => $this->request->getPost('cep'),
        'rua'         => $this->request->getPost('rua'),
        'bairro'      => $this->request->getPost('bairro'),
        'cidade'      => $this->request->getPost('cidade'),
        'uf'          => $this->request->getPost('uf'),
        'complemento' => $this->request->getPost('complemento'),
      ];
    
       $editUpdate = new UsersModel();
       $editUpdate->updateCourier($id,$dataForm);
       return redirect()->to('/Home');
  }
  public function deleteCourier($id){
  
    $delete = new UsersModel();
    $delete->deleteCourier($id);
    return redirect()->to('/Home');
  }
}
