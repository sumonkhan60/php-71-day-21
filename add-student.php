<?php

    require_once 'vendor/autoload.php';
    use App\classes\Student;
    $message = '';
    if(isset($_POST['btn'])) {
        $message = Student::saveStudentInfo($_POST);
    }
?>

<hr>
<a href="add-student.php">Add student</a>||
<a href="view-student.php">View student</a>
<h1 style="color: green; "><?php echo $message; ?></h1>
<hr>
<form action="" method="post">
    <table>
        <tr>
            <th>Name</th>
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
            <th>Email</th>
            <td><input type="email" name="email"></td>
        </tr>
        <tr>
            <th>Mobile</th>
            <td><input type="number" name="mobile"></td>
        </tr>
        <tr>
            <th></th>
            <td><input type="submit" name="btn" value="SubmiT"></td>
        </tr>
    </table>
</form>
