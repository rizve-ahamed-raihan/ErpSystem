<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Add Customer</title>
</head>
<body class="bg-gradient-to-br from-gray-100 to-gray-200 min-h-screen flex flex-col items-center pt-10">
  
  <!-- Welcome Header -->
  <h1 class="text-5xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-indigo-600 to-purple-600 drop-shadow-lg mb-10">
    Welcome to ERP System
  </h1>

  <div class="w-full max-w-lg bg-white p-10 rounded-2xl shadow-xl border border-gray-100">
  
    <!-- Title -->
    <h2 class="text-4xl font-extrabold text-center text-gray-800 mb-8">
      ➕ Add New Customer
    </h2>

    <!-- Form -->
    <form action="" method="post" class="space-y-6">
      @csrf
      
      <!-- Name -->
      <div>
        <label for="name" class="block text-gray-700 font-semibold mb-2">Full Name</label>
        <input type="text" id="name" name="name" placeholder="Enter full name"
          class="w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition">
      </div>
      
      <!-- Email -->
      <div>
        <label for="email" class="block text-gray-700 font-semibold mb-2">Email Address</label>
        <input type="email" id="email" name="email" placeholder="Enter email address"
          class="w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition">
      </div>
      
      <!-- Phone -->
      <div>
        <label for="phone" class="block text-gray-700 font-semibold mb-2">Phone Number</label>
        <input type="text" id="phone" name="phone" placeholder="Enter phone number"
          class="w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition">
      </div>
      
      <!-- Submit Button -->
      <button type="submit"
        class="w-full bg-gradient-to-r from-blue-500 to-blue-700 text-white font-semibold py-3 rounded-lg shadow-md hover:from-blue-600 hover:to-blue-800 active:scale-95 transform transition duration-200">
        🚀 Add Customer
      </button>
    </form>

    <!-- Divider -->
    <div class="flex items-center my-6">
      <hr class="flex-grow border-gray-300">
      <span class="mx-2 text-gray-400">or</span>
      <hr class="flex-grow border-gray-300">
    </div>

    <!-- Student List Button -->
    <a href="{{ url('/list') }}" 
      class="block text-center px-6 py-3 bg-gradient-to-r from-green-500 to-green-700 
      text-white font-semibold rounded-lg shadow-md hover:from-green-600 hover:to-green-800 
      active:scale-95 transform transition duration-200">
      📋 View Customer List
    </a>
  </div>

</body>
</html>
