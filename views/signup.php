

<h1 id="top-heading">Sign Up</h1>

<div id="center-box">

    <?php
        $errorMessage = "";
        if ($error == 'length')
            $errorMessage = "Username must be at least 3 characters";
        else if ($error == "syntax")
            $errorMessage = "Password must contain at least one lower case letter, one upper case later and one number";
        else if ($error == "passwordlength")
            $errorMessage = "Password must be at least 8 characters";
     ?>

     <p> <?php echo $errorMessage ?> </p>

<form class="validation-form" action="index.php?controller=signup&action=show" method="post">
    <ul>
    <li><input type="text" placeholder="username" name="username" value='<?php echo $username?>'/></li>
    <li><input type="password" name="password" placeholder="password" /></li>
    <li><input type="text" name="email" placeholder="email address" value='<?php echo $email ?>'/></li>
    <li><input type="password" name="repeat" placeholder="repeat password" /></li>
    <li><input type="submit" value="Sign Up"/></li>
</ul>
</form>

</div>