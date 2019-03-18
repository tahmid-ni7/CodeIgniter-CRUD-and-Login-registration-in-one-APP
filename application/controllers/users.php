<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {


public function register()
{

	$this->form_validation->set_rules('fname', 'First name', 'trim|required|alpha');
	$this->form_validation->set_rules('lname', 'Last name', 'trim|required|alpha');
	$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
	$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[3]|alpha_numeric|is_unique[users.username]');
	$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[3]');
	$this->form_validation->set_rules('cpassword', 'Confirm Password',
		'trim|required|min_length[3]|matches[password]');

	if($this->form_validation->run() == FALSE)
	{
			$data['main_view'] = 'users/register_view';
			$this->load->view('layouts/main', $data);
	}
	else
	{
		$this->load->model('user_model');

		if($this->user_model->create_user())
		{
			$this->session->set_flashdata('reg_success', 'Registration successfull');
			redirect('home/index');
		}
		else
		{
			print $this->db->error();
		}
		
	}


}



public function login()
{

	$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[3]');
	$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[3]');
	$this->form_validation->set_rules('cpassword', 'Confirm Password',
		'trim|required|min_length[3]|matches[password]');

	if($this->form_validation->run() == FALSE)
	{
		$data = array(
			'errors'=>validation_errors()

		);
		$this->session->set_flashdata($data);
		redirect('home');

	}
	else
	{

		$this->load->model('user_model');

		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$user_id = $this->user_model->login_user($username, $password);

		if($user_id)
		{
			$user_data = array(

				'user_id' => $user_id,
				'username' => $username,
				'logged_in' => true
			);
			$this->session->set_userdata($user_data);

			$this->session->set_flashdata('login_success', 'You are logged in successfully');

			/*$data['main_view'] = "admin_view";
			$this->load->view('layouts/main', $data);*/

			redirect('projects');
		}
		else
		{
			$this->session->set_flashdata('login_fail', 'Invalid logged in');

			redirect('home/index');
		}
	}

}

public function logout()
{
	$this->session->sess_destroy();
	redirect('home/index');
}


}
