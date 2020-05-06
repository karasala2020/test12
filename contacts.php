<?php
require_once "blocks/header.php";
?>
<body>
<div class="container">
<form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="inputEmail4">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" id="inputPassword4">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Текст</label>
    <input type="textarea" class="form-control" id="inputAddress" placeholder="Введите текс" style="height: 100px;">
    </div>
    <div class="form-group">
    <label for="">Номер телефона</label>
    <input type="text" class="form-control" placeholder="Введите номер телефона">
  </div>
  <div class="num">
         <p>+99890 727 73 23</p>
        <a href="">Отправить</a>
  </div>
 

  

</form>
</div>
</body>
<?php
require_once "blocks/footer.php";
?>