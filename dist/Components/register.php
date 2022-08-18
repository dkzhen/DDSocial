<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="../public/Styles/register.css" rel="stylesheet" />
    <link rel="shortcut icon" href="../public/Assets/images/logo.png" style="border-radius:20px;">
    <title>Register</title>
</head>

<body>
    <div class="flex items-center justify-center min-h-screen bg-white text-black">
        <div class="px-8 py-3  mt-2  text-left bg-white shadow-md">
            <div class="mb-7 flex justify-center">
                <img class="w-[100px] h-[100px] rounded-3xl" src="../public/Assets/images/logo.png" alt="logo">
            </div>
            <h3 class="text-2xl font-bold text-center">Register to create account</h3>
            <form action="../Controllers/register.php" method="POST">
                <div class="mt-14 ">
                    <div>
                        <label class="block" for="nama">Nama Lengkap<label>
                                <input type="text" placeholder="nama" name="nama"
                                    class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-primary">
                    </div>
                    <label class="block" for="username">Username<label>
                            <input type="text" placeholder="username" name="username"
                                class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-primary">
                            
                </div>
                <div class="mt-4">
                    <label class="block">Password<label>
                            <input type="password" placeholder="password" name="password"
                                class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-primary">
                </div>
                <div>
                    <label class="block" for="email">Email<label>
                            <input type="email" placeholder="email" name="email"
                                class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-primary">
                </div>
                <div class="flex items-center justify-center">
                    <button class="px-6 py-2 mt-4 text-white bg-primary rounded-lg hover:bg-blue-900">Register</button>
            
                </div>
        </div>
        </form>
    </div>
    </div>
</body>

</html>