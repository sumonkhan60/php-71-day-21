<?php

require_once 'vendor/autoload.php';
use App\classes\Student;

$id = $_GET['id'];
$queryResult = Student::getStudentInfoById($id);
$studentInfo = mysqli_fetch_assoc($queryResult);
//echo '<pre>';
//print_r($studentInfo);



$message = '';
if(isset($_POST['btn'])) {
    Student::updateStudentInfo($_POST);
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
            <td>
                <input type="text" name="name" value="<?php echo $studentInfo['name']; ?>">
                <input type="hidden" name="id" value="<?php echo $studentInfo['id']; ?>">
            </td>
        </tr>
        <tr>
            <th>Email</th>
            <td><input type="email" name="email" value="<?php echo $studentInfo['email']; ?>"></td>
        </tr>
        <tr>
            <th>Mobile</th>
            <td><input type="number" name="mobile" value="<?php echo $studentInfo['mobile']; ?>"></td>
        </tr>
        <tr>
            <th></th>
            <td><input type="submit" name="btn" value="Update"></td>
        </tr>
    </table>
</form>

