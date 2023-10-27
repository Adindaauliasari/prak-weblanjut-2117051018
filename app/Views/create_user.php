<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>web</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="/profile/CSS/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/eff27b1688.js" crossorigin="anonymous"></script>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Open+Sans&family=Poppins&display=swap');

:root{
    --primary-color : #068740;
    --secondary-color : #38c777;
    --light-color : #ffffff;
    --black-color : #000000;
}

::-webkit-scrollbar{
    width: 2px;
}

::-webkit-scrollbar-thumb{
    background-color: var(--primary-color);
}

*{
    padding: 0;
    margin: 0;
    font-family: 'Poppins';
}

/* body {
    position: relative;
    background-image: url(/profile/IMG/bg.jpg);
    background-size: cover;
    backdrop-filter: brightness(0.3);
} */

body {
    position: relative !important;
    height: 100vh !important;
    background: linear-gradient(rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0.75)),
      url(https://images.unsplash.com/photo-1480944657103-7fed22359e1d) !important;
    background-size: cover !important;
  }



.container {
    margin-top: 10vh;
    position: relative;
    width: 100%;
    height: 90vh;
}

.main {
    position: absolute;
    width: 1135px;
    height: 500px;
    background-position: center;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    border-radius: 10px;
}

.img {
    background-image: url(/profile/IMG/poto.jpg);
    filter: brightness(1.0);
    background-color: #454846;
    background-size: cover;
    border-radius: 100px;
    width: 150px;
    height: 150px;
    margin: 20px auto;
}

h1 {
    text-align: center;
    font-size: 30px;
    margin: 0;
    font-weight: bold;
    color: var(--light-color);
}

.style {
    text-align: center;
    font-size: 15px;
    margin: 0;
    color: var(--light-color);
}

h3 {
    font-size: 24pt;
    color: var(--light-color);
    text-align: center;
    margin-bottom: 20px;
}

table {
    text-align: center;
    border-collapse: collapse;
    width: 100%;
}

th {
    border: 1px solid var(--light-color);
    color: var(--light-color);
    padding: 8px;
    text-align: center;
}

td {
    color: var(--light-color);
    border: 1px solid var(--light-color);
    padding: 8px;
    text-align: center;
}



.btn {
    background: transparent !important;
    border-color: white;
    border-width: 2px;
    border-radius: 6px;
}

.btn:hover {
    color: #0da4e3;
    border-color: #0da4e3;
}

a {
    color: white !important;
}

.active {
    color: #0da4e3 !important;
}

a:hover {
    color: #0da4e3 !important;
}

input, textarea {
    color: white !important;
    background-color: transparent !important;
}

input:hover, textarea:hover {
    background-color: transparent !important;
    outline: solid 2px #0da4e3;
    outline-offset: -2px;
}

input:active, textarea:active {
    border-color: #0da4e3;
}

i {
    color: white;
}

i:hover {
    color: #0da4e3;
}

.card {
    color: white;
    border-color: white;
    background-color: transparent !important;
}

.nav-item {
    margin-left: 10px;
    margin-right: 10px;
}
</style>

<body>

    <div class="container-fluid w-100 p-0" style="margin-top: 100px !important;position: absolute;">
        <div class="container mx-auto px-5 mt-1" style="margin-bottom: 100px !important;">
            <ul class="p-0 position-relative">
                <li style="display: inline-block;">
                    <h2 style="color: white;font-weight: bold;">Create User</h2>
                </li>
            </ul>
            <form action="<?= base_url('/user/store') ?>" method="POST">
                <div class="mb-3">
                    <label for="nama" class="form-label" style="color: white;">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama">
                </div>
                <div class="mb-3">
                    <label for="kelas" class="form-label" style="color: white;">Kelas</label>
                    <input type="text" class="form-control" id="kelas" name="kelas">
                </div>
                <div class="mb-3">
                    <label for="npm" class="form-label" style="color: white;">NPM</label>
                    <input type="number" class="form-control" id="npm" name="npm">
                </div>
                <button type="submit" class="btn btn-primary" name="submit">Create</button>
            </form>
        </div>
    </div>

</body>

</html>