<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Projects extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		if(!$this->session->userdata('logged_in'))
		{
			$this->session->set_flashdata('no_access', 'You are not allowed or not logged in');
			redirect('home');
		}
	}



	public function index()
	{
		$this->load->model('project_model');
		$data['projects'] = $this->project_model->get_projects();

		$data['main_view'] = "projects/index";
		$this->load->view('layouts/main', $data);
	}
/*================ Display single data ==================*/
	public function display($id)
	{
		$this->load->model('project_model');
		$data['project_data'] = $this->project_model->get_single_project($id);

		$data['main_view'] = "projects/display";
		$this->load->view('layouts/main', $data);
	}
/*================= Insert the data ====================*/
	public function create()
	{
		$this->form_validation->set_rules('project_name', 'project name', 'trim|required|alpha');
		$this->form_validation->set_rules('project_body', 'Project description', 'trim|required');

		if($this->form_validation->run() == FALSE)
		{
			$data['main_view'] = 'projects/create_project';
			$this->load->view('layouts/main', $data);
		}
		else
		{
			$this->load->model('project_model');
			if($this->project_model->create_project())
			{
				$this->session->set_flashdata('success', 'Project successfully created');
				redirect('projects/index');
			}
			else
			{
				print $this->db->error();
			}

		}
	}


/*============ Load Edit view and Show the single info ========*/
	public function edit($id)
	{
		/* For geting the existing info...*/
		$this->load->model('project_model');
		$data['project_data'] = $this->project_model->get_single_project($id);
		/* Load the view */
		$data['main_view'] = 'projects/update_view';
		$this->load->view('layouts/main', $data);
	}
/*================ Edit || Update the data ======================*/
	public function edit_data($id)
	{
		/* For geting the existing info...*/
		$this->load->model('project_model');
		$data['project_data'] = $this->project_model->get_single_project($id);

		$this->form_validation->set_rules('project_name', 'project name', 'trim|required|alpha');
		$this->form_validation->set_rules('project_body', 'Project description', 'trim|required');

		if($this->form_validation->run() == FALSE)
		{
			$data['main_view'] = 'projects/update_view';
			$this->load->view('layouts/main', $data);
		}
		else
		{
			$this->load->model('project_model');
			if($this->project_model->edit_project($id, $data))
			{
				$this->session->set_flashdata('edit_project', 'Project successfully Updated');
				redirect('projects/index');
			}
			else
			{
				print $this->db->error();
			}

		}
	}

	public function delete($id)
	{
		$this->load->model('project_model');
		$this->project_model->delete_project($id);
		
		$this->session->set_flashdata('delete_project', 'Project successfully deleted');

	}



}
