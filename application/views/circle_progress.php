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

  <style type="text/css">
    #circleBar{
      margin-top:180px;
      text-align: center;
      font-family: tahoma;
    }

    #circleBar .round{
      min-height: 255px;
      margin-top: 30px;
      position: relative;
      margin-bottom: 20px;
    }

    #circleBar .round strong{
      position: absolute;
      top: 50%;
      left: 50%;
      margin-top: -50px;
      transform: translate(-50%);
      font-size: 40px;
      color: #212121;
      font-weight: 100;
    }

    #circleBar span{
      display: block;
      color: #999;
      font-size: 17px;
      margin-top: 10px;
    }

    #circleBar span i{
      color: #ff5c5c;
      font-size: 22px;
      margin-right: 7px;
    }

    section button:hover{
      background-color: #ff5c5c;
    }
  </style>

</head>
<body>

  <section id="circleBar">
    <h1>Circle Progress Bar</h1>    
    <p>Animation circuluar bar design with html, css and js</p>
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="round" data-value="0.87" data-size="200" data-thickness="12">
            <strong></strong>
            <span>
              <i class="fa fa-html5"></i>HTML SKILL
            </span>
          </div>
        </div>
        <div class="col-md-3">
          <div class="round" data-value="0.75" data-size="200" data-thickness="12">
            <strong></strong>
            <span>
              <i class="fa fa-html5"></i>CSS SKILL
            </span>
          </div>
        </div>
        <div class="col-md-3">
          <div class="round" data-value="0.50" data-size="200" data-thickness="12">
            <strong></strong>
            <span>
              <i class="fa fa-html5"></i>JS SKILL
            </span>
          </div>
        </div>
        <div class="col-md-3">
          <div class="round" data-value="0.25" data-size="200" data-thickness="12">
            <strong></strong>
            <span>
              <i class="fa fa-html5"></i>PHP SKILL
            </span>
          </div>
        </div>
      </div>
    </div>
    <button class="btn" onClick="Circle('.round');">
      Refresh
    </button>
  </section>

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
  <!-- JQuery Circle Progress -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-circle-progress/1.2.2/circle-progress.js"></script>

  <script type="text/javascript">
    function Circle(el){
      $(el).circleProgress({fill: {color: '#ff5c5c'}}).on('circle-animation-progress', function(event, progress, stepValue){
          $(this).find('strong').text(String(stepValue.toFixed(2)).substr(2)+'%');
      });
    };

    Circle('.round');
  </script>