<?php include 'config.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Smart Resume Builder</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
<div class="max-w-2xl mx-auto py-10">
    <h1 class="text-3xl font-bold mb-5 text-center">Smart Resume Builder</h1>
    <form action="generate.php" method="POST" class="bg-white p-6 rounded shadow">
        <input type="text" name="name" placeholder="Full Name" required class="block w-full border p-2 mb-3">
        <input type="email" name="email" placeholder="Email" required class="block w-full border p-2 mb-3">
        <input type="text" name="title" placeholder="Job Title" required class="block w-full border p-2 mb-3">
        <textarea name="summary" placeholder="Professional Summary" required class="block w-full border p-2 mb-3"></textarea>
        <textarea name="experience" placeholder="Work Experience" required class="block w-full border p-2 mb-3"></textarea>
        <textarea name="education" placeholder="Education" required class="block w-full border p-2 mb-3"></textarea>
        <textarea name="skills" placeholder="Skills (comma-separated)" required class="block w-full border p-2 mb-3"></textarea>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Generate Resume</button>
    </form>
</div>
</body>
</html>