<!doctype html>
<html lang="en">
    <head>
        <title>Register Akun</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
        <style>
            @import url('https://fonts.googleapis.com/css?family=Roboto:300,400');

        * {
            margin:0;
            padding:0;
        }
        a,a:hover{
        text-decoration: none;
        }
        .myform-area{
        overflow: hidden;
        padding: 60px 0;
        background-image: url("C:/xampp/htdocs/PPDB-2024/page source ppdb bkl/image/backgroundweb3.jpeg");
        position: relative;
        padding-top: 100px;
        padding-bottom: 100px;
        background-repeat: no-repeat;
        background-size: cover;
        }
        .myform-area .form-area{
        position: relative;
        background: #26739c;
        width: 100%;
        height: 650px;
        overflow: hidden;
        box-shadow: 0 0 40px 0 #bebcbc;
        }

        .myform-area .form-area .form-content,
        .myform-area .form-area .form-input{
            position: relative;
            width: 50%;
            height: 100%;
            float: left;
            box-sizing: border-box;
        }

        .myform-area .form-area .form-content{
        width: 50%;
        padding: 40px 30px;
        }

        .myform-area .form-area .form-content h3{
        color: #fff;
        }
        .myform-area .form-area .form-content p{
        color: #fff;
        }
        .myform-area .form-area .form-content ul{
        margin-top: 30px;
        margin-left:-10%;
        }

        .myform-area .form-area .form-content ul li{
        display: inline-block;
        margin-right: 10px;
        }
        .myform-area .form-area .form-content a i{
            margin-right: 10px;
        }

        .myform-area .form-area .form-content .kembali{
        display: block;
        padding: 10px 20px;
        background: #3B579D;
        color: #fff;
        font-size: 15px;
        border-radius: 4px;
        border: 1px solid #3B579D;
        -webkit-transition: all .5s;
        -o-transition: all .5s;
        transition: all .5s;
        margin-top: 12%;
        }

        .myform-area .form-area .form-content .kembali:hover,
        .myform-area .form-area .form-content .kembali:focus{
            background: rgb(210, 176, 25);
        }

        .myform-area .form-area .form-content .register{
        display: block;
        padding: 10px 20px;
        background: #00ACED;
        color: #fff;
        font-size: 15px;
        border-radius: 4px;
        border: 1px solid #00ACED;
        -webkit-transition: all .5s;
        -o-transition: all .5s;
        transition: all .5s;
        margin-top: 12%;
        }

        .myform-area .form-area .form-content .register:hover,
        .myform-area .form-area .form-content .register:focus{
            background: rgb(210, 176, 25);
        }
        .myform-area .form-area .form-input{
        background-color: white;
        position: relative;
        overflow: hidden;
        box-shadow: 0 0 40px 0 #bebcbc;
        }
        .myform-area .form-area .form-input{
            width: 50%;
            background: #fff;
            padding: 40px 30px;
        }

        .myform-area .form-area .form-input h3{
        margin-bottom: 20px;
            color: #07315B;
        }

        .myform-area .form-area .form-input input{
            position: relative;
            height: 60px;
            padding: 20px 0;
        }
        .myform-area .form-area .form-input textarea{
            height: 120px;
            padding: 20px 0;
        }

        .myform-area .form-area .form-input input,
        .myform-area .form-area .form-input textarea{

            width: 100%;
            box-sizing: border-box;
            outline: none;
            border: none;
            border-bottom: 2px solid #e1e1e1;
            color: #07315B;
        }
        .myform-area .form-area .form-input form .form-group{
            position: relative;
        }
        .myform-area .form-area .form-input form .form-group label{
            position: absolute;

            top: 20px;
            left: 0;
            pointer-events: none;
            font-size: 14px;
            color: #595959;
            margin-bottom: 0;
            transition: all .6s;
        }
        .myform-area .form-area .form-input input:focus ~ label,
        .myform-area .form-area .form-input textarea:focus ~ label,
        .myform-area .form-area .form-input input:valid ~ label,
        .myform-area .form-area .form-input textarea:valid ~ label{
            top: -5px;
            opacity: 0;
            left: 0;
            color: #26739c;
            font-size: 12px;
            color: #07315B;
            font-weight: bold;
        }
        .myform-area .form-area .form-input input:focus,
        .myform-area .form-area .form-input textarea:focus,
        .myform-area .form-area .form-input input:valid,
        .myform-area .form-area .form-input textarea:valid{
            border-bottom: 2px solid #26739c;
        }
        .myform-area .form-area .form-text{
            margin-top: 30px;
        }
        .myform-area .form-area .form-text span a{
            color: #26739c;
        }
        .myform-area .form-area .myform-button{
            margin-top: 30px;
        }
        .myform-area .form-area .myform-button .myform-btn{
            width: 100%;
            height: 50px;
            font-size: 17px;
            
            background: #07315B;

            border: none;
            border-radius: 50px;
            color: #fff;
            cursor: pointer;
            -webkit-transition: all .5s;
            -o-transition: all .5s;
            transition: all .5s;
        }
        .myform-area .form-area .myform-button .myform-btn:hover{
            background: rgb(210, 176, 25);
        }
        .myform-area .form-area .myform-button1{
            margin-top: 30px;
        }
        .myform-area .form-area .myform-button1 .myform-btn1{
            width: 100%;
            height: 50px;
            font-size: 17px;
            background: rgb(210, 56, 25);
            border: none;
            border-radius: 50px;
            color: #fff;
            cursor: pointer;
            -webkit-transition: all .5s;
            -o-transition: all .5s;
            transition: all .5s;
        }
        .myform-area .form-area .myform-button1 .myform-btn1:hover{
            background: rgb(210, 176, 25);
        }
        </style>
    </head>

    <body>
        <header>
            <!-- place navbar here -->
            
        </header>
        <main>
            <section class="myform-area">
                <div class="container">
                    
                    <div class="row justify-content-center">
                        
                        <div class="col-lg-8">
                            <div class="form-area login-form">
                                <div class="form-content">
                                    <div class="header">
                                        <a class="logo text-center" href="C:\xampp\htdocs\PPDB-2024\page source ppdb bkl\home.html"><img src="C:\xampp\htdocs\PPDB-2024\page source ppdb bkl\image\icon tarakanita.png" alt="Logo Tarakanita" style="height:110px;margin-left:-10%;margin-bottom:5%;"></a>
                                    </div>
                                    <h3>REGISTER PPDB 2025/2026</h3>
                                    <p>Silakan Login atau Register untuk mendaftar PPDB</p>
                                    <ul>
                                        <li><a href="C:\xampp\htdocs\PPDB-2024\page source ppdb bkl\Bengkulu\home.html" class="kembali"><span>Kembali</span></a></li>
                                        <li><a href="C:\xampp\htdocs\PPDB-2024\page source ppdb bkl\Bengkulu\login.html" class="register"><span>Login</span></a></li>
                                    </ul>
                                </div>
                                <div class="form-input">
                                    <form>
                                        <div class="form-group">
                                            <input type="text"  id="" name="name" required>
                                            <label>Nama Calon Siswa</label>
                                        </div>
                                        <div class="form-group">
                                            <input type="email"  id="" name="email" required>
                                            <label>Alamat Email Aktif</label>
                                        </div>
                                        <div class="form-group">
                                            <input type="number"  id="" name="email" required>
                                            <label>No. Whatsapp / Handphone</label>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" id="" name="password" required>
                                            <label>Password</label>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" id="" name="password" required>
                                            <label>Confirm Password</label>
                                        </div>
                                        <div class="mb-3" 
                                        style="
                                        margin-top: 5%;
                                        font-family:Roboto;
                                        font-size: 10pt;">
                                            <label for="" class="form-label">Pilih Sekolah</label>
                                            <select
                                                class="form-select form-select-lg"
                                                name=""
                                                id=""
                                                style="
                                                margin-top: 2%;
                                                font-family:Roboto;
                                                font-size: 10pt;
                                                border: 2px solid #e1e1e1;"
                                            >
                                                <option selected>Pilih salah satu</option>
                                                <option value="">TK St. Carolus Tarakanita Bengkulu</option>
                                                <option value="">SD St. Carolus Tarakanita Bengkulu</option>
                                                <option value="">SMP St. Carolus Tarakanita Bengkulu</option>
                                                <option value="">SMA St. Carolus Tarakanita Bengkulu</option>
                                            </select>
                                        </div>
                                        
                                        <div class="myform-button">
                                            <button class="myform-btn"><span>Register</span></button>
                                        </div>
                                        <div class="myform-button1">
                                            <button class="myform-btn1"><span>Register dengan Google</span></button>
                                        </div>
                                        
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
