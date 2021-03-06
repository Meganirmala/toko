 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <header>
        <!-- Fixed navbar -->
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
          <!-- <a class="navbar-brand" href="#">Fixed navbar</a> -->
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Tentang</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Kontak</a>
              </li>
            </ul>
            <form class="form-inline mt-2 mt-md-0">
              <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
          </div>
        </nav>
      </header>
    <!-- <div id="fitur" class="py-4">
        <div class="container">
            <div class="row">
                <div class="col col-4">
                    <div class="card text-center py-3">
                        <div class="card-body">
                            <div class="icon mb-4">
                                <i class="bi bi-alarm"></i>
                            </div>
                            <h5 class="card-title">Ketelitian dan Kedisplinan</h5>
                            <p class="card-text">Belajar Ngoding harus teliti dan disiplin</p>
                        </div>
                    </div>
                </div>
                <div class="col col-4">
                    <div class="card text-center py-3">
                        <div class="card-body">
                            <div class="icon mb-4">
                                <i class="bi bi-alarm"></i>
                            </div>
                            <h5 class="card-title">Ketelitian dan Kedisplinan</h5>
                            <p class="card-text">Belajar Ngoding harus teliti dan disiplin</p>
                        </div>
                    </div>
                </div>
                <div class="col col-4">
                    <div class="card text-center py-3">
                        <div class="card-body">
                            <div class="icon mb-4">
                                <i class="bi bi-alarm"></i>
                            </div>
                            <h5 class="card-title">Ketelitian dan Kedisplinan</h5>
                            <p class="card-text">Belajar Ngoding harus teliti dan disiplin</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <div id="blog" class="py-4">
        <div class="container">
            <div class="row">
                <div class="col col-6 pt-5 pb-4">
                    <div class="card mb-3">
                        <img src="image/junkfood.jpg" alt="" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title text-center">Junk Food</h5>
                        </div>
                    </div>
                </div>
                <div class="col col-6 pt-5">
                    <div class="card mb-3">
                        <div class="card-body">
                            <h3 class="card-title">About Us</h3>
                            <p class="card-text text-justify">Gaya hidup modern telah mengubah pola makanan yang dikonsumsi sehari-hari. Makanan cepat saji disukai karena dinilai lebih praktis saat dimasak dan dikonsumsi. <br>
                            Padahal, tidak semua makanan cepat saji itu memiliki kandungan nilai gizi yang bermanfaat bagi tubuh karena mengandung kadar lemak jenuh yang tinggi serta tambahan bahan makanan seperti pengenyal, pewarna, dan pengawet yang berbahaya bila dikonsumsi secara berlebihan.</p>
                        </div>
                    </div>
                </div>
                <div class="col col-4 py-4">
                    <div class="card mb-3">
                        <img src="image/easy-food.jpg" alt="" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title text-center">Makanan Sehat</h5>
                        </div>
                    </div>
                </div>
                <div class="col col-4 py-4">
                    <div class="card mb-3">
                        <img src="image/vegetables.png" alt="" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title text-center">Sayur dan Buah</h5>
                        </div>
                    </div>
                </div>
                <div class="col col-4 py-4">
                    <div class="card mb-3">
                        <img src="image/feast.jpg" alt="" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title text-center">Makanan Seimbang</h5>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div id="accordion" class="pt-3 pb-5">
        <div class="container">
            <div class="col col-12">
                <div class="accordion" id="accordionExample">
                    <div class="card">
                      <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                          <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            Makanan Sehat
                          </button>
                        </h2>
                      </div>
                  
                      <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                         Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt explicabo maiores, veniam cupiditate molestias perspiciatis cum iste, aperiam aut similique assumenda id rem dolorem error ullam doloremque ab! Voluptatibus, provident.
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-header" id="headingTwo">
                        <h2 class="mb-0">
                          <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Makanan Seimbang
                          </button>
                        </h2>
                      </div>
                      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                        <div class="card-body">
                         Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, architecto animi? Nesciunt aliquid cumque voluptatibus nemo laudantium odio non. Repudiandae dolor a reiciendis corrupti voluptate aspernatur, delectus tenetur necessitatibus ad.
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-header" id="headingThree">
                        <h2 class="mb-0">
                          <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Makanan Enak
                          </button>
                        </h2>
                      </div>
                      <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                        <div class="card-body">
                          Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam, dicta dignissimos id officia placeat necessitatibus et animi assumenda eveniet beatae minima laudantium voluptates sapiente repellat pariatur neque soluta exercitationem nam.
                        </div>
                      </div>
                    </div>
                  </div>
            </div>

        </div>

    </div>
    
    <!-- Javascript -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"     integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"     crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"   integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"   crossorigin="anonymous"></script>
    
</body>
</html>
