<?php require_once '../components/partials/head.php';

    $head = head('Login');

?>

<html>
    <?php echo $head ?>
    <body>
        <div class="w-screen h-screen flex justify-center items-center">
            <div class="p-4 border">
                <h1 class="text-xl border-b">Login</h1>
                <form action="/">
                    <div class="p-2">
                        <input type="text" name="username" placeholder="username"/>
                    </div>
                    <div class="p-2">
                        <input type="password" name="username" placeholder="********"/>
                    </div>
                    <div class="p-2">
                        <button>Login</button>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>