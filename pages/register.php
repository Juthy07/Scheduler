<?php require_once '../components/partials/head.php';

    $head = head('Register');

?>

<html>
    <?php echo $head ?>
    <body>
        <div class="w-screen h-screen flex justify-center items-center">
            <div class="p-4 border shadow-md">
                <h1 class="text-xl pb-2 border-b mb-4">Register</h1>
                <form action="/">
                    <div class="p-2">
                        <input class="border p-2" type="text" name="username" placeholder="username"/>
                    </div>
                    <div class="p-2">
                        <input class="border p-2"  type="password" name="password" placeholder="********"/>
                    </div>
                    <div class="p-2">
                        <input class="border p-2"  type="password" name="re-password" placeholder="********"/>
                    </div>
                    <div class="p-2">
                        <button class="w-full border bg-purple-600 text-white p-2">Register</button>
                    </div>
                </form> 
            </div>
        </div>
    </body>
</html>