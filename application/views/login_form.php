<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
</head>

<body>
    <h2>Login</h2>
    <?php if ($this->session->flashdata('error')) : ?>
        <ul>
            <li><?php echo $this->session->flashdata('error'); ?></li>
        </ul>
    <?php endif; ?>
    <?php echo form_open('login'); ?>
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required><br>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required><br>
    <input type="submit" value="Login">
    <?php echo form_close(); ?>
</body>

</html>