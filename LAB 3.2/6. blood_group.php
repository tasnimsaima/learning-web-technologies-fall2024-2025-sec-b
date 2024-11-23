<!DOCTYPE html>
<html>
<head>
    <title>Blood Group Selection</title>
</head>
<body>
    <h1>Blood Group Selection</h1>
    <?php
    $bloodGroupError = '';
    $bloodGroup = '';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (empty($_POST['blood_group'])) {
            $bloodGroupError = "Please select a blood group.";
        } else {
            $bloodGroup = $_POST['blood_group'];
        }
    }
    ?>
    <form action="" method="post">
        <label for="blood_group">Blood Group:</label>
        <select name="blood_group" id="blood_group">
            <option value="">Select</option>
            <option value="A+" <?php echo $bloodGroup == 'A+' ? 'selected' : ''; ?>>A+</option>
            <option value="O-" <?php echo $bloodGroup == 'O-' ? 'selected' : ''; ?>>O-</option>
        </select>
        <span style="color:red;"><?php echo $bloodGroupError; ?></span><br><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
