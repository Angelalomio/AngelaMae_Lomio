<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Special+Elite&family=EB+Garamond:wght@500&display=swap" rel="stylesheet">
</head>

<body class="min-h-screen flex items-center justify-center font-serif bg-gradient-to-b from-[#f5f1e6] to-[#e0d4c3] text-gray-800 relative">
  <!-- Background Texture -->
  <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/paper-fibers.png')] opacity-30"></div>

  <div class="relative z-10 w-full max-w-xl px-6 animate-fadeIn">
    <div class="bg-[#fdfaf5] border-4 border-[#4a3728] rounded-2xl shadow-2xl relative overflow-hidden">
      <!-- Inner Border -->
      <div class="absolute inset-2 border-2 border-[#8b6b4f] rounded-xl pointer-events-none"></div>

      <div class="px-10 py-12 relative z-10">
        <!-- Header -->
        <div class="flex flex-col items-center mb-8">
          <div class="bg-[#8b6b4f] rounded-full p-4 mb-4 shadow-md">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-[#fdfaf5]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
            </svg>
          </div>
          <h2 class="text-3xl font-bold text-[#4a3728] font-['Special_Elite'] tracking-wide">Update Record</h2>
          <p class="text-[#6b5a4a] mt-2 text-center italic font-['EB_Garamond']">Edit your information below</p>
        </div>

        <form action="<?=site_url('users/update/'.$user['id'])?>" method="POST" class="space-y-6">
          <!-- First Name -->
          <div>
            <label class="block text-[#4a3728] mb-1 font-bold font-['EB_Garamond']">First Name</label>
            <div class="flex items-center bg-[#fdfaf5] border border-[#b0977b] rounded-md px-4 py-3 shadow-inner">
              <svg class="w-6 h-6 text-[#8b6b4f] mr-3" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5.121 17.804A13.937 13.937 0 0112 15c2.5 0 4.847.655 6.879 1.804M15 11a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
              <input type="text" name="first_name" value="<?= html_escape($user['first_name'])?>" required class="w-full bg-transparent focus:outline-none px-2 py-1 text-gray-800 placeholder-gray-500">
            </div>
          </div>

          <!-- Last Name -->
          <div>
            <label class="block text-[#4a3728] mb-1 font-bold font-['EB_Garamond']">Last Name</label>
            <div class="flex items-center bg-[#fdfaf5] border border-[#b0977b] rounded-md px-4 py-3 shadow-inner">
              <svg class="w-6 h-6 text-[#8b6b4f] mr-3" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5.121 17.804A13.937 13.937 0 0112 15c2.5 0 4.847.655 6.879 1.804M15 11a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
              <input type="text" name="last_name" value="<?= html_escape($user['last_name'])?>" required class="w-full bg-transparent focus:outline-none px-2 py-1 text-gray-800 placeholder-gray-500">
            </div>
          </div>

          <!-- Email -->
          <div>
            <label class="block text-[#4a3728] mb-1 font-bold font-['EB_Garamond']">Email Address</label>
            <div class="flex items-center bg-[#fdfaf5] border border-[#b0977b] rounded-md px-4 py-3 shadow-inner">
              <svg class="w-6 h-6 text-[#8b6b4f] mr-3" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M16 12H8m8 0a4 4 0 11-8 0 4 4 0 018 0zm0 0v1a2 2 0 01-2 2H10a2 2 0 01-2-2v-1" /></svg>
              <input type="email" name="email" value="<?= html_escape($user['email'])?>" required class="w-full bg-transparent focus:outline-none px-2 py-1 text-gray-800 placeholder-gray-500">
            </div>
          </div>

          <!-- Button -->
          <button type="submit" class="w-full bg-[#8b6b4f] hover:bg-[#6e523d] text-[#fdfaf5] font-bold py-3 rounded-md shadow-lg transition duration-300 font-['Special_Elite'] tracking-wide mt-2">
            <span class="inline-flex items-center justify-center gap-2">
              <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" /></svg>
              Update
            </span>
          </button>
        </form>
      </div>
    </div>
  </div>

  <!-- Vintage Animations -->
  <style>
    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(40px); }
      to { opacity: 1; transform: translateY(0); }
    }
    .animate-fadeIn {
      animation: fadeIn 1.2s ease-out;
    }
  </style>
</body>
</html>
