<h1>Email Input</h1>

<!-- Task 2A: Redirect to handler page -->
<form action="handler.php" method="post">
    <label for="email">Email (Handler Page): </label>
    <input type="email" name="email" id="email">
    <button type="submit">Submit</button>
</form>

<!-- Task 2B & 2C: Handle on current page -->
<?php
$email = isset($_POST['email_current']) ? $_POST['email_current'] : '';
?>
<form action="" method="post">
    <label for="email_current">Email (Current Page): </label>
    <input type="email" name="email_current" id="email_current" value="<?php echo htmlspecialchars($email); ?>">
    <button type="submit">Submit</button>
</form>
<?php if ($email): ?>
    <p>Email: <?php echo htmlspecialchars($email); ?></p>
<?php endif; ?>
