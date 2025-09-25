<!doctype html>
<html>
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="p-6 bg-gradient-to-r from-blue-50 via-white to-pink-50 min-h-screen">

  
  <div class="max-w-6xl mx-auto">
    <!-- Page Header -->
    <div class="flex items-center justify-between mb-8">
      <h1 class="text-3xl font-bold text-gray-800 flex items-center gap-2">📋 Customer List</h1>
      
      <!-- Add Student Button -->
      <a href="{{ url('/') }}" 
         class="inline-flex items-center gap-2 px-5 py-3 bg-gradient-to-r from-blue-600 to-blue-500 
                text-white font-semibold rounded-xl shadow-lg hover:from-blue-700 hover:to-blue-600 
                active:scale-95 transition-transform duration-200">
        ➕ Add Customer
      </a>
    </div>

    <!-- Table -->
    <div class="overflow-x-auto rounded-2xl shadow-lg bg-white">
      <table class="min-w-full table-auto border-collapse">
        <thead class="bg-gradient-to-r from-blue-100 to-blue-50 text-gray-700">
          <tr>
            <th class="border-b px-6 py-4 text-left uppercase tracking-wider">Name</th>
            <th class="border-b px-6 py-4 text-left uppercase tracking-wider">Email</th>
            <th class="border-b px-6 py-4 text-left uppercase tracking-wider">Phone</th>
            <th class="border-b px-6 py-4 text-left uppercase tracking-wider">Created</th>
            <th class="border-b px-6 py-4 text-left uppercase tracking-wider">Operation</th>
          </tr>
        </thead>
        <tbody class="divide-y divide-gray-200">
          @foreach($students as $student)
          <tr class="hover:bg-blue-50 transition duration-200">
            <td class="px-6 py-4 text-gray-800 font-medium">{{ $student->name }}</td>
            <td class="px-6 py-4 text-gray-700">{{ $student->email }}</td>
            <td class="px-6 py-4 text-gray-700">{{ $student->phone }}</td>
            <td class="px-6 py-4 text-sm text-gray-500">{{ $student->created_at }}</td>
            <td class="px-6 py-4 flex gap-3">
              <a href="{{'edit/'.$student->id}}" 
                 class="px-3 py-1 bg-blue-100 text-blue-700 rounded-full text-sm font-semibold hover:bg-blue-200 transition">
                 Edit
              </a>
              <a href="{{'delete/'.$student->id}}" 
                 class="px-3 py-1 bg-red-100 text-red-700 rounded-full text-sm font-semibold hover:bg-red-200 transition">
                 Delete
              </a>

               <a href="{{'entryform/'.$student->id}}" 
                 class="px-3 py-1 bg-blue-100 text-green-700 rounded-full text-sm font-semibold hover:bg-blue-200 transition">
                 Go
              </a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>

</body>
</html>
