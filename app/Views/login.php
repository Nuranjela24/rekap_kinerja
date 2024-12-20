<html>

<head>
  <title>
    Rekap Penilaian Karyawan
  </title>
  <script src="https://cdn.tailwindcss.com">
  </script>
</head>

<body class="bg-blue-50 flex items-center justify-center min-h-screen">
  <div class="w-full max-w-md p-8 space-y-8 bg-white rounded-lg shadow-md">
    <div class="flex justify-center">
      <img alt="Hospital logo with text Rumah Sakit Borneo Citra Medika" height="100" src="/assets/images/rsbcm.png" width="200" />
    </div>
    <h2 class="mt-6 text-center text-2xl font-bold text-purple-600">
      Rekap Penilaian Karyawan
    </h2>
    <?php if (session()->has('msg')): ?>
      <div class="alert alert-danger">
        <?php echo session()->getFlashdata('msg'); ?>
      </div>
    <?php endif; ?>
    <form class="mt-8 space-y-6" action="<?php echo base_url('/login_proses') ?>" method="post">
      <div class="rounded-md shadow-sm -space-y-px">
        <div>
          <label class="sr-only" for="username">Username</label>
          <input autocomplete="username" class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-blue-500 focus:border-blue-500 focus:z-10 sm:text-sm" id="username" name="username" placeholder="Username" required="" type="text" />
        </div><br>
        <div>
          <label class="sr-only" for="password">Password</label>
          <input autocomplete="current-password" class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-blue-500 focus:border-blue-500 focus:z-10 sm:text-sm" id="password" name="password" placeholder="Password" required="" type="password" />
        </div>
      </div>
      <div class="flex items-center justify-between">
        <div class="flex items-center">
          <input class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded" id="remember_me" name="remember_me" type="checkbox" />
          <label class="ml-2 block text-sm text-gray-900" for="remember_me">
            Remember Me
          </label>
        </div>
        <div class="text-sm">
          <a class="font-medium text-purple-600 hover:text-purple-500" href="#">
            Forgot Password
          </a>
        </div>
      </div>
      <div>
        <button class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-purple-600 hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500" type="submit">
          Login
        </button>
      </div>
    </form>
    <p class="mt-2 text-center text-sm text-gray-600">
      Versi 1.4.0
    </p>
    <p class="mt-2 text-center text-sm text-gray-600">
      2024 © RS Borneo Citra Medika
    </p>
  </div>
</body>

</html>