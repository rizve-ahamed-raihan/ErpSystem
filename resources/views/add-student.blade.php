
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Document</title>
</head>
<body>
    <div class="min-h-screen flex items-center justify-center bg-gray-100">
  <div class="w-full max-w-lg bg-white p-8 rounded-lg shadow-lg">
    <h1 class="text-3xl font-bold mb-6 text-center text-gray-800">Add New Student</h1>
    
    <form action="" method="post" class="space-y-5">
      @csrf
      
      <div>
        <label for="name" class="block text-gray-700 font-medium mb-1">Name</label>
        <input type="text" id="name" name="name" placeholder="Enter Name"
               class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
      </div>
      
      <div>
        <label for="email" class="block text-gray-700 font-medium mb-1">Email</label>
        <input type="email" id="email" name="email" placeholder="Enter Email"
               class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
      </div>
      
      <div>
        <label for="phone" class="block text-gray-700 font-medium mb-1">Phone Number</label>
        <input type="text" id="phone" name="phone" placeholder="Enter Phone Number"
               class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
      </div>
      
      <button type="submit"
              class="w-full bg-blue-500 text-white font-semibold py-2 px-4 rounded-md hover:bg-blue-600 transition-colors">
        Add Student
      </button>
    </form>
  </div>
</div>

</body>
</html>