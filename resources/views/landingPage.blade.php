<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&family=Lobster&display=swap" rel="stylesheet">

    <link rel="stylesheet" href=" {{ asset ('assets/bootstrap-5.3.2-dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />

    <style>
        #map {
            height: 500px;
            width: 100%;
        }
/* 
        .image {
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: center;
            border-radius: 10px;
            animation: Animation 10s ease-in-out infinite;
        }

        @keyframes Animation {
            0% { background-image: url('img/Seblak_is_a_spicy_food_native_to_Indonesia__Usually_a_portion_consists_of_chicken_feet__eggs__squid__suki_etc_-removebg-preview.png'); }
            50% { background-image: url('img/sate.jpeg'); }
            51% { background-image: url('img/nagasari.jpeg'); }
            100% { background-image: url('img/sempol ayam.jpeg'); }
        } */
        

    </style>


    <style>
    /* Styling dasar untuk link navbar */
        .navbar-nav .nav-link {
        position: relative;
        color: #000;
        padding: 10px;
        text-decoration: none;
        transition: color 0.3s ease-in-out;
    }

    /* Garis bawah menggunakan pseudo-element */
    .navbar-nav .nav-link::after {
        content: '';
        position: absolute;
        width: 0;
        height: 2px;
        bottom: 0;
        left: 0;
        background-color: #B0464A;
        transition: width 0.4s ease-in-out;
    }

    /* Efek hover untuk garis bawah */
    .navbar-nav .nav-link:hover::after {
        width: 100%;
    }

    /* Ubah warna teks saat hover */
    .navbar-nav .nav-link:hover {
         color: #B0464A;
    }
    </style>
    

    
</head>
<body style="background-color: #FFF0DD;">
    <div>
        <nav class="navbar navbar-expand-sm fixed-top" style="background-color: #FFF0DD; box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1); font-family: 'Poppins', sans-serif;">
            <div class="container">
                <a href="#" class="navbar-brand" style="font-weight: bold; color: #B0464A; font-size: 30px;">JajanSeru</a>
                <div class="justify-content-end">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="/" class="nav-link" style="color: #333;">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="#Food" class="nav-link" style="color: #333;">Foods</a>
                        </li>
                        <li class="nav-item">
                            <a href="#aboutus" class="nav-link" style="color: #333;">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a href="#contact" class="nav-link" style="color: #333;">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        v>
        </nav>

        <div style="background-color: #FFF0DD;" class="py-5">
            <div class="container py-5" style="margin-top: 80px;">
                <h5 style="font-size: 45px; font-weight: bold; font-family: 'Poppins', sans-serif;">
                    Selamat datang di
                    <p style="color: #B0464A; font-family: 'Pacifico', cursive;">Jajan Seru!!</p>
                </h5>
                
                <p style="font-size: 18px;font-family: 'Roboto', sans-serif;">
                    Temukan makanan terbaik sesuai selera Anda <br> Jelajahi rekomendasi kami dan rasakan pengalaman kuliner yang tak terlupakan</p>
                <a href="/allFood">
                <button style="border: none;background-color: #B0464A;color: white;border-radius: 30px;height: 40px;width: 150px;">
                    EXPLORE NOW
                </button>
            </a>
                <div>
                    <img src="img/Untitled-removebg-preview.png" alt="" style="margin-top: -370px;margin-left: 100px;width: 1000px;height: 500px;">
                </div>
            </div>

        </div>

        <div style="background-color: #FFF0DD;" id="aboutus">
            <div class="container pt-5">
                <div>
                    <img src="/" alt="">
                </div>
                <div class="row">
                    <div class="col card image" style="background-color: #B0464A; border: none; height: 450px; width: 300px;">
                        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                              <div class="carousel-item active">
                                <img src="img/Seblak_is_a_spicy_food_native_to_Indonesia__Usually_a_portion_consists_of_chicken_feet__eggs__squid__suki_etc_-removebg-preview.png" class="d-block w-100" alt="...">
                              </div>
                              <div class="carousel-item">
                                <img src="img/basoaci.png" class="d-block w-100" alt="...">
                              </div>
                              <div class="carousel-item" style="margin-top: 50px;width: 470px;margin-left: -10px;">
                                <img src="img/Japanese_ramen_noodles_isolated_illustration_vector___1_-removebg-preview.png" class="d-block w-100" alt="...">
                              </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Next</span>
                            </button>
                          </div>
                    </div>
                    
                    <div class="col"  style="margin-left: 50px;margin-top: 50px;">
                        <h5 style="font-size: 40px;font-weight: bold;">Welcome To <p style="color: #B0464A;">di Jajan Seru!</p></h5>
                         <span style="font-size: 19px;">We are a team of food enthusiasts dedicated to providing you with the best food recommendations. We explore various dining spots to deliver accurate and trustworthy reviews, helping you discover exceptional culinary experiences.
                            <p style="font-weight: bold;">Thank you for visiting us. Enjoy your culinary adventure!</p></span>
                    </div>
                </div>
            </div>
        </div>

        <div style="background-color: #B0464A;margin-top: 100px;" id="Food">
            <div class="container py-5">
                <h1 style="color: white;margin-left: 250px;font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">Best Food in Your Aréa</h1>
                
                <div class="row pt-3">
                    <div class="col-2">
                        <a href="/allFood">
                        <button style="text-decoration: none;border: none;border-radius: 20px;width: 120px;height: 40px;color: #B0464A;">All</button>
                    </a>
                    </div>

                    <div class="col-2">
                        <a href="/noodles">
                            <button style="background-color: transparent; border: 1px solid #F5F5DC; border-radius: 20px; width: 120px; height: 40px; color:white;">
                                <img style="height: 30px;width: 30px;" src="img/Japanese_ramen_noodles_isolated_illustration_vector___1_-removebg-preview.png" alt="">
                                Noodlés
                            </button>
                        </a>
                    </div>
                    
                    <div class="col-2">
                        <a href="/sbFood">
                        <button style="background-color: transparent; border: 1px solid #F5F5DC; border-radius: 20px; width: 120px; height: 40px; color:white;">
                            <img style="height: 30px;width: 30px;" src="/img/Seblak_is_a_spicy_food_native_to_Indonesia__Usually_a_portion_consists_of_chicken_feet__eggs__squid__suki_etc_-removebg-preview.png" alt="">
                            Seblak
                        </button>
                    </a>
                    </div>

                    <div class="col-2">
                        <a href="/mochi">
                        <button style="background-color: transparent; border: 1px solid #F5F5DC; border-radius: 20px; width: 120px; height: 40px; color:white;">
                            <img style="height: 30px;width: 30px;" src="img/Premium_Vector___Japanese_mochi_rice_dessert__Vector_illustration_isolated_on_white_background-removebg-preview.png" alt="">
                            Mochi
                        </button>
                    </a>
                    </div>

                    <div class="col-2">
                        <a href="smoothie">
                        <button style="background-color: transparent; border: 1px solid #F5F5DC; border-radius: 20px; width: 120px; height: 40px; color:white;">
                            <img style="height: 30px;width: 30px;" src="img/Strawberry_smoothie_with_strawberry_fruit-removebg-preview.png" alt="">
                            Smoothie
                        </button>
                    </a>
                    </div>

                    <div class="col-2">
                        <a href="/dimsum">
                        <button style="background-color: transparent; border: 1px solid #F5F5DC; border-radius: 20px; width: 120px; height: 40px; color:white;">
                            <img style="height: 30px;width: 30px;" src="img/Premium_Vector___Cute_happy_smiling_dim_sum__flat_cartoon_character_illustration-removebg-preview.png" alt="">
                            Dimsum
                        </button>
                    </a>
                    </div>
                </div>

                <div class="row pt-5 gap-2" style="display: flex; flex-wrap: wrap;">
                    @foreach ($food->slice(0, 4) as $key => $item)
                        <div class="col-md-2 card d-flex"
                            style="width: 220px; height: 350px; border: none; border-radius: 10px; margin-bottom: 20px; background-color: rgba(255, 255, 255, 0.5); border: 1px solid white; margin-right: 10px;">
                            <div style="position: relative; display: inline-block;">
                                <img src="{{ asset('storage/public/'.$item->foto) }}" alt=""
                                     style="height: 200px; width: 195px; margin-top: 20px; border-radius: 10px;">
                                
                                <a href="{{ route('detail', ['id' => $item->id]) }}">    
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" 
                                     class="bi bi-chevron-right" viewBox="0 0 16 16" 
                                     style="position: absolute; top: 25px; right: 10px; color: white; 
                                     border: 1px solid white; border-radius: 20%; padding: 5px; background-color: rgba(205, 179, 179, 0.9)">                                        
                                     <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708"/>
                                </svg>
                                </a>
                            </div>

                            <h5 class="pt-2" style="font-size: smaller;font-family: 'Poppins', sans-serif; ">{{ $item->foodname }}</h5>
                            <span style="font-size: 12px;font-weight: bold;">Rp.{{ ($item->harga) }}</span>
                            <span style="font-size: 12px; font-weight: bold;">
                                <i class="fas fa-map-marker-alt" style="margin-right: 5px;"></i>
                                {{ ($item->lokasi) }}
                            </span>                      
                            <span style="font-size: 12px;font-weight: bold;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                  <path d="M8 3.5a.5.5 0 0 1 .5.5v4h3a.5.5 0 0 1 0 1h-3.5a.5.5 0 0 1-.5-.5v-4a.5.5 0 0 1 .5-.5z"/>
                                  <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm0-1A7 7 0 1 1 8 1a7 7 0 0 1 0 14z"/>
                                </svg> 
                                {{ $item->jam }}
                            </span>
                        </div>
                    @endforeach
                </div>
                

                <div class="container pt-4">
                    <a href="/allFood">
                    <button style="text-decoration: none;border: none;width: 100px;height: 35px;border-radius: 20px;color: #B0464A;margin-left: 400px;">
                        See More
                    </button>
                </a>
                </div>
            </div>
        </div>

        <div style="background-color: #FFF0DD;" id="aboutus">
            <div class="container py-5">
                <div class="row">
                    <div class="col"  style="margin-left: 50px;margin-top: 50px;">
                        <h5 style="font-size: 40px;font-weight: bold;">Try the latest menu hits! <p style="color: #B0464A;">di Jajan Seru!</p></h5>
                        <span style="font-size: 19px;">We are a team of food enthusiasts dedicated to providing you with the best food recommendations. We explore various dining spots to deliver accurate and trustworthy reviews, helping you discover exceptional culinary experiences.
                        <p style="font-weight: bold;">Thank you for visiting us. Enjoy your culinary adventure!</p></span>
                    </div>
                
                    <div class="col card" style="background-color: #B0464A;border: none;height: 450px;width: 100px;">
                        {{-- <img src="img/c2177c0f-a052-4243-ba84-31edc64acd89.jpeg" alt="" style="margin-top: 10px;height: 430px;"> --}}
                        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                              <div class="carousel-item active">
                                <img src="img/c2177c0f-a052-4243-ba84-31edc64acd89.jpeg" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                  <h5>Nasi Lemak</h5>
                                  <p>Nikmati Kelezatan Asli Nasi Lemak! Gurih santan berpadu dengan pedasnya sambal, lengkap dengan ayam goreng renyah dan telur rebus.</p>
                                </div>
                              </div>
                              <div class="carousel-item" style="height: 430px">
                                <img src="img/_Sushi Extravaganza_.jpeg" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                  <h5>Sushi</h5>
                                  <p>Sensasi segar di setiap gigitan! Cicipi kelezatan sushi autentik hari ini!</p>
                                </div>
                              </div>
                              <div class="carousel-item"  style="height: 430px">
                                <img src="img/01c8b672-b56b-43e0-815b-8007bd21da22.jpeg" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                  <h5>Seafood</h5>
                                  <p>Pecinta Seafood, Wajib Coba! Menu Seafood Bikin Anda Ketagihan!!</p>
                                </div>
                              </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Next</span>
                            </button>
                          </div>
                    </div>
                </div>
            </div>
        </div>

        <div style="background-color: #B0464A;" id="contact">
            <div class="container py-5">
                <h1 style="color: white;font-family: 'Times New Roman', Times, serif;margin-left: 100px;font-size: 50px;">
                    Join Us Now <br>
                </h1>
                <h1 style="color: white;font-family: 'Times New Roman', Times, serif;margin-left: 20px;font-size: 45px;">
                    discover the best food recommendations in town!
                </h1>
                
                <h1 style="color: white;font-family: 'Times New Roman', Times, serif;margin-left: 80px;font-size: 60px;">
                    curated just for you
                </h1>

                <h1  style="color: white;font-family: 'Times New Roman', Times, serif;margin-left: 100px;font-size: 33px;">
                    Satisfy your cravings with handpicked spots and hidden gems
                </h1>

                <div class="col-md-6 pt-5">
                    <form action="" method="">
                        <div class="input-group mb-3" style="border-radius: 20px;width: 250px;margin-left: 300px;">
                            <input type="search" name="" id="" class="form-control" placeholder="Enter Your email">
                            <button type="submit" style="text-decoration: none;border: none;color: #B0464A;border-radius: 2px;background-color: rgba(255, 255, 255, 0.5)">Subscribe</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <footer style="background-color: #F5F5DC;">
            <div class="container py-3">
                <div class="row gap-5">
                    <div class="col-2">
                        <a href="#" class="navbar-brand" style="font-weight: bold;color: #B0464A;font-size: 30px;">JajanSeru</a>
                    </div>

                    <div class="col-4">
                        <p style="margin-top: 10px;margin-left: 30px;">&copy; 2024 JajanSeru. All rights reserved.</p>

                    </div>

                    <div class="col-4">
                        <div class="row gap-3" style="margin-top: 10px;margin-left: 140px;">
                            <div class="col-md-2" style="background-color: #B0464A;border: none;width: 30px;border-radius: 20px;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                    <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
                                  </svg>
                            </div>
        
                            <div class="col-md-2" style="background-color: #B0464A;border: none;width: 30px;border-radius: 20px;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">
                                    <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z"/>
                                  </svg>
                            </div>
        
                            <div class="col-md-2" style="background-color: #B0464A;border: none;width: 30px;border-radius: 20px;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                    <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
                                  </svg>
                            </div>
        
                            <div class="col-md-2" style="background-color: #B0464A;border: none;width: 30px;border-radius: 20px;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                                    <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z"/>
                                  </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

    
    </div>
</body>
</html>
<script src="{{ asset ('assets/bootstrap-5.3.2-dist/js/bootstrap.min.js')}}"></script>