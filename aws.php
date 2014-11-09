<?php

if ($_POST['pass'] == '<your password>') {
    echo "<p>Success! Please wait for the machine to boot up. You will receive an email when it's ready to connect.</p>";
    exec('python ./aws.py');
    exit(0);
}
else {
    echo "<p>Invalid password!</p>";
}

?>

<form method="post" action="./aws.php">
<span>Input password:</span>
<input type="password" name="pass" />
<input type="submit" />
</form>
