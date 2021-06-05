<?php require_once '../components/partials/head.php';

    $head = head('Dashboard');

?>

<html>
    <?php echo $head ?>
    <body>
        <div class="container mx-auto">
            <!-- Search bar -->
            <div class="w-full flex items-center p-4 gap-8">
                <div class="flex-1">
                    <input type="text" class="w-full border p-3" placeholder="Search">
                </div>
                <div class="">
                    <button class="p-3 text-center bg-purple-600 text-white">
                        Create Schedule
                    </button>
                </div>
            </div>
            <!-- Search results -->
            <div class="grid grid-cols-6 py-4 gap-x-4 gap-y-8">
                <!-- Card -->
                <div class="relative p-2 border shadow-sm h-20 text-center hover:shadow-xl">
                    <p class="font-bold w-full">
                        Title
                    </p>
                    <div class="absolute left-0 bottom-0 flex w-full">
                        <button class="button flex-1 border hover:bg-purple-600 hover:text-white p-2">Edit</button>
                        <button class="button flex-1 border hover:bg-red-600 hover:text-white p-2">Delete</button>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>