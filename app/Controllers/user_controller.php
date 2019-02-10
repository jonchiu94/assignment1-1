<?php
class user_controller extends CI_Controller {
    public function index()
    {
        show();
    }
    public function show() {
        $this ->load->model('user');
    }
}