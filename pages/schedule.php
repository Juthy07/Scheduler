<?php require_once '../components/partials/head.php';

    $head = head('Add Schedule');

?>

<html>
    <?php echo $head ?>
    <body>
        <div class="container mx-auto">
            <div class="w-2/3 mx-auto mt-8">
                <form action="">
                    <!-- Add Title -->
                    <div class="w-full mb-8">
                            <input type="text" class="w-full p-3 border" placeholder="Add a title">
                    </div>
                    <!-- Task Creator -->
                    <div id="task-container" class="grid grid-cols-1 gap-y-4 mb-4">
                        <!-- Task -->
                        <div class="task flex gap-4">
                            <div class="flex-1">
                                <input type="text" class="w-full p-3 border" placeholder="Activity name" />
                            </div>
                            <div>
                                <input type="text" class="w-30 p-3 border" placeholder="Activity time" />
                            </div>
                            <div class="">
                                <button
                                    type="button"
                                    class="border rounded-full h-12 w-12 text-xl hover:bg-red-600 hover:text-white"
                                    onclick="removeRow(e)">
                                    -
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- Task Adder -->
                    <div class="flex justify-center">
                        <button type="button" class="border rounded-full h-12 w-12 hover:bg-purple-600 hover:text-white" onclick="addRow()">+</button>
                    </div>
                    <div class="flex gap-4 ml-auto justify-end mt-8">
                        <button class="border p-3 hover:bg-purple-600 hover:text-white"><a href="../pages/dashboard.php">Save</button>                
                        <button class="border p-3 hover:bg-red-600 hover:text-white">Cancel</button>                
                    </div>    
                </form>
            </div>
        </div>
        <script>

            function addRow() {
                // alert()
                const taskContainer = document.getElementById('task-container');
                const rowString = `
                            <div class="task flex gap-4">
                                <div class="flex-1">
                                    <input type="text" class="w-full p-3 border" placeholder="Activity name" />
                                </div>
                                <div>
                                    <input type="text" class="w-30 p-3 border" placeholder="Activity time" />
                                </div>
                                <div class="">
                                    <button class="border rounded-full h-12 w-12 text-xl hover:bg-red-600 hover:text-white">-</button>
                                </div>
                            </div>
                        `;
                
                const domParser = new DOMParser();
                const htmlDoc = domParser.parseFromString(rowString, 'text/html');
                const rowHTML = htmlDoc.querySelector('.task');
                taskContainer.appendChild(rowHTML);
                console.log(htmlDoc)
                console.log(rowHTML)
            }

            function removeRow(e) {
                console.log(e);
            }
        </script>
    </body>
</html>