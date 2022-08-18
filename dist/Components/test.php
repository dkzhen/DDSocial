<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="../public/Styles/index.css" rel="stylesheet" />
  <link rel="shortcut icon" href="../Assets/images/logo.png">
  <title>Dashboard</title>
</head>

<body>
  <div class="flex items-center justify-center dropdown dropdown-end">
    <button onclick="toggle()" tabindex="0" class="btn btn-ghost btn-circle avatar">
      <div class="w-10 rounded-full">
        <img src="../Assets/images/profil.jpg" />
      </div>
    </button>
    <ul id="tes" tabindex="0" class="mt-3 p-2 shadow menu menu-compact dropdown-content bg-white rounded-box w-52 text-black">
      <li>
        <a href="../../Components/profil.php" class="justify-between">
          Profile
          <span class="badge bg-red-500 text-white border-transparent">New</span>
        </a>
      </li>
      <li><a>Settings</a></li>
      <li><a>Logout</a></li>
    </ul>
  </div>
</body>
<script>
  function toggle() {
    const toggle = document.getElementById('tes');

    if (toggle.style.display === 'block') {
      toggle.style.display = 'none';
    } else {
      toggle.style.display = 'block';
    }
  }
</script>

</html>