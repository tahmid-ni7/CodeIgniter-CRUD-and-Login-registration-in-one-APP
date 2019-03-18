
<div class="row">
<div class="col-sm-9">
	<h3>Single Project</h3><hr>
	<h4 class=""><?= htmlentities($project_data->project_name); ?></h4>
	<p>Date Time: <?= htmlentities($project_data->created_date)?></p>
	<p>Description: <?= htmlentities($project_data->project_body)?></p>
</div>
<div class="col-sm-3 text-center">
<h5>Project action</h5>
<ul class="list-group list-group-flush">
	<li class="list-group-item"><a href="">Create Task</a></li>
	<li class="list-group-item"><?= anchor("projects/edit/{$project_data->id}", 'Edit project')?></li>
	<li class="list-group-item"><?= anchor("projects/delete/{$project_data->id}", 'Delete project')?></li>

</div>
</div>