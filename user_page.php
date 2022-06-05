
<?php session_start();?>
<?php 
 
if (!$_SESSION["UserID"]){
 
	  Header("Location: c_form.php");
 
}else{?>

<?php
include_once('function.php');

$deletedata = new DB_con();
$insertdata = new DB_con();
$updatedata = new DB_con();
$selecteddata = new DB_con();

//ลบข้อมูล
if (isset($_GET['del'])) {
    $id = $_GET['del'];
    $deletedata = new DB_con();
    $sql = $deletedata->delete($id);

    if ($sql) {
        echo "<script>alert('ลบข้อมูลสำเร็จ');</script>";
        echo "<script>window.location.href='record.php'</script>";
    }
}

$error = null;
// เพิ่มข้อมูล
if (isset($_POST['insert'])) {
    $babydetail_id = $_POST['id'];
    $day = $_POST['day'];
    $poise = $_POST['poise'];
    $distance = $_POST['distance'];
    $timer = $_POST['timer'];




    $sql = $insertdata->insert($day, $poise, $distance, $timer, $babydetail_id);
    if ($sql) {
        echo "<script>alert('ข้อมูลบันทึกสำเร็จ!');</script>";
        //echo "<script>window.location.href='record.php'</script>";
    } else {
        echo "<script>alert('มีบางอย่างผิดพลาด กรุณาลองใหม่');</script>";
        //echo "<script>window.location.href='record.php'</script>";
    }
}


//แก้ไขข้อมูล
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $list = $_POST['list'];
    $age = $_POST['age'];
    $sex = $_POST['sex'];
    $statistics = $_POST['statistics'];
    $number = $_POST['number'];
    $style = $_POST['style'];

    $sql = $updatedata->update($id, $list, $age, $sex, $statistics, $number, $style);
    if ($sql) {
        echo "<script>alert('ข้อมูลบันทึกสำเร็จ!');</script>";
        echo "<script>window.location.href='record.php'</script>";
    } else {
        echo "<script>alert('มีบางอย่างผิดพลาด กรุณาลองใหม่');</script>";
        echo "<script>window.location.href='record.php'</script>";
    }
}
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ระบบบันทึกสถิติว่ายน้ำ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
        integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.jqueryui.min.css">
</head>

<style>
    .gradient-custom {
/* fallback for old browsers */
background: #6a11cb;

/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1));

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1));

}
    </style>

<body>
  
<section class="gradient-custom">
<div class="align-items-center">
        <a class="text-center fw-bold py-5 mb-2" style="position: absolute; right: 30px;" href="c_logout.php"><i class='fas fa-share' style='font-size:30px;color:white'></i></a>
      </div>
<h1><p style="color:white" class="text-center fw-bold py-5">List Student</p></h1>

      <div class="container" align="center">
        <main class="col-md-9  col-lg-10 ">
            <div class="container">
                <div class="card bg-dark text-white" style="border-radius: 1rem;">
                    <div class="card-header">
                    <h1 class="fw-bold mb-2 text-primary">STUDENT ACCOUNT</h1>
                                <br>
                                <h5 class="text-white">SATIT KKU</h5>
                                <h6 class="text-white-50 mb-5">SWIMMING STATISTICS SYSTEM</h6>

                          <div class="row">
                            <?php

                            include_once('function.php');
                            $fetchdata = new DB_con();
                            $sql = $fetchdata->fetchdata2();
                            while ($row = mysqli_fetch_array($sql)) {
                            ?>

                            <div class="col-sm-4">
                                <div class="card bg-dark text-white">
                                    <div class="card-body">
                                        <div class="image">
                                            <img src="<?php echo $row['image']; ?>" width="200px" height="190px"
                                                alt="" />
                                        </div> <br>
                                        <div class="card-inner">
                                            <div class="header">
                                                <h4>ชื่อ :<?php echo $row['name'] . " " . $row['lastname']; ?>
                                                </h4>
                                                <p>ชื่อเล่น :<?php echo $row['nickname']; ?></p>
                                            </div>
                                                    <div class="content">
                                                <button type="button" class="btn btn-success sm btn-block"
                                                    data-toggle="modal"
                                                    data-target="#exampleModal<?php echo $row['id']; ?>">
                                                    เพิ่มข้อมูลการซ้อม
                                                </button>
                                                    </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                          </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
        integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/chartist.js/latest/chartist.min.js"></script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.jqueryui.min.js"></script>
    <script type="text/javascript">
    $('#example').DataTable();
    </script>

</body>

</html>

<script language="JavaScript">
function Del(mypage) {
    var agree = confirm("คุณต้องการลบข้อมูลนี้หรือไม่");
    if (agree) {
        window.location = mypage;
    }

}
</script>







    </div>
    </div>

</body>
</html>
<?php }?>