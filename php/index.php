<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>ekiliSites Builder</title>
<script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-neutral-900 text-neutral-100 min-h-screen flex items-center justify-center">
    <div class="w-full max-w-lg bg-neutral-800 rounded-xl shadow-lg p-8">
        <h1 class="text-3xl font-bold text-green-400 mb-6 text-center">ekiliSites Builder</h1>
        <form method="POST" action="php/build.php">
            <div class="mb-5">
                <label class="block text-sm font-medium mb-2" for="fname">First Name</label>
                <input type="text" name="fname" id="fname" class="w-full px-4 py-2 bg-neutral-700 border border-neutral-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-green-500 text-neutral-100" required>
            </div>
            <div class="mb-5">
                <label class="block text-sm font-medium mb-2" for="lname">Last Name</label>
                <input type="text" name="lname" id="lname" class="w-full px-4 py-2 bg-neutral-700 border border-neutral-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-green-500 text-neutral-100" required>
            </div>
            <div class="mb-5">
                <label class="block text-sm font-medium mb-2" for="email">Email</label>
                <input type="email" name="email" id="email" class="w-full px-4 py-2 bg-neutral-700 border border-neutral-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-green-500 text-neutral-100" required>
            </div>
            <div class="mb-5">
                <label class="block text-sm font-medium mb-2" for="tel">Phone Number</label>
                <input type="tel" name="tel" id="tel" class="w-full px-4 py-2 bg-neutral-700 border border-neutral-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-green-500 text-neutral-100" required>
            </div>
            <div class="mb-5">
                <label class="block text-sm font-medium mb-2" for="expertise">Expertise</label>
                <input type="text" name="expertise" id="expertise" class="w-full px-4 py-2 bg-neutral-700 border border-neutral-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-green-500 text-neutral-100" required>
            </div>
            <div class="mb-5">
                <label class="block text-sm font-medium mb-2" for="bio">About</label>
                <textarea name="bio" id="bio" rows="4" class="w-full px-4 py-2 bg-neutral-700 border border-neutral-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-green-500 text-neutral-100"></textarea>
            </div>
            <button type="submit" class="w-full bg-green-500 hover:bg-green-600 text-neutral-100 font-bold py-3 rounded-lg transition-colors">Build Website</button>
        </form>
    </div>
</body>
</html>
