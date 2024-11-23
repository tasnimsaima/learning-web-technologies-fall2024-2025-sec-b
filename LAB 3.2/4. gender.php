<!DOCTYPE html>
<html>
<head>
    <title>Gender Selection</title>
</head>
<body>
    <h1>Gender Selection</h1>
    <?php
    $genderError = '';
    $gender = '';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (!isset($_POST['gender'])) {
            $genderError = "Please select a gender.";
        } else {
            $gender = $_POST['gender'];
        }
    }
    ?>
    <form action="" method="post">
        <label><input type="radio" name="gender" value="Male" <?php echo $gender == 'Male' ? 'checked' : ''; ?>> Male</label>
        <label><input type="radio" name="gender" value="Female" <?php echo $gender == 'Female' ? 'checked' : ''; ?>> Female</label>
        <span style="color:red;"><?php echo $genderError; ?></span><br><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
