
<?php 
echo "<pre>";
print_r($_POST);
echo "</pre>";
session_start();
        if(isset($_REQUEST['Username'])){
				//connection
                  include("c_log.php");
				//รับค่า user & password
                  $Username = $_REQUEST['Username'];
				//query 
                  $sql="SELECT * FROM parentdetail Where phonemother='".$Username."' ";
 
                  $result = mysqli_query($con,$sql);
				
                  if(mysqli_num_rows($result)==1){
 
                      $row = mysqli_fetch_array($result);
 
                      $_SESSION["UserID"] = $row["id"];//ประกาศตัวแปรUserIDไว้เพื่อส่งค่า
                      $_SESSION["Userlevel"] = $row["status"];//ประกาศตัวแปรUserlevelไว้เพื่อส่งค่า
 
                      if($_SESSION["Userlevel"]=="coach"){ //ถ้าเป็น admin ให้กระโดดไปหน้า admin_page.php
 
                        Header("Location: index.php");
 
                      }
 
                      if ($_SESSION["Userlevel"]=="member"){  //ถ้าเป็น member ให้กระโดดไปหน้า user_page.php
 
                        Header("Location: sportuser.php");
 
                      }
 
                  }else{
                    echo "<script>";
                        echo "alert(\" user หรือ  password ไม่ถูกต้อง\");"; 
                        echo "window.history.back()";
                    echo "</script>";
 
                  }
 
        }else{
 
 
             Header("Location: c_form.php"); //user & password incorrect back to login again
 
        }
?>