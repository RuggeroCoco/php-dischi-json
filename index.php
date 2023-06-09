<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dischi JSON</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- Font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Vue js -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!-- Axios -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <!-- Css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="https://dpidudyah7i0b.cloudfront.net/favicon.ico" type="image/x-icon" />
</head>

<body>
    <div id="app">
        <div class="container my-4">
            <div class="row row-cols-4 g-4">
                <div class="col" v-for="(disk,index) in disks" :key="index">
                    <div class="card text-center">
                        <img :src="disk.poster" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{disk.title}}</h5>
                            <p class="card-text">{{disk.author}}</p>
                            <a href="#" class="btn btn-primary">Details</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <script src="js/script.js"></script>
</body>

</html>