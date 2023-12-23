<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Sign Up Page</title>
</head>
<body class="bg-gray-100">

<div class="min-h-screen flex items-center justify-center">
    <div class="bg-white p-8 rounded shadow-md w-96">
        <h2 class="text-2xl font-semibold mb-6">Sign Up</h2>

        <form action="../../public/index.php" method="POST">
            <!-- Username -->
            <div class="mb-4">
                <label for="username" class="block text-gray-600 text-sm font-medium mb-2">Username</label>
                <input type="text" id="username" name="username" class="w-full border rounded-md py-2 px-3 focus:outline-none focus:border-blue-500" required>
            </div>

            <!-- Full Name -->
            <div class="mb-4">
                <label for="fullname" class="block text-gray-600 text-sm font-medium mb-2">Full Name</label>
                <input type="text" id="fullname" name="fullname" class="w-full border rounded-md py-2 px-3 focus:outline-none focus:border-blue-500" required>
            </div>

            <!-- Phone Number -->
            <div class="mb-4">
                <label for="phone" class="block text-gray-600 text-sm font-medium mb-2">Phone Number</label>
                <input type="tel" id="phone" name="phone" class="w-full border rounded-md py-2 px-3 focus:outline-none focus:border-blue-500" required>
            </div>

            <!-- Email -->
            <div class="mb-4">
                <label for="email" class="block text-gray-600 text-sm font-medium mb-2">Email</label>
                <input type="email" id="email" name="email" class="w-full border rounded-md py-2 px-3 focus:outline-none focus:border-blue-500" required>
            </div>

            <!-- Password -->
            <div class="mb-4">
                <label for="password" class="block text-gray-600 text-sm font-medium mb-2">Password</label>
                <input type="password" id="password" name="password" class="w-full border rounded-md py-2 px-3 focus:outline-none focus:border-blue-500" required>
            </div>

            <!-- Confirm Password -->
            <div class="mb-6">
                <label for="confirmPassword" class="block text-gray-600 text-sm font-medium mb-2">Confirm Password</label>
                <input type="password" id="confirmPassword" name="confirmPassword" class="w-full border rounded-md py-2 px-3 focus:outline-none focus:border-blue-500" required>
            </div>

            <button type="submit" name="submitup" class="w-full bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600">Sign Up</button>
        </form>
    </div>
</div>

</body>
</html>
