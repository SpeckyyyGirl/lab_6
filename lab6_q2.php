<!DOCTYPE html>
<html>
<body>

<table>
  <tr>
    <th>Name</th>
    <th>Program</th>
    <th>Age</th>
  </tr>
  <?php
  $students = array(
      'Alice' => array('program' => 'BIP', 'age' => 21),
      'Bob' => array('program' => 'BIS', 'age' => 20),
      'Raju' => array('program' => 'BIT', 'age' => 22)
  );

  foreach ($students as $name => $student) {
      echo "<tr>";
      echo "<td>" . $name . "</td>";
      echo "<td>" . $student['program'] . "</td>";
      echo "<td>" . $student['age'] . "</td>";
      echo "</tr>";
  }
  ?>
</table>

</body>
</html>
