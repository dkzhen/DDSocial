<?php
include '../Middleware/post.php';
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="../public/Styles/post.css" rel="stylesheet" />
    <title></title>
</head>

<body>
    <form action="../Controllers/post.php" method="POST" enctype="multipart/form-data">
        <div class="flex justify-center items-center h-screen bg-white lg:bg-white ">
            <div class="flex flex-wrap lg:w-96 w-full bg-white lg:bg-primary lg:py-1 my-4 py-3 lg:rounded-xl ">
                <div class="flex flex-row items-center gap-[100px] text-black justify-between my-2 text-2xl">
                    <a href="../public/App/index.php">
                        <div class="pl-6 lg:pl-1"><svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg></div>
                    </a>
                    <div class="pr-6 lg:pr-12">Create Post</div>
                </div>
                <div class="flex flex-row  mt-7 ml-5 ">
                    <div class=""><img class="rounded-full" src="../public/Assets/images/profil.jpg" alt=""></div>
                </div>
                <div class="flex-col flex justify-center text-black text-xl">
                    <?php
                    include '../Controllers/database.php';
                    $nama = $_SESSION['user'];
                    $query = mysqli_query($conn, "SELECT nama FROM datas WHERE nama='$nama'");
                    $data = mysqli_fetch_array($query);
                    ?>
                    <div class="pl-5 mb-2"><?= $data['nama']; ?></div>
                    <div class="pl-5"><select name="audience" class="select-audience select-info w-full max-w-xs bg-transparent lg:border-red-600">
                            <option value="public">Public</option>
                            <option value="private">Private</option>
                        </select>
                    </div>
                </div>
                <div class=" w-full bg-white lg:bg-primary rounded-lg mt-3  -mb-5">
                    <div class="py-2 px-4 bg-white lg:bg-primary rounded-t-lg dark:bg-gray-800 text-start">
                        <label for="comment" class="sr-only">Your comment</label>
                        <fieldset><textarea id="comment" name="textarea" rows="4" class="px-0 w-full lg:py-[130px] py-[165px] text-sm text-black bg-white lg:bg-primary border-0 focus:ring-0 placeholder-black" placeholder="Write a comment..." required></textarea></fieldset>
                    </div>
                    <div class="flex justify-between items-center py-2 mb-3 px-3">
                        <fieldset>
                            <button type="submit" class="inline-flex items-center py-2.5 px-4 text-xs font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800">
                                Post
                            </button>
                        </fieldset>
                        <div class="flex pl-0 lg:-mb-2 mb-2 space-x-1 sm:pl-2 mr-3 t">
                            <button type="button" class="inline-flex justify-center p-2 text-black rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="sr-only">Attach file</span>
                            </button>
                            <button type="button" class="inline-flex justify-center p-2 text-black rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="sr-only">Set location</span>
                            </button>
                            <label for="img" class="inline-flex justify-center p-2 text-black rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd"></path>
                                </svg>
                                <fieldset>
                                    <span class="sr-only"><input type="file" name="images" id="img"></span>
                                </fieldset>
                            </label>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        </div>
    </form>
</body>

</html>