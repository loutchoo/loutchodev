<!DOCTYPE html>
<html lang="fr  ">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Loutchoadmin - Todolist</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
</head>
<style>
  .textcolor{
    color: #00EAB1;
  }
  .bgcolor{
    background-color: #182235;
  }
</style>

<body class="bgcolor text-white text-lg">
    <header class="container mx-auto px-4 py-6 flex items-center justify-between  ">
        <a href="/" class="font-bold text-white text-xl">LoutchoAdmin</a>
        <nav>
          <ul class="flex items-center justify-center font-semibold mx-10">
            <li class="relative px-3 py-2">
              <a href="/home">
              <div class="bg-white rounded-full text-white p-3 bg-opacity-5">
                <span class="hover:opacity-50 cursor-default">Home</span>
              </div>
            </a>
            </li>
            <li class="relative px-3 py-2">
              <a href="/todolist">
                <div class="bg-white rounded-full text-white p-3 bg-opacity-5">
                  <span class="hover:opacity-50 cursor-default">Todolist</span>
              </div>
              </a>
            </li>
            <li class="relative px-3 py-2">
              <a href="/projects">
              <div class="bg-white rounded-full text-white p-3 bg-opacity-5">
                <span class="hover:opacity-50 cursor-default">Projects</span>
              </div>
            </a>
            </li>
            <li class="relative px-3 py-2">
              <a href="/about">
              <div class="bg-white rounded-full text-white p-3 bg-opacity-5">
                <span class="hover:opacity-50 cursor-default">About</span>
              </div>
            </a>
            </li>
          </ul>
        </nav>
        <nav>
          <ul>
            <li>
              <a class="rounded-full px-3 py-2 bg-white font-semibold flex items-center group" href="/login">
              <span class="text-black">Sign in</span>
              </a>
            </li>
          </ul>
        </nav>
    </header>
</body>
</html>