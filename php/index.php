<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>ekiliSites Builder</title>
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-900 text-white min-h-screen flex items-center justify-center">
    <div class="w-full max-w-lg bg-gray-800 rounded-lg shadow-lg p-8">
        <h1 class="text-2xl font-bold text-green-500 mb-5">ekiliSites Builder</h1>
        <form method="POST" action="build.php">
            <div class="mb-4">
                <label class="block text-sm font-medium mb-2" for="fname">First Name</label>
                <input type="text" name="fname" id="fname" class="w-full px-4 py-2 bg-gray-700 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500" required>
            </div>
            <div class="mb-4">
                <label class="block text-sm font-medium mb-2" for="lname">Last Name</label>
                <input type="text" name="lname" id="lname" class="w-full px-4 py-2 bg-gray-700 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500" required>
            </div>
            <div class="mb-4">
                <label class="block text-sm font-medium mb-2" for="email">Email</label>
                <input type="email" name="email" id="email" class="w-full px-4 py-2 bg-gray-700 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500" required>
            </div>
            <div class="mb-4">
                <label class="block text-sm font-medium mb-2" for="tel">Phone Number</label>
                <input type="tel" name="tel" id="tel" class="w-full px-4 py-2 bg-gray-700 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500" required>
            </div>
            <div class="mb-4">
                <label class="block text-sm font-medium mb-2" for="expertise">Expertise</label>
                <input type="text" name="expertise" id="expertise" class="w-full px-4 py-2 bg-gray-700 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500" required>
            </div>
            <div class="mb-4">
                <label class="block text-sm font-medium mb-2" for="bio">About</label>
                <textarea name="bio" id="bio" rows="4" class="w-full px-4 py-2 bg-gray-700 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500"></textarea>
            </div>
            <button type="submit" class="w-full bg-green-500 hover:bg-green-600 text-white font-bold py-2 rounded-md">Build Website</button>
        </form>
    </div>
</body>
</html>
