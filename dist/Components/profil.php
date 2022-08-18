<?php
include '../Middleware/profil.php';
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="../public/Styles/profil.css" rel="stylesheet" />
    <link rel="shortcut icon" href="../public/Assets/images/logo.png">
    <title></title>
</head>

<body>

    <div class=" flex flex-wrap justify-center  min-h-screen bg-white">
        <div class="  bg-primary w-full h-auto">
            <!-- bg profil -->
            <div class="flex flex-col justify-start text-red-500  items-start m-3">
                <a href="../public/App/index.php" class="bg-white rounded-full p-2 border-solid border-2 border-black z-50">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2M3 12l6.414 6.414a2 2 0 001.414.586H19a2 2 0 002-2V7a2 2 0 00-2-2h-8.172a2 2 0 00-1.414.586L3 12z" />
                    </svg>
                </a>
            </div>
            <div class="flex flex-col justify-center items-center -mt-20">
                <div class="w-full">
                    <img class="w-screen h-[250px] " src="../public/Assets/images/profil.jpg" alt="">
                </div>
            </div>
            <div class="flex flex-col justify-center text-black -mt-14 items-end pr-3 pb-2">
                <div class="bg-white rounded-full p-2 border-solid border-2 border-black">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                </div>
            </div>
            <!-- bg profil -->
            <!-- profil -->
            <div class="-mt-[100px]  flex flex-col justify-center items-center">
                <div class="">
                    <img class="rounded-full w-48" src="../public/Assets/images/profil.jpg" alt="">
                </div>
            </div>
            <div class="flex flex-col justify-center items-center text-black -mt-10 ml-28">
                <div class="bg-white rounded-full p-2 border-solid border-2 border-black">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                </div>
            </div>
            <!-- profil -->
            <!-- nama -->
            <?php
            include '../Controllers/database.php';
            $nama = $_SESSION['user'];
          
            $query = mysqli_query($conn, "SELECT * FROM datas WHERE nama='$nama' ORDER BY id DESC");
            $data = mysqli_fetch_array($query)
            ?>
            <div class="flex flex-col justify-center items-center text-black ">
                <h1 class="text-black font-medium text-2xl"><?= $data['nama']; ?></h1>
            </div>
            <!-- nama -->
            <!-- bio -->
            <div class="flex flex-col justify-center items-center text-black ">
                <p class=" -mt-8 p-10 text-center text-lg">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Adipisci corrupti quod deserunt reiciendis saepe iusto cum quo minus nam itaque?</p>
            </div>
            <!-- bio -->
            <!-- button edit -->
            <div class="flex justify-center items-center border-b border-slate-600 pb-4">
                <div class="flex flex-col justify-center items-center text-black ">
                    <div class="flex flex-wrap justify-center gap-8 items-center ">
                        <div class="flex gap-2 border-solid border-2 border-black rounded-md bg-blue-500 text-white py-2 px-4 text-base shadow-lg ">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                                <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd" />
                            </svg>
                            <button class="font-sans">Edit profile</button>
                        </div>
                        <div class="flex gap-2 border-solid border-2 border-black rounded-md bg-black text-white py-2 px-4 text-base">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <button class="font-sans">Add Story</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- button edit -->
            <!-- Biodata -->
            <div class="flex flex-col justify-center items-start border-b border-slate-600 pb-4">
                <div class="mt-2 flex  ml-5 text-black ">
                    <div class="text-lg">
                        <ul>
                            <div class="flex gap-2 ">
                                <svg xmlns="http://www.w3.org/2000/svg" class=" h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                </svg>
                                <li>Lives in Pekalongan</li>
                            </div>
                            <div class="flex gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                <li>From Samarinda</li>
                            </div>
                            <div class="flex gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                                <li>Work at PT.JayaKusuma</li>
                            </div>
                            <div class="flex gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path d="M12 14l9-5-9-5-9 5 9 5z" />
                                    <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                                </svg>
                                <li>Studies at STMIK Widya Pratama</li>
                            </div>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Biodata -->
            <!-- post -->
            <div class="flex flex-col text-black ">
                <div class="p-3 text-2xl text-medium">
                    <h1>Posts</h1>
                </div>
                <div class="flex flex-wrap justify-start items-center border-b border-slate-600 pb-2">
                    <div class="p-2">
                        <a href="./profil.php">
                            <img class="rounded-full w-16" src="../public/Assets/images/profil.jpg" alt=""></a>
                    </div>
                    <div class="pl-3">
                        <a href="../Components/post.php">What's on your mind?</a>
                    </div>
                </div>
            </div>
            <!-- post -->
            <!-- beranda -->
            <?php
            include '../Controllers/database.php';
            $nama = $_SESSION['user'];
            $query = mysqli_query($conn, "SELECT * FROM datas WHERE nama='$nama' ORDER BY id DESC");
            while ($data = mysqli_fetch_array($query)) {
            ?>
                <div class="bg-slate-700 mt-3 pb-5 rounded-lg flex flex-col mb-3 justify-center items-center text-white w-full">
                    <div class="w-screen rounded-t-lg">
                        <figure class=" w-screen"><?php
                                                    $images = $data['img'];
                                                    if ($images == 1) {
                                                        echo "<p></p>";
                                                    } else {
                                                        echo "<img src='../public/Assets/images/$data[img]'width='100%' height='100%'/>";
                                                    } ?></figure>
                    </div>
                    <div class="w-full rounded-b-lg ">
                        <div class="flex flex-col justify-start items-start rounded-b-lg">
                            <h1 class="text-xl text-medium font-sans p-3 "><?= $data['nama']; ?></h1>
                            <p class="text-md p-5 "><?php $text = $data['text'];
                                                    if (empty($text)) {
                                                        echo "Sorry! Content Not Available";
                                                    } else {
                                                        echo $data['text'];
                                                    } ?></p>
                        </div>
                        <div class="flex flex-wrap justify-end items-end rounded-b-lg gap-3 pr-3 text-medium">
                            <div class="badge badge-outline">
                                <svg class="mr-1 w-3 h-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"></path>
                                </svg>
                                3 days ago
                            </div>
                            <div class="badge badge-outline p-2"><?= $data['audience']; ?></div>
                            <div class="badge badge-outline">Product</div>
                        </div>
                    </div>
                </div>
            <?php  } ?>
             <!-- beranda -->
            <!-- footer -->
            <div class="bg-slate-700 flex flex-col justify-center items-center rounded-t-lg">
                <p class="p-2">Copyright @2022 Dani Kurniawan</p>
            </div>
           <!-- footer -->
        </div>
    </div>
    </div>
    </div>
</body>

</html>