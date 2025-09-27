<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Users</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Special+Elite&family=EB+Garamond:wght@400;500;600&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'EB Garamond', serif;
    }
    .vintage-title {
      font-family: 'Special Elite', cursive;
    }
  </style>
</head>

<body class="min-h-screen bg-gradient-to-br from-[#f5f0e6] to-[#d6cbbc] flex flex-col">

  <!-- Navbar -->
  <nav class="bg-[#5a4634] shadow-md border-b-4 border-[#3d2e22]">
    <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">
      <a href="#" class="text-white vintage-title text-3xl tracking-wider flex items-center gap-3">
        Users
      </a>
      <a href="<?=site_url('users/create')?>" 
        class="bg-[#7c5a3a] hover:bg-[#5c4129] text-white font-semibold px-6 py-2 rounded-lg shadow border border-[#3d2e22] transition">
        Create New User
      </a>
    </div>
  </nav>

  <!-- Main Container -->
  <div class="flex-grow flex justify-center items-start py-12 px-4">
    <div class="w-full max-w-6xl bg-[#f9f6f1] border-4 border-[#5c4129] rounded-2xl shadow-xl p-10">

      <!-- Header -->
      <div class="flex justify-between items-center mb-8">
        <h1 class="text-4xl vintage-title text-[#4a3628] tracking-wide">Users</h1>
      </div>

      <!-- Search Bar -->
      <form method="get" action="<?=site_url()?>" class="mb-6 flex items-center gap-2">
        <input 
          type="text" 
          name="q" 
          value="<?=html_escape($_GET['q'] ?? '')?>" 
          placeholder="Search user..." 
          class="flex-grow border border-[#7c5a3a] rounded-lg px-4 py-2 bg-[#fdfaf6] focus:outline-none focus:ring-2 focus:ring-[#7c5a3a]" />
        <button 
          type="submit" 
          class="px-4 py-2 bg-[#7c5a3a] text-white rounded-lg shadow hover:bg-[#5c4129] transition">
          Search
        </button>
      </form>

      <!-- Table -->
      <div class="overflow-x-auto border border-[#7c5a3a] rounded-xl">
        <table class="w-full text-left border-collapse">
          <thead class="bg-[#7c5a3a] text-white">
            <tr>
              <th class="py-3 px-4">ID</th>
              <th class="py-3 px-4">Lastname</th>
              <th class="py-3 px-4">Firstname</th>
              <th class="py-3 px-4">Email</th>
              <th class="py-3 px-4 text-center">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach(html_escape($users) as $user): ?>
              <tr class="border-b border-[#e0d8cd] hover:bg-[#f1ebe4]">
                <td class="py-3 px-4"><?=($user['id']);?></td>
                <td class="py-3 px-4"><?=($user['last_name']);?></td>
                <td class="py-3 px-4"><?=($user['first_name']);?></td>
                <td class="py-3 px-4"><?=($user['email']);?></td>
                <td class="py-3 px-4 text-center">
                  <a href="<?=site_url('users/update/'.$user['id']);?>" 
                    class="text-blue-700 hover:underline mr-2">Update</a>
                  <a href="<?=site_url('users/delete/'.$user['id']);?>" 
                    onclick="return confirm('Are you sure you want to delete this record?');" 
                    class="text-red-700 hover:underline">Delete</a>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>

      <!-- ✅ Pagination (UNCHANGED) -->
      <div class="mt-4 flex justify-center">
        <div class="pagination flex space-x-2">
            <?=$page ?? ''?>
        </div>
      </div>

    </div>
  </div>

</body>
</html>
