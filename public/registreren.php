<?php require_once 'header.php';
    require_once '../src/userFunctions.php';


    $newUser = null;
    if(isset($_POST['register'])){
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $newUser = registerUser($firstname, $lastname, $email, $password);
    }
?>

    <div class="page registreren">
        <div class="container">
            <h1>Registreren</h1>
            <?php if($newUser !== null ){?>
                <p>Nieuwe gebruiker succesvol toegevoegd!</p>
            <?php } else { ?>
                <form action="#" method="post">
                    <div class="inputrow">
                        <label for="firstname">Voornaam</label>
                        <input type="text" name="firstname">
                    </div>
                    <div class="inputrow">
                        <label for="lastname">Achternaam</label>
                        <input type="text" name="lastname">
                    </div>
                    <div class="inputrow">
                        <label for="email">Email</label>
                        <input type="email" name="email">
                    </div>
                    <div class="inputrow">
                        <label for="password">Password</label>
                        <input type="password" name="password">
                    </div>
                    <div class="inputrow">
                        <input type="submit" value="Registreer" name="register">
                    </div>
                </form>
                <?php } ?>
        </div>
    </div>
    <?php require_once 'footer.php';?>
