<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .background-image {
            background-image: url('https://images.unsplash.com/photo-1564540574859-0dfb63985953?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');
            background-size: cover;
            background-position: center;
        }
    </style>
</head>
<body class="h-screen flex items-center justify-center bg-slate-200">
    <section class="relative w-full h-full background-image">
        <img src="" alt="">
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <div class="relative z-10 flex flex-col items-center justify-center h-full px-6 py-8 mx-auto md:h-screen lg:py-0">
            <div class="w-full bg-white bg-opacity-70 backdrop-blur-lg rounded-lg shadow-lg md:mt-0 sm:max-w-md xl:p-0">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1 class="text-xl font-bold leading-tight tracking-tight md:text-2xl text-gray-900">
                        Sign in to your account
                    </h1>
                    <form class="space-y-4 md:space-y-6" action="{{ route('login') }}" method="POST">
                        @csrf
                        <div>
                            <label for="username" class="block mb-2 text-sm font-medium text-gray-900">Username</label>
                            <input type="text" name="username" id="username" class="border sm:text-sm rounded-lg block w-full p-2.5 bg-none bg-transparent border-gray-900 placeholder-gray-600 text-gray-900" placeholder="admin123" required>
                        </div>
                        <div>
                            <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Password</label>
                            <input type="password" name="password" id="password" placeholder="••••••••" class="border sm:text-sm rounded-lg block w-full p-2.5 bg-none bg-transparent border-gray-900 placeholder-gray-600 text-gray-900" required>
                        </div>
                        <button type="submit" class="w-full text-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center bg-gray-900 hover:bg-gray-400 hover:text-gray-900 duration-500 shadow-lg">Sign in</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
