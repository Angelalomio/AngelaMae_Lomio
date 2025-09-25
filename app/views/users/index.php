<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Students Table</title>
  <link rel="stylesheet" href="<?=base_url();?>/public/style.css">
  <script src="https://cdn.tailwindcss.com"></script>
</head>


<body class="relative min-h-screen font-sans bg-gradient-to-br from-fuchsia-900 via-blue-800 to-cyan-400 overflow-hidden">
  
<!-- Hero Section with SVG Wave -->
  <div class="absolute inset-0 z-0">
   
    <div class="absolute inset-0 bg-gradient-to-br from-fuchsia-900/80 via-blue-800/70 to-cyan-400/60"></div>
    <svg class="absolute bottom-0 left-0 w-full h-40" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="0.7" d="M0,224L48,197.3C96,171,192,117,288,117.3C384,117,480,171,576,197.3C672,224,768,224,864,197.3C960,171,1056,117,1152,117.3C1248,117,1344,171,1392,197.3L1440,224L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
  </div>

  <!-- Navbar -->
  <nav class="relative z-10 bg-gradient-to-r from-fuchsia-700 to-cyan-500 shadow-xl animate-fadeIn">
    <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">
      <a href="#" class="text-white font-extrabold text-3xl tracking-widest flex items-center gap-3 drop-shadow-lg">
        <svg class="w-9 h-9 text-white animate-bounce" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 7v4a1 1 0 001 1h16a1 1 0 001-1V7M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" /></svg>
        Students Table
      </a>
      <a href="<?=site_url('users/create')?>" class="inline-block bg-gradient-to-r from-emerald-400 to-fuchsia-500 hover:from-emerald-500 hover:to-fuchsia-600 text-white font-bold px-7 py-3 rounded-full shadow-xl transition duration-200 text-lg tracking-wide animate-fadeIn">
        <span class="inline-flex items-center gap-2">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" /></svg>
          Create New User
        </span>
      </a>
    </div>
  </nav>

  <!-- Main Content -->
  <div class="relative z-10 max-w-6xl mx-auto mt-16 px-4">
    <div class="backdrop-blur-2xl bg-white/40 border border-white/60 shadow-2xl rounded-3xl p-10 animate-fadeIn" style="box-shadow: 0 10px 40px 0 rgba(120,0,255,0.15), 0 2px 4px 0 rgba(0,0,0,0.10);">
      <!-- Header -->
      <div class="flex justify-between items-center mb-10">
        <h1 class="text-4xl font-extrabold text-fuchsia-800 drop-shadow flex items-center gap-3 tracking-tight">
          <svg class="w-10 h-10 text-cyan-400 animate-spin-slow" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2" fill="none"/><path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6l4 2" /></svg>
          Users
        </h1>
      </div>

   
 <!-- Search Bar -->
<form method="get" action="<?=site_url()?>" class="search-bar">
  <input 
    type="text" 
    name="q" 
    value="<?=html_escape($_GET['q'] ?? '')?>" 
    placeholder="Search student..." 
    class="search-input">
  <button type="submit" class="search-btn">
    <i class="fa fa-search"></i>
  </button>
</form>


      <!-- Table -->
      <div class="overflow-x-auto rounded-xl shadow-lg">
        <table class="w-full text-center border-collapse backdrop-blur bg-white/70">
          <thead>
            <tr class="bg-gradient-to-r from-fuchsia-600 to-cyan-400 text-white text-lg">
              <th class="py-4 px-5">ID</th>
              <th class="py-4 px-5">Lastname</th>
              <th class="py-4 px-5">Firstname</th>
              <th class="py-4 px-5">Email</th>
              <th class="py-4 px-5">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach(html_escape($users) as $user): ?>
              <tr class="hover:bg-fuchsia-100/60 transition duration-300 group">
                <td class="py-4 px-5 font-bold text-fuchsia-900/90 group-hover:scale-110 transition-transform duration-200"><?=($user['id']);?></td>
                <td class="py-4 px-5 text-gray-800/90 group-hover:text-fuchsia-700"><?=($user['last_name']);?></td>
                <td class="py-4 px-5 text-gray-800/90 group-hover:text-fuchsia-700"><?=($user['first_name']);?></td>
                <td class="py-4 px-5">
                  <span class="bg-cyan-100/80 text-cyan-700 text-sm font-semibold px-4 py-2 rounded-full shadow group-hover:bg-fuchsia-200 group-hover:text-fuchsia-700 transition-colors duration-200">
                    <?=($user['email']);?>
                  </span>
                </td>
                <td class="py-4 px-5">
                  <a href ="<?=site_url('users/update/'.$user['id']);?>" class="text-cyan-700 hover:text-fuchsia-700 font-bold underline underline-offset-4 transition-colors duration-200">Update</a> |
                  <a href ="<?=site_url('users/delete/'.$user['id']);?>" onclick="return confirm('Are you sure you want to delete this record?');" class="text-fuchsia-700 hover:text-red-600 font-bold underline underline-offset-4 transition-colors duration-200">Delete</a>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>

        </table>

      </div>
      <!-- Pagination -->
<div class="mt-4 flex justify-center">
  <div class="pagination flex space-x-2">
      <?=$page ?? ''?>
  </div>
</div>
    </div>
  </div>

  <!-- Custom Animations -->

  </style>
</body>
</html>