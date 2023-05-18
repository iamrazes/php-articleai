<?php

require __DIR__ . '/vendor/autoload.php';

use Orhanerday\OpenAi\OpenAi;

$open_ai_key = 'use your api key here';
$open_ai = new OpenAi($open_ai_key);

$prompt = $_POST['prompt'];

$complete = $open_ai->completion([
  'model' => 'text-davinci-003',
  'prompt' => 'Create an article about ' . $prompt,
  'temperature' => 0.9,
  'max_tokens' => 500,
  'frequency_penalty' => 0,
  'presence_penalty' => 0.6,
]);

// var_dump($complete);
$response = json_decode($complete, true);
$response = $response["choices"][0]["text"];
?>

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


  <div class="flex justify-center border-t border-black mt-1">
  </div>


  <div class="flex justify-between mt-6">
    <!-- English -->
    <div class="container mx-auto mr-4">
      <div>
        <h1 class="text-center">Generate News Article with topic you desired!</h1>
        <p class="text-sm text-center mt-1"><span></span>English</p>
      </div>
      <div class="border-t border-b border-black mt-8 pb-4">
        <h1 class="mt-2">Insert topic you want to generate:</h1>

        <form action="aien.php" method="post">
          <div class=" flex mt-4 justify-center">
            <input type="text" name="prompt" placeholder="Article Topic" 
              class="border text-center border-black rounded p-2 bg-gray-100">
          </div>
          <div class="flex mt-4 justify-center">
            <input type="submit" value="Generate" class="bg-black text-white rounded p-2 hover:bg-slate-600">
          </div>
        </form>
      </div>
      <!-- Output -->
      <div>
        <h1 class="mt-2">Article about <span class="font-bold">
            <?= $prompt ?>
          </span></h1>
        <div class="output-text text-sm">
          <p><?= $prompt ?><?= $response ?></p>
        </div>
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
            <input type="text" name="prompt" placeholder="Topik Artikel" 
              class="border text-center border-black rounded p-2 bg-gray-100">
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



  <div class="border-t border-black mt-6 pb-1">
  </div>
  <div class="border-t border-black">
    <div class="flex flex-row justify-between mt-1">

      <p>Written by Muhammad Dagistan Silawane</p>
      <p>Powered by OpenAI & ChatGPT</p>
    </div>
  </div>
  <!-- Script -->
  <script>
    var dt = new Date();
    document.getElementById('date-time').innerHTML = dt;
  </script>
</body>

</html>