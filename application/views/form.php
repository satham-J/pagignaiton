<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Horizontal form</h2>
  <form class="form-horizontal" action="<?= base_url('Welcome/form');?>" method="POST">
    <div class="form-group">
      <label class="control-label col-sm-2" for="name">Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" value="<?= set_value('name');?>">
        <div class="error"><?= form_error('name');?></div>
      </div>
    </div>

     <div class="form-group">
      <label class="control-label col-sm-2" for="date">Date</label>
      <div class="col-sm-10">
        <select name="date" id="date" class="form-control">
        	<option value="">Select</option>
        	<option value="1" <?= set_select('date',1);?>>One</option>
        	<option value="2" <?= set_select('date',2);?>>Two</option>
        	<option value="3" <?= set_select('date',3);?>>Three</option>
        </select>
        <div class="error"><?= form_error('date');?></div>
      </div>
    </div>

    <!--
		<div class="form-group">
      <label class="control-label col-sm-2" for="date">Date</label>
      <div class="col-sm-10">
        <select name="date" id="date" class="form-control">
        	<option value="">Select</option>
        	<option value="1" <?= set_select('date',1,($info['date']=1?TRUE:''));?>>One</option>
        	<option value="2" <?= set_select('date',2,($info['date']=2?TRUE:''));?>>Two</option>
        	<option value="3" <?= set_select('date',3,($info['date']=3?TRUE:''));?>>Three</option>
        </select>
        <div class="error"><?= form_error('date');?></div>
      </div>
    </div>
    -->
    
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
  </form>
</div>
<style>
	div.error p{color:red;}
</style>
</body>
</html>
