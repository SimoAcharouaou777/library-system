<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Book Collection</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>
<body class="bg-gray-100">

    <div class="container mx-auto my-8">
        <h1 class="text-3xl font-bold mb-4">Your Book Collection</h1>

        <div id="bookList" class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Book items will be dynamically added here -->
            <div class="grid grid-cols-1 gap-4 md:grid-cols-3 max-w-xl">
                <!-- Book 1 -->
                <div class="bg-white p-4 rounded shadow-md">
                    <h3 class="text-xl font-bold mb-2">Book 1</h3>
                    <p class="text-gray-600">Author: Author 1</p>
                    <p class="text-gray-600">Copies: 2</p>
                    <p class="text-gray-600">Year: 2020</p>
                    <button class="bg-blue-500 text-white px-4 py-2 mt-2 rounded">Reserve</button>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
