<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href=" {{ asset ('assets/bootstrap-5.3.2-dist/css/bootstrap.min.css')}}">
</head>
<body style=" background: linear-gradient(to right, #FFF0DD, #B0464A);">
    <div class="align-content-center">
            <div class="card" style="border-radius: 30px;background-color: rgb(255, 255, 255);width: 170vh;height: 80vh; margin-top: 50px;margin-left: 100px;box-shadow: 20px 20px 30px rgba(0, 0, 0, 0.2);">
                <div class="row" style="margin-left: 90px;">
                    <div style="padding-top: 100px">
                    <h4 style="margin-top: -45px">Selamat Datang Admin!</h4>
                    <p style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif">
                        Silakan login untuk mengelola dan memperbarui <br>rekomendasi makanan lezat bagi para pengunjung.
                    </p>
                    </div>

                    <form action="/auth" method="post" style="margin-left: 400px; margin-top: -100px">
                        @csrf

                        @if ($errors->any())
                            @foreach ($errors->all() as $item)
                                <ul>
                                    <li>{{ $item }}</li>
                                </ul>
                            @endforeach
                        @endif

                        <h5 style="padding-top: 20px;">Login into your account</h5>

                        <div class="" style="padding-top: 20px;">
                            <input style="border-radius: 5px;height: 30px;width: 300px;" type="email" name="email" id="email" placeholder="Email">
                        </div>

                        <div class="" style="padding-top: 20px;">
                            <input style="border-radius: 5px;height: 30px;width: 300px;" type="password" name="password" id="password" placeholder="Password">
                        </div>

                        <div class="btn-dark " style="padding-top: 20px;">
                            <button style="border: none;height: 30px;width: 300px;color: white;background-color: #000000;border-radius: 10px;" type="submit">Login</button>
                        </div>

                     

                        <div style="padding-top: 20px;">
                            <a style="text-decoration: none;color: #b6b6b6;" href="#!" class="">Terms of use.</a>
                            <a style="text-decoration: none;color: #b6b6b6;" href="#!" class="">Privacy policy</a>
                       </div>
                    </form>
                </div>
            </div>
    </div>
    

    
</body>
</html>
<script src="{{ asset ('assets/bootstrap-5.3.2-dist/js/bootstrap.min.js')}}"></script>