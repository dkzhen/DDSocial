<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="../Styles/index.css" rel="stylesheet" />
  <link rel="shortcut icon" href="../Assets/images/logo.png">
  <title>Dashboard</title>
</head>

<body>
  <!-- Navbar -->
  <div class="bg-white">
    <div class="navbar bg-primary">
      <div class="flex-1">
        <a class="btn btn-ghost normal-case text-xl text-black">D&D</a>
      </div>
      <div class="flex-none gap-2">
        <div class="form-control ">
          <input type="text" placeholder="Search" class=" input bg-transparent border-solid border-slate-800 input-bordered" />
        </div>
        <div class="dropdown dropdown-end">
          <label tabindex="0" class="btn btn-ghost btn-circle avatar">
            <div class="w-10 rounded-full">
              <img src="../Assets/images/profil.jpg" />
            </div>
          </label>
          <ul tabindex="0" class="mt-3 p-2 shadow menu menu-compact dropdown-content bg-white rounded-box w-52 text-black">
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
      </div>
    </div>
  </div>
  <!-- Navbar -->

  <!-- post -->
  <?php
  $noUser= empty($_SESSION['user']);
  if($noUser===true){
  echo'<p></p>';
}else{
  echo'<div class="navbar bg-white shadow-xl border-b-2">
  <div class="flex-1 w-screen">
    <label tabindex="0" class="btn btn-ghost btn-circle avatar">
      <div class="w-10 rounded-full">
        <a href="../../Components/profil.php"><img src="../Assets/images/profil.jpg" /></a>
      </div>
    </label>
    <a href="../../Components/post.php" class="btn w-full lg:w-auto lg:pl-20 pr-20 normal-case bg-transparent hover:bg-transparent text-black border-hidden">Whats on your mind?</a>
  </div>
</div>';
}
  ?>
  <!-- post -->

  <!-- view -->

  <div class="flex flex-wrap justify-center items-center text-black bg-white w-screen px-5 lg:gap-11 mb-3">
    <?php
    include '../../Controllers/database.php';
    if (isset($_SESSION['browser']) || !isset($_SESSION['ip']) || empty($_SESSION['user'])) {
      $query = mysqli_query($conn, "SELECT * FROM datas WHERE audience ='public'");
      while ($data = mysqli_fetch_array($query)) {
        echo '<div class="card w-96 my-5 bg-primary shadow-xl">
      <figure>
        ';
        $images = $data['img'];
        if ($images == 1) {
          echo "<p></p>";
        } else {
          echo "<img src='../Assets/images/$data[img]' width='100%' height='100%'/>";
        }
        echo '</figure>
      <div class="card-body">
        <h2 class="card-title">';
        $datas = [
          'nama' => $data['nama'],
          'text' => $data['text'],
          'audience' => $data['audience'],
          'img' => $data['img']
        ];
        echo '<a href="../../Components/profilPublicSession.php?datas='.
        $datas['nama'];
        echo '">'.
        $data['nama'];
        echo '</a>
          <div class="badge badge-secondary">NEW</div>
        </h2>
        <p>';
        $text = $data['text'];
        if (empty($text)) {
          echo "Sorry! Content Not Available";
        } else {
          echo $data['text'];
        }
        echo '</p>
        </p>
        <div class="card-actions justify-end">
          <div class="sm:mr-badges md:mr-badges lg:mr-badges"><span class="bg-gray-100 text-gray-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded mr-2 dark:bg-gray-700 dark:text-gray-300">
              <svg class="mr-1 w-3 h-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"></path>
              </svg>
              3 days ago
            </span></div>
          <div class="badge badge-outline">'.
        $data['audience'];
        echo '</div>
          <div class="badge badge-outline">Products</div>
        </div>
      </div>
    </div>';
      }
    }else{
      $query2 = mysqli_query($conn, "SELECT * FROM datas WHERE nama='$nama' OR nama!='$nama' AND audience ='public'");
      while ($data = mysqli_fetch_array($query2)) {
        echo '<div class="card w-96 my-5 bg-primary shadow-xl">
      <figure>
        ';
        $images = $data['img'];
        if ($images == 1) {
          echo "<p></p>";
        } else {
          echo "<img src='../Assets/images/$data[img]' width='100%' height='100%'/>";
        }
        echo '</figure>
      <div class="card-body">
        <h2 class="card-title">';
        $datas = [
          'nama' => $data['nama'],
          'text' => $data['text'],
          'audience' => $data['audience'],
          'img' => $data['img']
        ];
        echo '<a href="../../Components/profilPublicSession.php?datas=';
        $datas['nama'];
        echo '">'.
        $data['nama'];
        echo '</a>
          <div class="badge badge-secondary">NEW</div>
        </h2>
        <p>';
        $text = $data['text'];
        if (empty($text)) {
          echo "Sorry! Content Not Available";
        } else {
          echo $data['text'];
        }
        echo '</p>
        </p>
        <div class="card-actions justify-end">
          <div class="sm:mr-badges md:mr-badges lg:mr-badges"><span class="bg-gray-100 text-gray-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded mr-2 dark:bg-gray-700 dark:text-gray-300">
              <svg class="mr-1 w-3 h-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"></path>
              </svg>
              3 days ago
            </span></div>
          <div class="badge badge-outline">'.
        $data['audience'];
        echo '</div>
          <div class="badge badge-outline">Products</div>
        </div>
      </div>
    </div>';
      }
    }
    ?>
  </div>
  <div class="bg-white text-black -mt-6 flex flex-col justify-center items-center rounded-t-lg">
    <p class="p-4">Copyright @2021 Dani Kurniawan</p>
  </div>
  <!-- view -->
</body>

</html>