<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use user;
use CodeIgniter\API\ResponseTrait;

class user_controller extends Controller {
    use ResponseTrait;
    
    public function index()
    {
        $model = new user();
        $influencer = $model->findAll();
        return $this->respond($user, 200, 'All Users Found');
    }
    public function show($id) {
        $model = new user();
        $user = $model->find($id);
        return $this->respond($user, 200, 'This User found');
    }
}