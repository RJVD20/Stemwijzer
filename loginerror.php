<?php
include 'includes/head.php';
?>

<!DOCTYPE html>
<html>
    <body>

        <div class="content">
            <div class="alert alert-danger" role="alert">
                Deze code is niet gevonden in onze database, controlleer de code en probeer het opnieuw
                </div>
            <div class="welkombox">
                <div class="welkomtext">
                    <h1>Hier kunt u inloggen</h1>
                </div>
            </div>    
            <div class="emailbox">
                 <form method="post" action="checkcode.php">
                    <div class="code">
                        <h3><label for="code">Uw inlog code:</label><br></h3>
                        <input class="code" type="text" name="code"></input>
                    </div>
                    <div class="button">
                        <button class="buttonlogin"type="submit">Code valideren</button>
                    </div>
                </form>
            </div>
        </div>  
    </body>
</html>

