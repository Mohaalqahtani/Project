<?php
include 'inc/conn.php'; // To Get Connect to Database
include 'inc/form.php'; // To Post Form data
include 'inc/select.php'; // To Get Info from db
include 'inc/db_close.php'; // To Close Sessoin
?>
<?php include_once 'parts/header.php';?>

<div id="box-con" class="position-relative overflow-hidden m-md-3 text-center">
<div class="col-md-6  mx-auto mb-5">
      <img src="images/tvtc.png" alt="">
      <h2 class="display-3 fw-bold">اربح مع الكلية التقنية</h2>
      <h3 class="fw-normal text-muted mb-3">باقي على فتح التسجيل</h3>
      <h3 class="timer" id="timer"></h3>
      <div class="d-flex gap-3 justify-content-center lead fw-normal">
      </div>
    </div>
<div class="container">
      <h3>شروط الدخول للسحب :</h3>
      <ul class="list-group list-group-flush">
    <li class="list-group-item">أن تكون طالب في الكلية التقنية</li>
    <li class="list-group-item">التسجيل مرة واحدة فقط</li>
    <li class="list-group-item">وضع بيانات صحيحة</li>
      </ul>
    </div>
    </div>
<br>
<div id="box-con" class="container" style="text-align:center">
  <form action="<?php $_SERVER['PHP_SELF']?>" method="post"><br>
  <h3>أكتب بياناتك</h3>
<div class="mb-3">
    <label for="firstname" class="form-label">الأسم الأول :</label>
    <input value="<?php echo $firstname; ?>" name="firstname" type="text" class="form-control" id="firstname">
<div id="errormsg" class="form-text error"><?php echo $errors['firstnameError'] ?></div>
  </div>
  
<div class="mb-3">
    <label for="lastname" class="form-label">الأسم الأخير :</label>
    <input value="<?php echo $lastname; ?>" name="lastname" type="text" class="form-control" id="lastname">
<div id="errormsg" class="form-text error"><?php echo $errors['lastnameError'] ?></div>

</div>
  
<div class="mb-3">
    <label for="email" class="form-label">البريد الألكتروني :</label>
    <input value="<?php echo $email; ?>" name="email" type="email" class="form-control" id="email">
<div id="errormsg" class="form-text error"><?php echo $errors['EmailError'] ?></div>

</div>
  
<button name="submit" type="submit" class="btn btn-primary" style="background-color: #01552cbd;
border: solid #01552cbd;">أرسال</button>
</form>
<br>

<div class="loader-con">
<div id="loader">
	<canvas id="circularLoader" width="200" height="200"></canvas>
</div>
</div>

<!-- Button trigger modal -->
<div class="d-grid gap-2 col-6 mx-auto my-1">
  <button type="button" id="winner" class="btn btn-primary" style="background-color: #01552cbd; border: solid #01552cbd;">
  اختيار الفائز
  </button>
</div>
<!-- Modal -->
<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered">
<div class="modal-content">
<div class="modal-header">
        <h1 class="modal-title fs-5" id="modalLabel">الفائز</h1>
      </div>
<div class="modal-body">
      <?php foreach($users as $user) : ?>
        <h1 class="display-1 text-center modal-title fs-5" id="modalLabel"><?php echo htmlspecialchars( $user['firstname']) . ' ' . htmlspecialchars( $user['lastname']);?></h1>
        <?php endforeach; ?>
      </div> 
    </div>
  </div>
</div>

</div>

<?php include_once 'parts/footer.php';?>
