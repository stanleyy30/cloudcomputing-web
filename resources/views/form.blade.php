<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cloud Computing 2025 Registration</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
  <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
</head>

<body class="bg-gradient-to-br from-gray-900 via-gray-800 to-black min-h-screen flex items-center justify-center font-sans">
  <div class="w-full max-w-md bg-gray-950/60 backdrop-blur-md border border-gray-800 rounded-2xl shadow-2xl p-8">
    <h1 class="text-3xl font-bold text-center text-indigo-400 mb-2">Cloud Computing 2025</h1>
    <p class="text-center text-gray-400 mb-8">Registration Form</p>

    @if (session('success'))
      <div class="mb-6 p-4 text-green-400 bg-green-900/30 rounded-lg border border-green-700 text-center">
        {{ session('success') }}
      </div>
    @endif

    @if ($errors->any())
      <div class="mb-6 p-4 text-red-400 bg-red-900/30 rounded-lg border border-red-700">
        <ul class="list-disc ml-5">
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <form action="{{ route('form.store') }}" method="POST" class="space-y-5">
      @csrf

      <div>
        <label class="block mb-1 text-sm font-medium text-gray-300">Full Name</label>
        <input type="text" name="full_name" value="{{ old('full_name') }}" placeholder="Enter your full name"
          class="w-full px-4 py-3 rounded-lg bg-gray-800 border border-gray-700 text-white focus:ring-2 focus:ring-indigo-500 focus:outline-none">
      </div>

      <div>
        <label class="block mb-1 text-sm font-medium text-gray-300">Student Email</label>
        <input type="email" name="email" value="{{ old('email') }}" placeholder="Enter your student email"
          class="w-full px-4 py-3 rounded-lg bg-gray-800 border border-gray-700 text-white focus:ring-2 focus:ring-indigo-500 focus:outline-none">
      </div>

      <div>
        <label class="block mb-1 text-sm font-medium text-gray-300">Password</label>
        <input type="password" name="password" placeholder="Create a secure password"
          class="w-full px-4 py-3 rounded-lg bg-gray-800 border border-gray-700 text-white focus:ring-2 focus:ring-indigo-500 focus:outline-none">
      </div>

      <div>
        <label class="block mb-1 text-sm font-medium text-gray-300">Confirm Password</label>
        <input type="password" name="password_confirmation" placeholder="Confirm your password"
          class="w-full px-4 py-3 rounded-lg bg-gray-800 border border-gray-700 text-white focus:ring-2 focus:ring-indigo-500 focus:outline-none">
      </div>

      <div>
        <label class="block mb-1 text-sm font-medium text-gray-300">Birthdate</label>
        <input id="birthdate" type="text" name="birthdate" placeholder="Select your birthdate"
          class="w-full px-4 py-3 rounded-lg bg-gray-800 border border-gray-700 text-white focus:ring-2 focus:ring-indigo-500 focus:outline-none">
      </div>

      <button type="submit"
        class="w-full py-3 bg-indigo-600 hover:bg-indigo-700 transition-all rounded-xl font-semibold text-white shadow-lg hover:shadow-indigo-500/50">
        Register for Cloud Computing 2025
      </button>
    </form>
  </div>

  <script>
    flatpickr("#birthdate", {
      dateFormat: "Y-m-d",
      maxDate: "today",
      altInput: true,
      altFormat: "F j, Y",
      theme: "dark",
    });
  </script>
</body>
</html>