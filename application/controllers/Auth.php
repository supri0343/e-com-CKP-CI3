<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Auth extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_User', 'm_users'); 
    }
    public function index()
    {
        $this->load->view('auth/login');
    }

    public function login()
    {
        $data1 = $this->input->post();
        $username = $data1['username'];
		$password = $data1['password'];
       
            $get_user = $this->m_users->list($username)->row();
                if($get_user){
                    if($get_user->password == $password){
                        $role =   $get_user->role;

                        $session = [
                            'username' => $get_user->username,
                            'password' => $get_user->password,
                            'role' => $role,
                            'jam_masuk' => date('H:i:s'),
                            'status' => 'login'
                        ];

                        $this->session->set_userdata($session);

                        redirect('dashboard');
                    }else{
                        $this->session->set_flashdata('error', 'Password Salah!');
                      
                    }
            }else {
				$this->session->set_flashdata('error', 'Username Salah!');
			
			}

            $this->load->view('auth/login');
           
        
    }

    public function logout()
    {
        $this->session->sess_destroy();

        redirect('dashboard');
    }
    

}
