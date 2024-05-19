<!DOCTYPE html>
<html lang="en">
<head>
 <title>Lab 6 Q1</title>
</head>
<body>
    <?php
        $name = "NATASHA BINTI KHAIRULNIZAM";
        $matric_number = "DI220010";
        $course = "BIT";
        $year_of_study = "Year 2 Semester 1";
        $address = "9, Jalan Orkid 16, Taman Orkid, 86000 Kluang, Johor"
    ?>

    <table>
    <tr>
        <td>Name</td>
        <td><?php echo "$name"; ?></td>
    </tr>

    <tr>
        <td>Matric Number</td>
        <td><?php echo "$matric_number"; ?></td>
    </tr>

    <tr>
        <td>Course</td>
        <td><?php echo "$course"; ?></td>
    </tr>

    <tr>
        <td>Year of Study</td>
     <td><?php echo "$year_of_study"; ?></td>
    </tr>

    <tr>
        <td>Address</td>
        <td><?php echo "$address"; ?></td>
    </tr>
    </table>

</body>
</html>