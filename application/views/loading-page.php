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
  /*Loader*/
#loader-wrapper {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 1000;
}

/*Text Loading */
 h2{
  margin-top: 50px;
  margin-bottom: -100px;
 position: relative;
 font-size: 50px;
 font-family: Brush Script Std;
 text-align: center;
 color: blue;
 z-index: 1001;
 animation: mymove 1.5s infinite alternate;
 }

 @keyframes mymove{
    0%{
       opacity: 100; 
    }

    100%{
       opacity: 0;
    }
  }

  /*Loader Animation*/
#loader {
  display: block;
  position: relative;
  left: 49%;
  top: 20%;
  width: 150px;
  height: 150px;
  border-radius: 50%;
  margin: -75px 0 0 -75px;
  border: 5px solid transparent;
  border-top-color:#3498db; 
  border-bottom-color: #3498db; 
  z-index: 1001;
    animation: spin 1s linear infinite ;
}

#loader:before {
 content: "";
 position: absolute;
 top: 10px;
 left: 10px;
 right: 10px;
 bottom: 10px;
 border: 5px solid transparent;
 border-radius: 50%;
 border-left-color: #e74c3c;
 border-right-color:  #e74c3c;
 z-index: 1001;
 animation: spin 0.5s ease-in-out infinite ;
 }

#loader:after {
 content: "";
 position: absolute;
 top: 40px;
 left: 40px;
 right: 40px;
 bottom: 40px;
 border-radius: 50%;
 border: 5px solid transparent;
 border-top-color: #f9c922;
 border-bottom-color:  #f9c922;
 z-index: 1001;
 animation: spin 1s ease infinite ;
 }

 @keyframes spin {
    0% {
        transform: rotate(0deg) ;
      
    }

    100% {
        transform: rotate(360deg);
    }
  }

  /*Background Section Animation*/
#loader-wrapper .loader-section {
  position: fixed;
  top: 0;
  width: 51%;
  height: 100%;
  background: black;
  z-index: 1000;
}

#loader-wrapper .loader-section.section-left {
 left: 0;
 }

#loader-wrapper .loader-section.section-right {
 right: 0;
 }

 .loaded #loader-wrapper .loader-section.section-left {
  transform: translateX(-100%);
  transition: all 0.7s 0.3s cubic-bezier(0.645, 0.045, 0.355, 1.000);
}
.loaded #loader-wrapper .loader-section.section-right {
  transform: translateX(100%);
  transition: all 0.7s 0.3s cubic-bezier(0.645, 0.045, 0.355, 1.000);
}
</style>

</head>
<body>

<div id="loader-wrapper">
  <h2>Loading...</h2>
<div id="loader"></div>
<div class="loader-section section-left"></div>
<div class="loader-section section-right"></div>
</div>



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


  </script>