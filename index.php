<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/vue"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js"></script>
    <title>Dischi</title>
</head>
<body>
    <div id="root">
        <header>
            <img src="https://e1.pngegg.com/pngimages/252/890/png-clipart-spotify-for-os-x-el-capitan-spotify-logo.png" alt="Spotify Logo">
        </header>
        <main>
            <div class="container">
                    <div v-for="element in discs" class="single_card">
                        <img :src="element.poster" alt="">
                        <h2>{{ element.title }}</h2>
                        <h3>{{ element.author }}</h3>
                        <h4>{{ element.year }}</h4>
                    </div>                
            </div> 
        </main>
    </div>
    <script src="js/script.js"></script>
</body>
</html>