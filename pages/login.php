<?php require_once './partials/head.php';

    $head = head('Login');

?>

<html>
    <?php echo $head ?>
    <body>
        <div class="w-screen h-screen flex justify-center items-center">
            <div class="p-4">
                <form action="/">
                    <div class="p-2">
                        <input type="text" name="username" placeholder="username"/>
                    </div>
                    <div class="p-2">
                        <input type="text" name="username" placeholder="username"/>
                    </div>
                    <div class="p-2">
                        <button>Login</button>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>