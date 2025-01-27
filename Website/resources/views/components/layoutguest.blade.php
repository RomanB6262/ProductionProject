<!DOCTYPE html>
<html class="h-full bg-gray-100">
  <head>
    <title>PhishGuard</title>
    <script src="https://cdn.tailwindcss.com/"></script>
  </head>

  <body class="h-full">
  <div class="min-h-full">
    <!-- Navigation -->
    <nav class="bg-white shadow-md">
      <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
          <!-- Logo Section -->
          <div class="absolute top+4 left-2 p-4">
            <img class="h-16 w-24" src="/img/logo.png" alt="My Logo">
          </div>

          <!-- Navigation Links -->
          <div class="hidden md:flex flex-1 justify-evenly items-center">
            <a href="/" class="rounded-md px-3 py-2 text-lg font-bold text-black">Dashboard</a>
            <a class="rounded-md px-3 py-2 text-lg font-bold text-black">|</a>
            <a href="/" class="rounded-md px-3 py-2 text-lg font-bold text-black">Report A Phishing Website</a>
            <a class="rounded-md px-3 py-2 text-lg font-bold text-black">|</a>
            <a href="/" class="rounded-md px-3 py-2 text-lg font-bold text-black">Help & Info</a>
            <a class="rounded-md px-3 py-2 text-lg font-bold text-black">|</a>
            <a href="/login" class="rounded-md px-3 py-2 text-lg font-bold text-black">Profile</a>
            <a class="rounded-md px-3 py-2 text-lg font-bold text-black">|</a>
            <a href="/register" class="rounded-md px-3 py-2 text-lg font-bold text-black">Register/Login</a>
            <a class="rounded-md px-3 py-2 text-lg font-bold text-black">|</a>
            <a href="/" class="rounded-md px-3 py-2 text-lg font-bold text-black">En</a>
          </div>
        </div>
      </div>
    </nav>

      <!-- Header -->
      <header class="bg-gray-100 shadow-sm">
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
           {{ $heading }}
        </div>
      </header>

      <!-- Main Content -->
      <main class="bg-gray-50 w-full min-h-screen">
          {{ $content }}
        </div>
      </main>

      <!-- Footer -->
      <footer>
        <div class="bg-gray-800 shadow"> 
            <div class="mx-auto max-w-7xl px-4 py-4 sm:px-6 lg:px-8">
            {{ $footer }}
            <div class="hidden md:block">
            <div class="hidden md:flex flex-1 justify-evenly items-center">
                <span class="rounded-md px-3 py-2 text-base font-medium text-white hover:text-black">Terms of Use</span>
                <span class="rounded-md px-3 py-2 text-base font-medium text-white hover:text-black">Privacy Policy</span>
                <span class="rounded-md px-3 py-2 text-base font-medium text-white hover:text-black">Cookie Policy</span>
                <span class="rounded-md px-3 py-2 text-base font-medium text-white hover:text-black">Help</span>
                <span class="rounded-md px-3 py-2 text-base font-medium text-white hover:text-black">FAQ</span>
                </div>
            <p class="text-gray-400">&copy; 2025 PhishGuard. All rights reserved.</p>  
            </div>
        </div>
      </footer>
</html>
