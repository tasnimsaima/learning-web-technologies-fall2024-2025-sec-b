<h1>Blood Group Input</h1>

<!-- Task 6A: Redirect to handler page -->
<form action="handler.php" method="post">
    <label for="blood_group">Blood Group (Handler Page): </label>
    <select name="blood_group" id="blood_group">
        <option value="A+">A+</option>
        <option value="O-">O-</option>
    </select>
    <button type="submit">Submit</button>
</form>

<!-- Task 6B & 6C: Handle on current page -->
<?php
$blood_group = isset($_POST['blood_group_current']) ? $_POST['blood_group_current'] : '';
?>
<form action="" method="post">
    <label for="blood_group_current">Blood Group (Current Page): </label>
    <select name="blood_group_current" id="blood_group_current">
        <option value="A+" <?php echo $blood_group == 'A+' ? 'selected' : ''; ?>>A+</option>
        <option value="O-" <?php echo $blood_group == 'O-' ? 'selected' : ''; ?>>O-</option>
    </select>
    <button type="submit">Submit</button>
</form>
<?php if ($blood_group): ?>
    <p>Blood Group: <?php echo htmlspecialchars($blood_group); ?></p>
<?php endif; ?>
