<?php require 'conn.php'; 

if (isset($_POST['coposubmit'])){

    $course_cd=$_POST['course_cd'];
    $co = $_POST['co'];
    $po1 = $_POST['po1'];
    $po2 = $_POST['po2'];
    $po3 = $_POST['po3'];
    $po4 = $_POST['po4'];
    $po5 = $_POST['po5'];
    $po6 = $_POST['po6'];
    $po7 = $_POST['po7'];
    $po8 = $_POST['po8'];
    $po9 = $_POST['po9'];
    $po10 = $_POST['po10'];
    $po11= $_POST['po11'];
    $po12 = $_POST['po12'];
    $pso1 = $_POST['pso1'];
    $pso2 = $_POST['pso2'];
    $pso3 = $_POST['pso3'];
    $pso4 = $_POST['pso4'];

    $course_cd_2=$_POST['course_cd_2'];
    $co_2= $_POST['co_2'];
    $po1_2 = $_POST['po1_2'];
    $po2_2 = $_POST['po2_2'];
    $po3_2 = $_POST['po3_2'];
    $po4_2 = $_POST['po4_2'];
    $po5_2 = $_POST['po5_2'];
    $po6_2 = $_POST['po6_2'];
    $po7_2 = $_POST['po7_2'];
    $po8_2 = $_POST['po8_2'];
    $po9_2 = $_POST['po9_2'];
    $po10_2 = $_POST['po10_2'];
    $po11_2 = $_POST['po11_2'];
    $po12_2 = $_POST['po12_2'];
    $pso1_2 = $_POST['pso1_2'];
    $pso2_2 = $_POST['pso2_2'];
    $pso3_2 = $_POST['pso3_2'];
    $pso4_2 = $_POST['pso4_2'];

    $course_cd_3=$_POST['course_cd_3'];
    $co_3 = $_POST['co_3'];
    $po1_3 = $_POST['po1_3'];
    $po2_3 = $_POST['po2_3'];
    $po3_3 = $_POST['po3_3'];
    $po4_3 = $_POST['po4_3'];
    $po5_3 = $_POST['po5_3'];
    $po6_3 = $_POST['po6_3'];
    $po7_3 = $_POST['po7_3'];
    $po8_3 = $_POST['po8_3'];
    $po9_3 = $_POST['po9_3'];
    $po10_3 = $_POST['po10_3'];
    $po11_3 = $_POST['po11_3'];
    $po12_3 = $_POST['po12_3'];
    $pso1_3 = $_POST['pso1_3'];
    $pso2_3 = $_POST['pso2_3'];
    $pso3_3 = $_POST['pso3_3'];
    $pso4_3= $_POST['pso4_3'];

    $course_cd_4 =$_POST['course_cd_4'];
    $co_4 = $_POST['co_4'];
    $po1_4 = $_POST['po1_4'];
    $po2_4 = $_POST['po2_4'];
    $po3_4 = $_POST['po3_4'];
    $po4_4 = $_POST['po4_4'];
    $po5_4 = $_POST['po5_4'];
    $po6_4 = $_POST['po6_4'];
    $po7_4 = $_POST['po7_4'];
    $po8_4 = $_POST['po8_4'];
    $po9_4 = $_POST['po9_4'];
    $po10_4 = $_POST['po10_4'];
    $po11_4= $_POST['po11_4'];
    $po12_4 = $_POST['po12_4'];
    $pso1_4 = $_POST['pso1_4'];
    $pso2_4 = $_POST['pso2_4'];
    $pso3_4 = $_POST['pso3_4'];
    $pso4_4 = $_POST['pso4_4'];

    $sql = "INSERT INTO copo (course_cd,co,po1,po2,po3,po4,po5,po6,po7,po8,po9,po10,po11,po12,pso1,pso2,pso3,pso4)
            VALUES ('$course_cd','$co','$po1','$po2','$po3','$po4','$po5','$po6','$po7','$po8','$po9','$po10','$po11','$po12','$pso1','$pso2','$pso3','$pso4'),
             ('$course_cd_2','$co_2','$po1_2','$po2_2','$po3_2','$po4_2','$po5_2','$po6_2','$po7_2','$po8_2','$po9_2','$po10_2','$po11_2','$po12_2','$pso1_2','$pso2_2','$pso3_2','$pso4_2') ,
             ('$course_cd_3','$co_3','$po1_3','$po2_3','$po3_3','$po4_3','$po5_3','$po6_3','$po7_3','$po8_3','$po9_3','$po10_3','$po11_3','$po12_3','$pso1_3','$pso2_3','$pso3_3','$pso4_3'),
             ('$course_cd_4','$co_4','$po1_4','$po2_4','$po3_4','$po4_4','$po5_4','$po6_4','$po7_4','$po8_4','$po9_4','$po10_4','$po11_4','$po12_4','$pso1_4','$pso2_4','$pso3_4','$pso4_4') ";
    
    //$sql = "INSERT INTO copo (course_cd,co,po1,po2,po3,po4,po5,po6,po7,po8,po9,po10,po11,po12,pso1,pso2,pso3,pso4)
           // VALUES ('$course_cd_2','$co_2','$po1_2','$po2_2','$po3_2','$po4_2','$po5_2','$po6_2','$po7_2','$po8_2','$po9_2','$po10_2','$po11_2','$po12_2','$pso1_2','$pso2_2','$pso3_2','$pso4_2') ";
    
    //$sql = "INSERT INTO copo (course_cd,co,po1,po2,po3,po4,po5,po6,po7,po8,po9,po10,po11,po12,pso1,pso2,pso3,pso4)
           // VALUES ('$course_cd_3','$co_3','$po1_3','$po2_3','$po3_3','$po4_3','$po5_3','$po6_3','$po7_3','$po8_3','$po9_3','$po10_3','$po11_3','$po12_3','$pso1_3','$pso2_3','$pso3_3','$pso4_3') ";
    
   // $sql = "INSERT INTO copo (course_cd,co,po1,po2,po3,po4,po5,po6,po7,po8,po9,po10,po11,po12,pso1,pso2,pso3,pso4)
           // VALUES ('$course_cd_4','$co_4','$po1_4','$po2_4','$po3_4','$po4_4','$po5_4','$po6_4','$po7_4','$po8_4','$po9_4','$po10_4','$po11_4','$po12_4','$pso1_4','$pso2_4','$pso3_4','$pso4_4') ";
    
    if (mysqli_query($conn,$sql)){
        echo '<script>alert("Successfully Entered Data.")</script>';
    
      }
      else{
        echo 'Error'.$sql."<br>".mysqli_error($conn);
     }
    }

    ?>