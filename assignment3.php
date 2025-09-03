<?php
$students = array(
   array(
      "stdNo" => "20003",
      "stdName" => "Ahmed Ali",
      "stdEmail" => "ahmed@gmail.com",
      "stdGPA" => 88.7
   ),
   array(
      "stdNo" => "30304",
      "stdName" => "Mona Khalid",
      "stdEmail" => "mona@gmail.com",
      "stdGPA" => 78.5
   ),
   array(
      "stdNo" => "10002",
      "stdName" => "Bilal Hmaza",
      "stdEmail" => "bilal@gmail.com",
      "stdGPA" => 98.7
   ),
   array(
      "stdNo" => "10005",
      "stdName" => "Said Ali",
      "stdEmail" => "said@gmail.com",
      "stdGPA" => 98.7
   ),
   array(
      "stdNo" => "10007",
      "stdName" => "Mohammed Ahmed",
      "stdEmail" => "mohamed@gmail.com",
      "stdGPA" => 98.7
   )
);
?>

<!DOCTYPE html>
<html>
<head>
   <title>Students Table</title>
</head>
<body>

<h2>Students Data</h2>

<table border="2px" cellpadding="5">
    <tr>
        <td>Student No</td>
        <td>Name</td> 
        <td>Email</td>
        <td>GPA</td>
    </tr>

    <?php
     foreach($students as $stu){ ?>
     <tr>
        <td>  
            <?php echo $stu["stdNo"] ?>
        </td>
        <td>  
            <?php echo $stu["stdName"] ?>
        </td>
        <td>  
            <?php echo $stu["stdEmail"] ?>
        </td>
        <td>  
            <?php echo $stu["stdGPA"] ?>
        </td>
     </tr>
     <?php
     }  
  ?>
</table>

<p>Total Students: <?php echo count($students); ?></p>


</body>
</html>