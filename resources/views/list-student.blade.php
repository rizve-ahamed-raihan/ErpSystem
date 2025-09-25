<!doctype html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  </head>
  <body class="p-6">
    <h1 class="text-xl font-bold mb-4">Student List</h1>

    <div class="overflow-x-auto">
      <table class="table-auto border border-gray-300 w-full bg-sky-100">
        <thead class="bg-gray-100">
          <tr>
            <th class="border px-4 py-2 text-left">Name</th>
            <th class="border px-4 py-2 text-left">Email</th>
            <th class="border px-4 py-2 text-left">Phone</th>
            <th class="border px-4 py-2 text-left">Created</th>
            <th class="border px-4 py-2 text-left">Operation</th>
          </tr>
        </thead>
        <tbody>
          @foreach($students as $student)
          <tr class="hover:bg-gray-50">
            <td class="border px-4 py-2">{{ $student->name }}</td>
            <td class="border px-4 py-2">{{ $student->email }}</td>
            <td class="border px-4 py-2">{{ $student->phone }}</td>
            <td class="border px-4 py-2">{{ $student->created_at }}</td>
            <td
             class="border px-4 py-2">
             <a href="{{'delete/'.$student->id}}">Delete</a>
             <a href="{{'edit/'.$student->id}}">Edit</a>
            </td>
          </tr>
          @endforeach

        
        </tbody>
      </table>
    </div>
    <br/> <br/>
    <div >
        <form action=" " method="post">
            @csrf
            <button class ="flex items-center justify-center px-6 py-2 bg-blue-600 text-white font-medium rounded-lg 
         hover:bg-blue-700 active:scale-95 transition transform">Add New Student</button>
          </form>
    </div>
  </body>
</html>
