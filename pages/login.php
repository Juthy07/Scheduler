<?php require_once '../components/partials/head.php';

    $head = head('Login');

?>

<html>
    <?php echo $head ?>
    <body>
        <div class="w-screen h-screen flex justify-center items-center">
            <div class="p-4 border shadow-md">
                <h1 class="text-xl pb-2 border-b mb-4">Login</h1>
                <form method="POST" action="loginprocess.php">
                    <div class="p-2">
                        <input class="border p-2" type="text" name="username" placeholder="username"/>
                    </div>
                    <div class="p-2">
                        <input class="border p-2"  type="password" name="password" placeholder="********"/>
                    </div>
                    <div class="p-2">
                    <button name="submit" class="w-full border bg-purple-600 text-white p-2 shadow-sm hover:shadow-xl">Login</a></button>
                    </div>
                    <div class="text-center pt-6">
                        New User? <a class=" hover:text-purple-600" href="../pages/register.php">Register here!
                    </div>
                </form> 
            </div>
        </div>
    </body>
</html>