<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dischi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>
<body>
    <!-- Header -->
    <?php include_once __DIR__ . '/partials/header.php' ?>
    <!-- /Header -->

    <!-- Main -->
    <main id="app">
        <div class="container p-5">
            <div class="row row-col-5 cards g-3">
                <div v-for="(card in cards)" class="col-2 m-3 p-3 text-center border-0 card">
                    <img class="mb-3" :src="card.poster" alt="">
                    <h2>{{card.title}}</h2>
                    <h3>{{card.author}}</h3>
                    <h4>{{card.year}}</h4>
                </div>
            </div>
        </div>
    </main>
    <!-- /Main -->
    <script src="js/script.js"></script>
</body>
</html>