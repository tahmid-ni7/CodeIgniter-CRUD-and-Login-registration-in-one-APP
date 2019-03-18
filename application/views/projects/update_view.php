<h3>Update project</h3><hr>

<?= form_open("projects/edit_data/{$project_data->id}");?>

  <div class="form-group">
    <label for="project_name">Project name</label>
      <?= form_input(['name'=>'project_name','placeholder'=>'Project name...','value'=>set_value('project_name',$project_data->project_name), 'class'=>'form-control']);?>
      <?= form_error('project_name', '<div class="text-danger">','</div>'); ?>
  </div>
  <div class="form-group">
    <label for="project_body">Description</label>
      <?= form_textarea(['name'=>'project_body','placeholder'=>'Project description...','value'=>set_value('project_body',$project_data->project_body), 'class'=>'form-control']);?>
      <?= form_error('project_body', '<div class="text-danger">','</div>'); ?>
  </div>

  <div class="form-group">
     	<?= form_submit(['name'=>'submit','value'=>'Update', 'class'=>'btn btn-success btn-sm']); ?>
     	
   </div>

<?= form_close();?>