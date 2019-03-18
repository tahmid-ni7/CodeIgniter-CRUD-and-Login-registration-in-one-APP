<?php 

class Project_model extends CI_Model
{

/*=================== View all the Data =================== */
	public function get_projects()
	{
		$query = $this->db->get('projects');

		return $query->result();
	}
/*================ View single row's Data =================*/
	public function get_single_project($id)
	{
		$this->db->where('id', $id);
		$query = $this->db->get('projects');
		

		return $query->row();
	}
/*================ Insert Data =========================*/
	public function create_project()
	{
		$data = array(

		'project_user_id' => $this->session->userdata('user_id'),
		'project_name' => $this->input->post('project_name'),
		'project_body' => $this->input->post('project_body')

		);

		$insert_project = $this->db->insert('projects', $data);
		return $insert_project;
	}

/*================== Update data ========================*/
	public function edit_project($id, $data)
	{
		$data = array(

		'project_name' => $this->input->post('project_name'),
		'project_body' => $this->input->post('project_body')

		);

		return $query = $this->db->where('id', $id)->update('projects', $data);
	}

	public function delete_project($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('projects');
		redirect('projects/index');
	}

}


 ?>