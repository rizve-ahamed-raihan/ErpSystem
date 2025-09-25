<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Update Student</title>
</head>
<body>
<div class="min-h-screen flex items-center justify-center bg-gray-100">
  <div class="w-full max-w-lg bg-white p-8 rounded-xl shadow-xl">
    <h1 class="text-3xl font-bold mb-6 text-center text-gray-800">Update Student Data</h1>
    
    <form action="/edit-student/{{ $data->id }}" method="post" class="space-y-6">
      @csrf
      <input type="hidden" name="_method" value="put"/> 

      <div>
        <label for="name" class="block text-gray-700 font-medium mb-2">Name</label>
        <input type="text" id="name" name="name" value="{{ $data->name }}" placeholder="Enter Name"
               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition">
      </div>
      
      <div>
        <label for="email" class="block text-gray-700 font-medium mb-2">Email</label>
        <input type="email" id="email" name="email" value="{{ $data->email }}" placeholder="Enter Email"
               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition">
      </div>
      
      <div>
        <label for="phone" class="block text-gray-700 font-medium mb-2">Phone Number</label>
        <input type="text" id="phone" name="phone" value="{{ $data->phone }}" placeholder="Enter Phone Number"
               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition">
      </div>
      
      <div class="flex gap-4">
        <button type="submit"
                class="flex-1 bg-blue-500 text-white font-semibold py-3 rounded-lg hover:bg-blue-600 transition duration-200">
          Update Data
        </button>
        <a href="/list"
           class="flex-1 text-center bg-gray-300 text-gray-800 font-semibold py-3 rounded-lg hover:bg-gray-400 transition duration-200">
          Cancel
        </a>
      </div>
    </form>
  </div>
</div>
</body>
</html>
