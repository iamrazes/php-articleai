<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ArticleAI</title>
</head>
<body>
    <div>
        <h1>Judul</h1>
    </div>
    <div>
        <form action="ai.php" method="post">
            <div>
                <input type="text" name="prompt" placeholder="insert">
            </div>
            <br>
            <div>
                <input type="submit" value="generate">
            </div>
        </form>
    </div>
</body>
</html> -->


<!doctype html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="/dist/output.css" rel="stylesheet">
  <title>ArticleAI</title>
  <style>
    .output-text {
      white-space: break-spaces;
    }
  </style>
</head>

<body class="antialiased container mx-auto px-4 font-serif bg-gray-100">

  <header>
    <div class="flex justify-between mt-1">
      <div>
        <p>ArticleAI News</p>
      </div>
      <div>
        <p><span id="date-time"></span></p>
      </div>
    </div>


    <div class="flex justify-center border-b border-t mt-1 border-black">
      <div class="flex flex-col pt-6 pb-6">
        <a href="index.php" class="text-6xl text-center">ArticleAI</a>
        <h2 class="text-lg text-center mt-1">Create News Article Using Artificial Intelligent</h2>
      </div>
    </div>


  </header>

  <main>
    <div class="flex justify-center border-t border-black mt-1">
    </div>


    <div class="flex justify-between mt-6">
      <!-- English -->
      <div class="container mx-auto mr-4">
        <div>
          <h1 class="text-center">Generate News Article with topic you desired!</h1>
          <p class="text-sm text-center mt-1"><span></span>English</p>
        </div>
        <!-- Input -->
        <div class="border-t border-b border-black mt-8 pb-4">
          <h1 class="mt-2">Insert topic you want to generate:</h1>

          <form action="aien.php" method="post">
            <div class=" flex mt-4 justify-center">
              <input type="text" name="prompt" placeholder="Article Topic" class="border text-center border-black rounded p-2 bg-gray-100">
            </div>
            <div class="flex mt-4 justify-center">
              <input type="submit" value="Generate" class="bg-black text-white rounded p-2 hover:bg-slate-600">
            </div>
          </form>
        </div>
        <!-- Output -->
        <div>
        </div>
      </div>
      <!-- Indonesia -->
      <div class="container mx-auto ml-4">
        <div>
          <h1 class="text-center">Buat Artikel Berita sesuai topik keinginan anda!</h1>
          <p class="text-sm text-center mt-1"><span></span>Bahasa Indonesia</p>
        </div>
        <!-- Input -->
        <div class="border-t border-b border-black mt-8 pb-4">
          <h1 class="mt-2">Masukan topik yang anda inginkan :</h1>

          <form action="aiid.php" method="post">
            <div class=" flex mt-4 justify-center">
              <input type="text" name="prompt" placeholder="Topik Artikel" class="border text-center border-black rounded p-2 bg-gray-100">
            </div>
            <div class="flex mt-4 justify-center">
              <input type="submit" value="Generate" class="bg-black text-white rounded p-2 hover:bg-slate-600">
            </div>
          </form>
        </div>
        <!-- Output -->
        <div>
        </div>

      </div>

    </div>

  </main>


  <footer class="h-10">
    <div class="border-t border-black mt-8 pb-1">
    </div>
    <div class="border-t border-black">
      <div class="flex flex-row justify-between mt-1">

        <p>Written by Muhammad Dagistan Silawane</p>
        <p>Powered by OpenAI & ChatGPT</p>
      </div>
    </div>
  </footer>
  <!-- Script -->
  <script>
    var dt = new Date();
    document.getElementById('date-time').innerHTML = dt;
  </script>
</body>

</html>