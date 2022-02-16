<?php
include 'includes/head.php';
?>

<!DOCTYPE html>
<html>
    <body>
        <div class="content">
            <div class="welkombox">
                <div class="welkomtext">
                    <h1>Hier kunt u inloggen</h1>
                </div>
            </div>    
            <div class="emailbox">
                 <form method="post" action="checkcode.php">
                    <div class="code">
                        <h3><label for="code">Uw inlog code:</label><br></h3>
                        <input maxlength="8" minlength="8" class="code" type="text" name="code" id="code"></input>
                    </div>
                    <div class="button">
                        <button class="buttonlogin" type="submitcode">Code valideren</button>
                    </div>
                </form>
            </div>
        </div>  
    </body>
</html>

