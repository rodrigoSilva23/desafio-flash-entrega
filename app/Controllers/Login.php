<?php

namespace App\Controllers;
use App\Models\LoginModel;

class Login extends BaseController
{
    public function index()
    {
        $data =[];
        helper(['form']);
        if($this->request->getMethod() == 'post'){
            
         $rules = [
             'email'=>'required|valid_email',
             'password'=>'required|min_length[3]'
         ];  
         $errors =[
            'email'=>[
                'required'=>'Informe um e-mail',
                'valid_email'=>'e-mail invalido',
            ],
            'password'=>[
                'required'=>'Informe uma senha',
                'min_length'=>'senha invalida',
            ]
        ];
        if(!$this->validate( $rules,$errors))  {
            
            $data['validation'] = $this->validator;
        }else{
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');
            $model = new LoginModel();
            $dataUser = $model->getByEmail($email); 
          
            
            if(count($dataUser) > 0){
                $hashPassword = $dataUser['senha'];
                          
                if($hashPassword  === $password){
                    
                    session()->set('isLoggedIn',true);
                    
                    session()->set($dataUser);

                    return redirect()->to('/Home');
                
                           
                }else{
                        session()->setFlashdata('msg', 'Usuario ou Senha Incorretos');
                      
                     }   
            }else{
                session()->setFlashdata('msg', 'Usuario ou Senha Incorretos');
            }               
        }

    
        }
        echo view('templetes/header', $data);
        echo view('pages/login');
        echo view('templetes/footer');   
        
    }
    public function logout(){
        session()->destroy();
        return redirect()->to('/');
    }
}