<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
  <title>welcom to issen school</title>
</head>
<body>
  
<div class="relative py-16
                before:absolute before:inset-0 before:w-full before:h-[50%] before:bg-gray-200">
    <div class="relative container m-auto px-6 text-gray-500 md:px-12 xl:px-40">

        <div class="m-auto space-y-8 md:w-8/12 lg:">
            <img src="images/ISSEN1.png" loading="lazy" class="w-36 ml-4" alt="tailus logo">
            <div class="rounded-xl border bg-opacity-50 backdrop-blur-2xl bg-white shadow-xl">
                <div class="p-6 sm:p-16">
                    <h2 class="mb-8 text-2xl text-cyan-900 font-bold">Sign up to issen school</h2>
                    
                    <!-- form -->

                    <form action="./includes/signup.inc.php" method="post" class="space-y-8">
                        <div class="space-y-2">
                            <label for="email" class="text-gray-700">Email</label>
                            <input  type="email" name="email" id="email" 
                            class="block w-full px-4 py-3 rounded-md border border-gray-300 text-gray-600 transition duration-300
                                focus:ring-2 focus:ring-sky-300 focus:outline-none
                                invalid:ring-2 invalid:ring-red-400"
                            >
                        </div>

                        <div>
                            <div class="flex items-center justify-between">
                                <label for="pwd" class="text-gray-700">Password</label>
                            </div>
                            <input  type="password" name="password" id="pwd" 
                                    class="block w-full px-4 py-3 rounded-md border border-gray-300 text-gray-600 transition duration-300
                                        focus:ring-2 focus:ring-sky-300 focus:outline-none
                                        invalid:ring-2 invalid:ring-red-400"
                            >
                        </div>
                        <div>
                            <div class="flex items-center justify-between">
                                <label for="pwd" class="text-gray-700">Conferme Password</label>
                            </div>
                            <input  type="password" name="confermepwd" id="pwd" 
                                    class="block w-full px-4 py-3 rounded-md border border-gray-300 text-gray-600 transition duration-300
                                        focus:ring-2 focus:ring-sky-300 focus:outline-none
                                        invalid:ring-2 invalid:ring-red-400"
                            >
                        </div>

                        <button type="submit" name="submit"
                                class="w-full py-3 px-6 rounded-md bg-sky-600
                                    focus:bg-sky-700 active:bg-sky-500">
                            <span class="text-white">Sign up</span>
                        </button>

                        <p class="border-t pt-6 text-sm">
                            <a href="index.php" class="text-sky-500">login here</a>
                        </p>
                    </form>
                </div>
            </div>
            <div class="text-center space-x-4">
                <span>&copy; ISSEN</span>
                <a href="#" class="text-sm hover:text-sky-900">Contact</a>
                <a href="#" class="text-sm hover:text-sky-900">Privacy & Terms</a>
            </div>
        </div>
    </div>
</div>
                                
</body>
</html>