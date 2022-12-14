<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dischi Json</title>
     <!-- Bootstrap -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- CSS -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- Axios -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- VueJs -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
</head>
<body>
    <div class="container-logo">
        <div class="logo">
            <img src="public/spotify.png" alt="">
        </div>
    </div>

    <div id="app">
        <div class="wrapper d-flex">
            <div class="container" v-for="(card, index) in cards" :key="index">
                <div class="card-body">
                    <img :src="card.poster" class="card-img-top" alt="...">
                    <h4 class="card-title">{{card.title}}</h4>
                    <h5 class="card-author">{{card.author}}</h5>
                    <h6 class="card-year">{{card.year}}</h6>
                </div>
            </div>
        </div>
    </div>

    <script src="js/main.js"></script>
</body>
</html>