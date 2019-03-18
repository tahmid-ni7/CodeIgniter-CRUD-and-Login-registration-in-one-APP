<?php 
	if($this->session->flashdata('success'))
	{
		print '<div class="text-success">'.$this->session->flashdata('success').'</div>';
	}

	if($this->session->flashdata('edit_project'))
	{
		print '<div class="text-success">'.$this->session->flashdata('edit_project').'</div>';
	}
	if($this->session->flashdata('delete_project'))
	{
		print '<div class="text-success">'.$this->session->flashdata('delete_project').'</div>';
	}
  if($this->session->flashdata('login_success'))
  {
    print '<div class="text-success">'.$this->session->flashdata('login_success').'</div>';
  }

 ?>

<h3>Projects</h3>
<hr>
<a class="btn btn-outline-success btn-sm" href="<?= base_url();?>projects/create">Create Project</a> <br><br>

<table class="table table-hover">
  <thead class="thead-light">
    <tr>
      <th>Project Name</th>
      <th>Project Body</th>
    </tr>
  </thead>


  <tbody>
  	<?php foreach ($projects as $project):?>
  	<tr >
      <?php print '<td><a href ="'.base_url().'projects/display/'.$project->id.'" title = "View more" class="text-success">'.$project->project_name.'</a></td>'; ?>
      <?php print '<td>'.substr($project->project_body, 0 ,100).'...<a href ="'.base_url().'projects/display/'.$project->id.'"> more</a>'.'</td>'; ?>
    </tr>
  	<?php endforeach; ?>
    
  </tbody>
</table>

