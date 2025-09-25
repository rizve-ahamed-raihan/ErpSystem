<!doctype html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  </head>
  <body class="p-6 bg-gray-50 min-h-screen">
    <div class="max-w-6xl mx-auto">
      <!-- Page Header -->
      <div class="flex items-center justify-between mb-6">
        <h1 class="text-2xl font-bold text-gray-800">📋 Student List</h1>
        
        <!-- Add Student Button -->
        <a href="{{ url('/') }}" 
           class="inline-flex items-center gap-2 px-5 py-2.5 bg-gradient-to-r from-blue-600 to-blue-500 
                  text-white font-semibold rounded-xl shadow-md hover:from-blue-700 hover:to-blue-600 
                  active:scale-95 transition-transform duration-200">
          ➕ Add Student
        </a>
      </div>

      <!-- Table -->
      <div class="overflow-x-auto rounded-xl shadow-md bg-white">
        <table class="table-auto border-collapse w-full">
          <thead class="bg-gray-100 text-gray-700">
            <tr>
              <th class="border px-4 py-3 text-left">Name</th>
              <th class="border px-4 py-3 text-left">Email</th>
              <th class="border px-4 py-3 text-left">Phone</th>
              <th class="border px-4 py-3 text-left">Created</th>
              <th class="border px-4 py-3 text-left">Operation</th>
            </tr>
          </thead>
          <tbody class="divide-y divide-gray-200">
            @foreach($students as $student)
            <tr class="hover:bg-gray-50 transition">
              <td class="px-4 py-3">{{ $student->name }}</td>
              <td class="px-4 py-3">{{ $student->email }}</td>
              <td class="px-4 py-3">{{ $student->phone }}</td>
              <td class="px-4 py-3 text-sm text-gray-500">{{ $student->created_at }}</td>
              <td class="px-4 py-3 flex gap-3">
                <a href="{{'edit/'.$student->id}}" 
                   class="text-blue-600 hover:underline font-medium">Edit</a>
                <a href="{{'delete/'.$student->id}}" 
                   class="text-red-600 hover:underline font-medium">Delete</a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </body>
</html>
