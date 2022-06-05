
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Satit KKU Swimming</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
        integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
        <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/chartist.js/latest/chartist.min.css">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.jqueryui.min.css">
    <link rel="shortcut icon" type="image/x-icon" href="image/favicon.ico">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
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
  width:145px;
  border-radius:25px;
  margin-right:8px;
}

.button2 {
  background-color: #343a40; 
  color: white; 

}

.button2:hover {
  background-color: #4CAF50;
  color: white;
}
</style>

</head>

<body style="background-color:LightGray;">
    <nav class="navbar navbar-light bg-dark p-3">
    <div class="d-flex col-12 col-md-3 col-lg-2 mb-0 mb-lg-0 flex-wrap flex-md-nowrap justify-content-between">
            <img src="image/1 KKU new.png" alt="" width="60" height="60" c lass="d-inline-block align-text-center">
            <a class="navbar-brand py-3 " href="index.php">
                <font color="white">
                    <h4>SATIT KKU Swimming</h4>
                </font>
            </a>
            <button class="navbar-toggler d-md-none collapsed mb-3" type="button" data-toggle="collapse" data-target="#sidebar" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>

        <a class="text-center fw-bold py-3 px-md-4" style="position: absolute; right: 30px;" href="c_logout.php"><i class='fas fa-share' style='font-size:30px;color:white'></i></a>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebar" class="col-md-3 col-lg-2 my-0 d-md-block bg-light sidebar collapse ">
                <div class="position-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="index.php">
                                <span class="ml-0">Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="record.php">
                                <span class="ml-0">บันทึกผลการฝึกซ้อม</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="listprogram.php">
                                <span class="ml-0">รายการแข่งขัน</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
            <main class="col-md-9 ml-sm-auto col-lg-10 px-md-4 py-2">
                <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                        <li class="breadcrumb-item " aria-current="page">Dashboard</a></li>
                        <li class="breadcrumb-item "><a href="record.php">บันทึกผลการฝึกซ้อม</a></li>
                        <li class="breadcrumb-item "><a href="listprogram.php">รายการการแข่งขัน</a></li>
                    </ol>
                </nav>

                <div class="container mt-3">
                    <div class="row">
                        <div class="card">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card">
                                        <h2 class="card-header">Dashboard</h2>
                                        <h9 class="card-header mt-2">กราฟแสดงข้อมูลโดยรวมของนักกีฬา</h9>
                                        <div class="card-body">
                                            <div id="traffic-chart"></div>
                                        </div>
                                    </div>
                                    <br>
                                    <a href="sportuser.php" class="btn btn-success">ข้อมูลโดยรวมของนักกีฬา</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container mt-3">
                    <div class="row">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-header my-2">ท่าว่ายน้ำ</h3>
                                <p>The card shows the information of each type of swimming posture.</p>
                                <div class="row my-4">
                                    <div class="col-12 col-md-6 col-lg-3 mb-4 mb-lg-0">
                                        <img src="image/freestyle.jpg" class="card-img-top" width="50" height="150"
                                            alt="...">
                                        <div class="card">
                                            <h5 class="card-header">Freestyle</h5>
                                            <div class="card-body">
                                                <p class="card-text">- Freestyle arm action</p>
                                                <p class="card-text text-success">Distance</p>
                                                <p>- 50 meters</p>
                                                <p>- 100 meters</p>
                                                <p>- 200 meters</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 mb-4 mb-lg-0 col-lg-3">
                                        <img src="image/Backstroke.jpg" class="card-img-top" width="50" height="150"
                                            alt="...">
                                        <div class="card">
                                            <h5 class="card-header">Backstroke</h5>
                                            <div class="card-body">
                                                <p class="card-text">- Backstroke arm action</p>
                                                <p class="card-text text-success">Distance</p>
                                                <p>- 50 meters</p>
                                                <p>- 100 meters</p>
                                                <p>- 200 meters</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 mb-4 mb-lg-0 col-lg-3">
                                        <img src="image/Butterfly.jpg" class="card-img-top" width="50" height="150"
                                            alt="...">
                                        <div class="card">
                                            <h5 class="card-header">Butterfly</h5>
                                            <div class="card-body">
                                                <p class="card-text">- Butterfly arm action</p>
                                                <p class="card-text text-success">Distance</p>
                                                <p>- 50 meters</p>
                                                <p>- 100 meters</p>
                                                <p>- 200 meters</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 mb-4 mb-lg-0 col-lg-3">
                                        <img src="image/Breaststroke.jpg" class="card-img-top" width="50" height="150"
                                            alt="...">
                                        <div class="card">
                                            <h5 class="card-header">Breaststroke</h5>
                                            <div class="card-body">
                                                <p class="card-text">- Breaststroke arm action</p>
                                                <p class="card-text text-success">Distance</p>
                                                <p>- 50 meters</p>
                                                <p>- 100 meters</p>
                                                <p>- 200 meters</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-xl-12 mb-4 mb-lg-0 mt-5">
                    <div class="card">
                        <h5 class="card-header">บันทึกผลการแข่งขัน</h5>
                        <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table" id="customers">
                                        <thead>
                                            <tr>
                                                <th scope="col">ลำดับ</th>
                                                <th scope="col">รายการแข่ง</th>
                                                <th scope="col">รุ่นอายุ</th>
                                                <th scope="col">เพศ</th>
                                                <th scope="col">วันที่แข่ง</th>
                                            </tr>
                                            </tbody>
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
                                                <td><?php echo $row['age']; ?></td>
                                                <td><?php echo $row['sex']; ?></td>
                                                <td><?php echo $row['dateprogram']; ?></td>
                                            </tr>
                                            <?php

                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                    <a href="listprogram.php" class="btn btn-success">เพิ่มรายการการแข่งขัน</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>
    <a href="listprogram.php" class="btn btn-success">เพิ่มรายการการแข่งขัน</a>

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
    <script>
    new Chartist.Line('#traffic-chart', {
        labels: ['January', 'Februrary', 'March', 'April', 'May', 'June'],
        series: [
            [23000, 25000, 19000, 34000, 56000, 64000]
        ]
    }, {
        low: 0,
        showArea: true
    });
    </script>

</body>

</html>