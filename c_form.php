
<?php session_start();?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ระบบบันทึกสถิติว่ายน้ำ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="shortcut icon" type="image/x-icon" href="image/favicon.ico">
</head>

<style>
    .gradient-custom {
/* fallback for old browsers */
background: #6a11cb;

/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1));

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1))
}
    </style>

<body>
<section class="gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4 pb-5">

                                <h1 class="fw-bold mb-2 text-primary">LOGIN</h1>
                                <br>
                                <h5 class="text-white">SATIT KKU</h5>
                                <h6 class="text-white-50 mb-5">SWIMMING STATISTICS SYSTEM</h6>
                                <div>
                                    <img src="image/lifeguard.png" class="img-fluid" width='100px' height='50px' />
                                </div>
                                    <br>
 
                                    <form name="frmlogin"  method="post" action="c_login.php">
                                        <div class="mb-3 ">
                                            <hr></hr>
                                            <input type="text" class="form-control border border-secondary text-center" id="Username" name="Username" placeholder="เข้าสู่ระบบโดยใช้เบอร์ผู้ปกครอง" required >
                                        </div>
                                        <br>
                                            <button type="submit" class="btn btn-primary mx-auto d-block">เข้าสู่ระบบ</button>
                </div>
                <div>
                <p class="mb-0">คุณเป็นบัญชีนักเรียนหรือไม่ ? <a href="index.php" class="text-white-50 fw-bold">เข้าสู่ระบบโค้ช</a></p>
            </div>
      </form>
</body>
</html>