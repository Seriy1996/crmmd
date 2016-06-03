<meta charset="utf-8">
<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL);
  include 'main/header.html';
  include 'main/footer.php';
  include 'send.php';
?>

    <div class="col-xs-0 col-sm-3 col-md-3 col-lg-4">
        <ul>
            <li><a href="#">здесь</li>
    <li><a href="#">будет</li>
    <li><a href="#">что-то</li>
    <li><a href="#">грандиозное</li>
    <li><a href="#">и здесь</li>
    <li><a href="#">и здесь</li>
    <li><a href="#">и здесь</li>
    <li><a href="#">и здесь</li></ul>
    </a>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-5 col-lg-4">
      <?php
      include 'main/stih.php';
      ?>
    <div class="col-xs-0 col-sm-3 col-md-4 col-lg-4"><br>
        <button class="btn btn-danger btn-lg" type="button" data-toggle="modal" data-target="#imodal">YouTube video test</button>
        <div id="imodal" class="modal fade">
            <div class="modal-dialog modal-md">
              <div class="modal-content">
                <button class="close" type="button" data-dismiss="modal">&times</button>
                <div class="modal-header">Watch</div>
                </button>
                <div class="modal-body">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/uT3SBzmDxGk" autoplay="0"> </iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <h4>Форма для внесения информации в базу данных:</h4>
    <form action="send.php" method="POST" role="form">
      <div class="form-group">
        <label for="">Представьтесь, пожалуйста</label>
        <input type="text" class="form-control" name="fio" placeholder="Фамилия Имя Отчество" value="">
      </div>
    <div class="form-group">
      <label for="">Введите действующий имэйл</label>
      <input type="text" class="form-control" name="mail" placeholder="E-mail" value="">
    </div>
    <div class="form-group">
      <label for="">Введите номер телефона</label>
      <input type="text" class="form-control" name="pnum" placeholder="Номер телефона" value="">
      <p class="help-block">ne takoi prostoi</p>
    </div>
    <button type="submit" name="send" class="btn btn-success">
  <i class="fa fa-sign-in"> Внести в базу данных</i>
  </button>
    </form>
    </div>


    <!--<div><footer><a href="#up">UP!</a></footer></div> -->


<!--
<div class="container">
<div class="row">
    <div class="col-xs-4 col-sm-4 col-md-5 col-lg-3"></div>
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-6"></div>
    <div class="col-xs-4 col-sm-4 col-md-3 col-lg-3"></div>
              </div>
          </div>

          <div class="navbar-fixed-bottom row-fluid">
      <div class="navbar-inner">
          <div class="container">
          <a class="btn btn-block btn-social btn-google btn-sm">
    <span class="fa fa-google"></span> ... Google</a>
          </div>
          </div>
          </div>


            <script type="text/javascript">
if(navigator.geolocation) {
navigator.geolocation.getCurrentPosition(function(position) {
            var latitude = position.coords.latitude;
            var longitude = position.coords.longitude;
        });

} else {
    alert("Geolocation API не поддерживается в вашем браузере");
}
</script>

</head>
-->
