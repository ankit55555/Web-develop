<!DOCTYPE html>
<meta charset="UTF-8"> 
<head>
   <link rel="stylesheet" type="text/css" href="copo.css"> 
   <link rel="stylesheet" href="https://www.w3schools.com/w3css_4/w3.css"> 
   <script src='base.js'></script>
</head>


<?php require 'conn.php'; 



if (isset($_GET['submit'])){

  $staff_nm = $_GET["staff_nm"];
  $dept = $_GET["dept"];
  $course_nm = $_GET["course_nm"];
  $course_cd = $_GET["course_cd"];
  $co1 = $_GET["co1"];
  $co2 = $_GET["co2"];
  $co3 = $_GET["co3"];
  $co4 = $_GET["co4"];

  $sql = "INSERT INTO test (staff_nm,dept,course_nm,course_cd,co1,co2,co3,co4) VALUES ('$staff_nm','$dept','$course_nm','$course_cd','$co1','$co2','$co3','$co4')";

  if (mysqli_query($conn,$sql)){
    echo '<script>alert("You can proceed further.")</script>';

  }
  else{
    echo "<script>location.replace('http://localhost/form.html')</script>";
 }
}

?>

<form method="POST" action="copo.php">
        

    <table border='1'>
        <tr>
          <th>Course Code</th>
          <th>CO</th>
          <th>po1</th>
          <th>po2</th>
          <th>po3</th>
          <th>po4</th>
          <th>po5</th>
          <th>po6</th>
          <th>po7</th>
          <th>po8</th>
          <th>po9</th>
          <th>po10</th>
          <th>po11</th>
          <th>po12</th>
          <th>pso1</th>
          <th>pso2</th>
          <th>pso3</th>
          <th>pso4</th>
        </tr>
        
        <tr>
            <td><input type="text" name='course_cd'></td>
            <td><input type="text" name='co' value=""/></td>
            <td><input type="text" name='po1' value=""/></td>
            <td><input type="text" name='po2' value=""/></td>
            <td><input type="text" name='po3' value=""/></td>
            <td><input type="text" name='po4' value=""/></td>
            <td><input type="text" name='po5' value=""/></td>
            <td><input type="text" name="po6" value=""/></td>
            <td><input type="text" name='po7' value=""/></td>
            <td><input type="text" name='po8' value=""/></td>
            <td><input type="text" name="po9" value=""/></td>
            <td><input type="text" name="po10" value=""/></td>
            <td><input type="text" name="po11" value=""/></td>
            <td><input type="text" name="po12" value=""/></td>
            <td><input type="text" name="pso1" value=""/></td>
            <td><input type="text" name="pso2" value=""/></td>
            <td><input type="text" name="pso3" value=""/></td>
            <td><input type="text" name="pso4" value=""/></td>

          
            
        </tr>
        <tr>
            <td><input type="text" name='course_cd_2'></td>
            <td><input type="text" name='co_2' value=""/></td>
            <td><input type="text" name='po1_2' value=""/></td>
            <td><input type="text" name='po2_2' value=""/></td>
            <td><input type="text" name='po3_2' value=""/></td>
            <td><input type="text" name='po4_2' value=""/></td>
            <td><input type="text" name='po5_2' value=""/></td>
            <td><input type="text" name="po6_2" value=""/></td>
            <td><input type="text" name='po7_2' value=""/></td>
            <td><input type="text" name='po8_2' value=""/></td>
            <td><input type="text" name="po9_2" value=""/></td>
            <td><input type="text" name="po10_2" value=""/></td>
            <td><input type="text" name="po11_2" value=""/></td>
            <td><input type="text" name="po12_2" value=""/></td>
            <td><input type="text" name="pso1_2" value=""/></td>
            <td><input type="text" name="pso2_2" value=""/></td>
            <td><input type="text" name="pso3_2" value=""/></td>
            <td><input type="text" name="pso4_2" value=""/></td>
        </tr>
        <tr>
            <td><input type="text" name='course_cd_3'></td>
            <td><input type="text" name='co_3' value=""/></td>
            <td><input type="text" name='po1_3' value=""/></td>
            <td><input type="text" name='po2_3' value=""/></td>
            <td><input type="text" name='po3_3' value=""/></td>
            <td><input type="text" name='po4_3' value=""/></td>
            <td><input type="text" name='po5_3' value=""/></td>
            <td><input type="text" name="po6_3" value=""/></td>
            <td><input type="text" name='po7_3' value=""/></td>
            <td><input type="text" name='po8_3' value=""/></td>
            <td><input type="text" name="po9_3" value=""/></td>
            <td><input type="text" name="po10_3" value=""/></td>
            <td><input type="text" name="po11_3" value=""/></td>
            <td><input type="text" name="po12_3" value=""/></td>
            <td><input type="text" name="pso1_3" value=""/></td>
            <td><input type="text" name="pso2_3" value=""/></td>
            <td><input type="text" name="pso3_3" value=""/></td>
            <td><input type="text" name="pso4_3" value=""/></td>
        </tr>
        <tr>
            <td><input type="text" name='course_cd_4'></td>
            <td><input type="text" name='co_4' value=""/></td>
            <td><input type="text" name='po1_4' value=""/></td>
            <td><input type="text" name='po2_4' value=""/></td>
            <td><input type="text" name='po3_4' value=""/></td>
            <td><input type="text" name='po4_4' value=""/></td>
            <td><input type="text" name='po5_4' value=""/></td>
            <td><input type="text" name="po6_4" value=""/></td>
            <td><input type="text" name='po7_4' value=""/></td>
            <td><input type="text" name='po8_4' value=""/></td>
            <td><input type="text" name="po9_4" value=""/></td>
            <td><input type="text" name="po10_4" value=""/></td>
            <td><input type="text" name="po11_4" value=""/></td>
            <td><input type="text" name="po12_4" value=""/></td>
            <td><input type="text" name="pso1_4" value=""/></td>
            <td><input type="text" name="pso2_4" value=""/></td>
            <td><input type="text" name="pso3_4" value=""/></td>
            <td><input type="text" name="pso4_4" value=""/></td>
        </tr>
      </table>

            <button type='submit' class="w3-button w3-round w3-border" name= 'coposubmit'>Submit</button>  
            
</form>
<h2 class="w3-teal">Program Outcomes (POs):</h2>
      <div class="w3-container">
          <ol>
              <li>Engineering knowledge: Apply the knowledge of mathematics, science, engineering fundamentals, and an engineering specialization to the solution of complex engineering problems.</li>
              <li>Problem analysis: identify, formulate, review research literature, and analyze complex engineering problems reaching substantiated conclusions using first principles of mathematics, natural sciences, and engineering sciences.</li>
              <li>Design/development of solutions: Design solutions for complex engineering problems and design system components or processes that meet the specified needs with appropriate consideration for the public health and safety, and the cultural, societal, and environmental considerations.</li>
              <li>Conduct investigations of complex problems: Use research-based knowledge and research methods including design of experiments, analysis and interpretation of data, and synthesis of the information to provide valid conclusions.</li>
              <li>Modern tool usage: Create, select, and apply appropriate techniques, resources, and modern engineering and IT tools including prediction and modeling to complex engineering activities with an understanding of the limitations.</li>
              <li>The engineer and society: Apply reasoning informed by the contextual knowledge to assess societal, health, safety, legal and cultural issues and the consequent responsibilities relevant to the professional engineering practice.</li>
              <li>Environment and sustainability: Understand the impact of the professional engineering solutions in societal and environmental contexts, and demonstrate the knowledge of, and need for sustainable development.</li>
              <li>Ethics: Apply ethical principles and commit to professional ethics and responsibilities and norms of the engineering practice.</li>
              <li>Individual and team work: Function effectively as an individual, and as a member or leader in diverse teams, and in multidisciplinary settings.</li>
              <li>Communication: Communicate effectively on complex engineering activities with the engineering community and with society at large, such as, being able to comprehend and write effective reports and design documentation, make effective presentations, and give and receive clear instructions.</li>
              <li>Project management and finance: Demonstrate knowledge and understanding of the engineering and management principles and apply these to one’s own work, as a member and leader in a team, to manage projects and in multidisciplinary environments.</li>
              <li>Life-long learning: Recognize the need for, and have the preparation and ability to engage in independent and life-long learning in the broadest context of technological change.</li>
              
          </ol>

      </div>

      <h2 class="w3-teal">Program Specific Outcome (PSOs):</h2>
      <div id="pso" class="w3-container">
     
          <br>
      </div>
</html>



</body>
</html>