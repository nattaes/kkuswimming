<?php
include_once('function.php');

$deletedata = new DB_con();
$insertdata = new DB_con();
$updatedata = new DB_con();

//ลบข้อมูล
if (isset($_GET['del'])) {
    $id = $_GET['del'];
    $deletedata = new DB_con();
    $sql = $deletedata->deletelist($id);

    if ($sql) {
        echo "<script>alert('ลบข้อมูลสำเร็จ');</script>";
        echo "<script>window.location.href='listprogram.php'</script>";
    }
}

// เพิ่มข้อมูล
if (isset($_POST['insert'])) {
    $list = $_POST['list'];
    $age = $_POST['age'];
    $sex = $_POST['sex'];
    $dateprogram = $_POST['dateprogram'];

    $sql = $insertdata->insertlist($list, $age, $sex, $dateprogram);
    if ($sql) {
        echo "<script>alert('ข้อมูลบันทึกสำเร็จ!');</script>";
        //echo "<script>window.location.href='listprogram.php'</script>";
    } else {
        echo "<script>alert('มีบางอย่างผิดพลาด กรุณาลองใหม่');</script>";
        //echo "<script>window.location.href='listprogram.php'</script>";
    }
}

//แก้ไขข้อมูล
if (isset($_POST['updatelist'])) {
    $id = $_POST['id'];
    $list = $_POST['list'];
    $age = $_POST['age'];
    $sex = $_POST['sex'];
    $dateprogram = $_POST['dateprogram'];

    $sql = $updatedata->updatelist($id, $list, $age, $sex, $dateprogram);
    if ($sql) {
        echo "<script>alert('ข้อมูลบันทึกสำเร็จ!');</script>";
        echo "<script>window.location.href='listprogram.php'</script>";
    } else {
        echo "<script>alert('มีบางอย่างผิดพลาด กรุณาลองใหม่');</script>";
        echo "<script>window.location.href='listprogram.php'</script>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

</html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>รายการการแข่งขัน</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.jqueryui.min.css">
    <link rel="shortcut icon" type="image/x-icon" href="image/favicon.ico">
    <style>
    tbody {
        text-align: center;
    }

    #customers thead {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: center;
        background-color: #7AA1D2;
        color: white;
    }
    </style>

    <style>
        /* Note: Try to remove the following lines to see the effect of CSS positioning */
        .sidebar {
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            z-index: 100;
            padding: 108px 0 0;
            box-shadow: inset -1px 0 0 rgba(0, 0, 0, .1);
            z-index: 99;
            font-size: 15px;
        }

        @media (max-width: 767.98px) {
            .sidebar {
                top: 11.5rem;
                padding: 0;
            }
        }

        .navbar {
            box-shadow: inset 0 -1px 0 rgba(0, 0, 0, .1);
        }

        @media (min-width: 767.98px) {
            .navbar {
                top: 0;
                position: sticky;
                z-index: 999;
            }
        }

        .sidebar .nav-link {
            color: #333;
        }

        .sidebar .nav-link.active {
            color: #0d6efd;
        }
    </style>
    
<style>
.btn-text-right{
	text-align: right;
}
</style>

<style>
ol.breadcrumb {
  padding: 10px 16px;
  list-style: none;
  background-color: #eee;
}
ol.breadcrumb li {
  display: inline;
  font-size: 14px;
}
ol.breadcrumb li+li:before {
  padding: 0px;
  color: black;
  content: "/\00a0";
}
ol.breadcrumb li a {
  color: #0275d8;
  text-decoration: none;
}
ol.breadcrumb li a:hover {
  color: #01447e;
  text-decoration: underline;
}
.breadcrumb {
  right: 0;
}
</style>

<style>
.button {
  background-color: #4CAF50; /* Green */
  color: white;
  padding: 12px 28px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
  width:132px;
  border-radius:25px;
  margin-right:8px;
}


.button1 {
  background-color: #343a40;
  color: white;
}

.button1:hover {
  background-color: #4CAF50;
  color: white;
}

.button2 {
  background-color: #4CAF50; 
  color: white; 

}

.button2:hover {
  background-color: #343a40;
  color: white;
}
</style>

<style>
.btn-text-right{
	text-align: center;
}
</style>

<style>
.mt-2{
	text-align: center;
}
.mt-5{
	text-align: center;
}
</style>

</head>

<body style="background-color:LightGray;">

<nav class="navbar navbar-light bg-dark p-3">
    <div class="d-flex col-12 col-md-3 col-lg-2 mb-0 mb-lg-0 flex-wrap flex-md-nowrap justify-content-between">
            <img src="image/1 KKU new.png" alt="" width="60" height="60" class="d-inline-block align-text-center">
            <a class="navbar-brand py-3 " href="index.php">
                <font color="white">
                    <h4>SATIT KKU Swimming</h4>
                </font>
            </a>
            <button class="navbar-toggler d-md-none collapsed mb-3" type="button" data-toggle="collapse" data-target="#sidebar" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>

        <a class="text-center fw-bold py-3 px-md-4" style="position: absolute; right: 30px;" href="record.php"><i class='fas fa-share' style='font-size:30px;color:white'></i></a>
    </nav>
                <div class="container">
                <h1 class="mt-5">รายการการฝึกซ้อม</h1>
                <h6 class="mt-2">Record the results of the training</h6>
                            <hr></hr>
                            <div class="btn-text-right">
  	                        <button type="button" class="btn btn-success">เพิ่มข้อมูล</button>
                            </div>
                            <br>
                            <table id="example" class="table table-bordered table-dark">
                                <thead>
                                    <th>ลำดับ</th>
                                    <th>รายการแข่งขัน</th>
                                    <th></th>
                                </thead>

                                <tbody>
                                    <?php

                                    include_once('function.php');
                                    $fetchdata = new DB_con();
                                    $sql = $fetchdata->fetchdata1();
                                    while ($row = mysqli_fetch_array($sql)) {

                                    ?>
                                        <tr>
                                            <td><?php echo $row['id']; ?></td>
                                            <td><?php echo $row['list']; ?></td>
                                    <td><a href="record.php?del=<?php echo $row['id']; ?>" class="btn btn-danger" onclick="Del(this.href);return false;">ลบ</a>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Github buttons -->
                <script async defer src="https://buttons.github.io/buttons.js"></script>
                <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
                <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
                <script src="https://cdn.datatables.net/1.11.5/js/dataTables.jqueryui.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"></script>


</html>


<script language="JavaScript">
    function Del(mypage) {
        var agree = confirm("คุณต้องการลบข้อมูลนี้หรือไม่");
        if (agree) {
            window.location = mypage;
        }

    }
</script>