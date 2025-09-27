<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Users</title>
  <link rel="stylesheet" href="<?=base_url();?>public/style.css">
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Special+Elite&family=EB+Garamond:wght@500&display=swap" rel="stylesheet">
</head>

<body class="relative min-h-screen font-serif bg-gradient-to-b from-[#f5f1e6] to-[#e0d4c3] text-gray-800">
  <!-- Background Texture -->
  <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/paper-fibers.png')] opacity-30"></div>

  <!-- Navbar -->
  <nav class="relative z-10 bg-[#8b6b4f] shadow-md border-b-4 border-[#4a3728]">
    <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">
      <a href="#" class="text-[#fdfaf5] font-['Special_Elite'] text-3xl tracking-wide flex items-center gap-3">
        <svg class="w-8 h-8 text-[#fdfaf5]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" d="M3 7v4a1 1 0 001 1h16a1 1 0 001-1V7M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
        </svg>
        Users
      </a>
      <a href="<?=site_url('users/create')?>" class="inline-block bg-[#6e523d] hover:bg-[#4a3728] text-[#fdfaf5] font-bold px-6 py-2 rounded-md shadow-md transition duration-200 font-['Special_Elite']">
        <span class="inline-flex items-center gap-2">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
          </svg>
          Create New User
        </span>
      </a>
    </div>
  </nav>

  <!-- Main Content -->
  <div class="relative z-10 max-w-6xl mx-auto mt-16 px-4">
    <div class="bg-[#fdfaf5] border-4 border-[#4a3728] rounded-2xl shadow-2xl relative overflow-hidden animate-fadeIn">
      
      <!-- Inner Frame -->
      <div class="absolute inset-2 border-2 border-[#8b6b4f] rounded-xl pointer-events-none"></div>

      <div class="p-10 relative z-10">
        <!-- Header -->
        <div class="mb-8 text-center">
          <h1 class="text-3xl font-bold text-[#4a3728] font-['Special_Elite'] tracking-wide flex items-center justify-center gap-3">
            <svg class="w-8 h-8 text-[#8b6b4f]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2" fill="none"/>
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6l4 2" />
            </svg>
            Users List
          </h1>
        </div>

        <!-- Search Form -->
        <div class="flex justify-center mb-10">
          <form action="<?= site_url('/'); ?>" method="get" 
                class="flex items-center w-full max-w-md bg-[#fdfaf5] border-2 border-[#8b6b4f] rounded-full shadow-md overflow-hidden">
            
            <?php
            $q = '';
            if(isset($_GET['q'])) {
                $q = $_GET['q'];
            }
            ?>

            <div class="flex items-center w-full px-3">
              <svg xmlns="http://www.w3.org/2000/svg" 
                  fill="none" viewBox="0 0 24 24" 
                  stroke-width="2" stroke="currentColor" 
                  class="w-5 h-5 text-[#6e523d]">
                <path stroke-linecap="round" stroke-linejoin="round" 
                      d="M21 21l-4.35-4.35M17 10.5a6.5 6.5 0 11-13 0 6.5 6.5 0 0113 0z" />
              </svg>
              <input 
                type="text" 
                name="q" 
                placeholder="Search user..." 
                value="<?= html_escape($q); ?>" 
                id="searchBox"
                class="w-full px-3 py-2 bg-transparent text-gray-700 focus:outline-none font-['EB_Garamond']"
              >
            </div>

            <button 
              type="submit" 
              class="bg-[#6e523d] hover:bg-[#4a3728] text-[#fdfaf5] font-bold px-5 py-2 rounded-r-full transition duration-200 font-['Special_Elite']"
            >
              Search
            </button>
          </form>
        </div>

        <!-- Table -->
        <div class="overflow-x-auto rounded-lg shadow-md">
          <table class="w-full text-center border-collapse">
            <thead>
              <tr class="bg-[#8b6b4f] text-[#fdfaf5] font-['EB_Garamond'] text-lg">
                <th class="py-3 px-4">ID</th>
                <th class="py-3 px-4">Lastname</th>
                <th class="py-3 px-4">Firstname</th>
                <th class="py-3 px-4">Email</th>
                <th class="py-3 px-4">Action</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-[#b0977b]">
              <?php foreach(html_escape($users) as $user): ?>
                <tr class="hover:bg-[#f5f1e6] transition duration-200">
                  <td class="py-3 px-4 font-bold text-[#4a3728]"><?=($user['id']);?></td>
                  <td class="py-3 px-4 text-[#6b5a4a]"><?=($user['last_name']);?></td>
                  <td class="py-3 px-4 text-[#6b5a4a]"><?=($user['first_name']);?></td>
                  <td class="py-3 px-4">
                    <span class="bg-[#e0d4c3] text-[#4a3728] text-sm font-semibold px-3 py-1 rounded-md shadow">
                      <?=($user['email']);?>
                    </span>
                  </td>
                  <td class="py-3 px-4">
                    <a href="<?=site_url('users/update/'.$user['id']);?>" class="text-[#6e523d] hover:text-[#4a3728] font-bold underline underline-offset-2">Update</a> |
                    <a href="<?=site_url('users/delete/'.$user['id']);?>" onclick="return confirm('Are you sure you want to delete this record?');" class="text-[#8b3d3d] hover:text-red-700 font-bold underline underline-offset-2">Delete</a>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>

        <!-- Pagination -->
        <div class="mt-6 flex justify-center">
          <div class="pagination flex space-x-2">
              <?=$page ?? ''?>
          </div>
        </div>

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
