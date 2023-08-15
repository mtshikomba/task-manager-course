<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>CarLender Waitlist</title>
</head>
<body class="bg-gray-100">
    <!-- ... (previous content) ... -->

    <div class="container mx-auto p-8">
        <!-- ... (headline, CTA, and form code) ... -->
        <h1 class="text-4xl font-bold mb-4">Join the CarLender Waitlist</h1>
        <p class="text-gray-600">Be the first to know when we launch our car lending service.</p>
        <a href="#" class="mt-4 inline-block px-6 py-3 bg-blue-500 text-white rounded-lg shadow-lg hover:bg-blue-600 transition duration-300 ease-in-out">
            Join the Waitlist
        </a>
        <form class="mt-8">
            <div class="mb-4">
                <label for="email" class="block text-gray-700">Email:</label>
                <input type="email" id="email" name="email" class="mt-1 px-4 py-2 w-full border rounded-lg focus:outline-none focus:border-blue-500">
            </div>
            <button type="submit" class="px-6 py-3 bg-blue-500 text-white rounded-lg shadow-lg hover:bg-blue-600 transition duration-300 ease-in-out">
                Sign Up
            </button>
        </form>
        <div class="mt-8">
            <h2 class="text-xl font-semibold mb-2">What People Are Saying</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="p-4 bg-white border rounded-lg shadow-md">
                    <p class="text-gray-700 mb-2">"CarLender made car shopping so easy. Can't wait for the launch!"</p>
                    <p class="text-blue-500 font-medium">- Jane Doe</p>
                </div>
                <div class="p-4 bg-white border rounded-lg shadow-md">
                    <p class="text-gray-700 mb-2">"I've been waiting for a service like this. Excited to see it happen."</p>
                    <p class="text-blue-500 font-medium">- John Smith</p>
                </div>
            </div>
            <div class="mt-8">
                <h2 class="text-xl font-semibold mb-2">Progress Tracker</h2>
                <div class="relative pt-1">
                    <div class="flex mb-2 items-center justify-between">
                        <div>
                            <span class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-teal-600 bg-teal-200">
                                Step 1
                            </span>
                        </div>
                        <div class="text-right">
                            <span class="text-xs font-semibold inline-block text-teal-600">
                                25%
                            </span>
                        </div>
                    </div>
                    <div class="overflow-hidden h-2 mb-4 text-xs flex rounded bg-teal-200">
                        <div style="width: 25%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-teal-500"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
