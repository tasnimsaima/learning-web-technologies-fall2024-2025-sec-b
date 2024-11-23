<h1>Gender Input</h1>

<!-- Task 4A: Redirect to handler page -->
<form action="handler.php" method="post">
    <p>Gender (Handler Page): </p>
    <label><input type="radio" name="gender" value="Male"> Male</label>
    <label><input type="radio" name="gender" value="Female"> Female</label>
    <button type="submit">Submit</button>
</form>

<!-- Task 4B & 4C: Handle on current page -->
<?php
$gender = isset($_POST['gender_current']) ? $_POST['gender_current'] : '';
?>
<form action="" method="post">
    <p>Gender (Current Page): </p>
    <label><input type="radio" name="gender_current" value="Male" <?php echo $gender == 'Male' ? 'checked' : ''; ?>> Male</label>
    <label><input type="radio" name="gender_current" value="Female" <?php echo $gender == 'Female' ? 'checked' : ''; ?>> Female</label>
    <button type="submit">Submit</button>
</form>
<?php if ($gender): ?>
    <p>Gender: <?php echo htmlspecialchars($gender); ?></p>
<?php endif; ?>
