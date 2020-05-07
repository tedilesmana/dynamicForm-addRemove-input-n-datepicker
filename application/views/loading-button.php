<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>

	<!-- Icon Logo -->
	<link rel="../shortcut icon" href="assets/img/logo.png" type="image/x-icon">
	<!-- fontawesome-->
	<link rel="stylesheet" href="<?= base_url('assets/font-awesome/'); ?>css/font-awesome.css">

  <!-- Bootstrap core CSS -->
  <link href="<?= base_url('assets/bootstrap/'); ?>css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="<?= base_url('assets/bootstrap/'); ?>css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="<?= base_url('assets/bootstrap/'); ?>css/style.css" rel="stylesheet">

</head>
<body>

  <form>
   Firstname:
   <input type="text">
   <button type="submit" class="btn btn-danger" disabled>Submit</button>
  </form>

</body>
</html>

  <!-- JQuery -->
  <script type="text/javascript" src="<?= base_url('assets/bootstrap/'); ?>js/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="<?= base_url('assets/bootstrap/'); ?>js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="<?= base_url('assets/bootstrap/'); ?>js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="<?= base_url('assets/bootstrap/'); ?>js/mdb.min.js"></script>

    <script>
    $(document).ready(function(){
        $('button').attr('disabled',false);
        $('button').removeClass('btn-danger');
        $('button').addClass('btn-primary');
    });
  </script>