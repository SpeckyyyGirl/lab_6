<!DOCTYPE html>
<html>
<head>
<title>Students Table</title>
<style>
  table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
  }
  th, td {
    padding: 5px;
  }
</style>
</head>
<body>

<table>
  <tr>
    <th>Name</th>
    <th>Program</th>
    <th>Age</th>
  </tr>
  <?php
  $students = array(
      array('name' => 'Alice', 'program' => 'BIP', 'age' => 21),
      array('name' => 'Bob', 'program' => 'BIS', 'age' => 20),
      array('name' => 'Raju', 'program' => 'BIT', 'age' => 22)
  );

  foreach ($students as $student) {
    echo "<tr>";
    echo "<td>" . $student['name'] . "</td>";
    echo "<td>" . $student['program'] . "</td>";
    echo "<td>" . $student['age'] . "</td>";
    echo "</tr>";
  }
  ?>
</table>
</body>
</html>
