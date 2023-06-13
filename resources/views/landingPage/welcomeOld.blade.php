<style>
    * {
        text-decoration: none;
        margin: 0px;
        padding: 0px;
    }

    .wrapper {
        width: 1100px;
        margin: auto;
        position: relative;
    }

    .logo a {
        font-size: 50px;
        font-weight: 800;
        float: left;
        /* font-family: courier; */
        color: #146c94;
    }

    .menu {
        float: right;
    }

    .kolom .slogan {
        font-style: italic;
        font-weight: bold;
    }

    nav {
        width: 100%;
        margin: auto;
        display: flex;
        line-height: 80px;
        position: sticky;
        position: -webkit-sticky;
        top: 0;
        background: #ffffff;
        z-index: 1;
        border-bottom: 1px solid #146c94;
    }

    nav ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
    }

    nav ul li {
        float: left;
    }

    nav ul li a {
        color: black;
        font-weight: bold;
        text-align: center;
        padding: 0px 16px 0px 16px;
        text-decoration: none;
    }

    nav ul li a:hover {
        color: #146c94;
    }

    section {
        margin: auto;
        display: flex;
        margin-bottom: 50px;
        padding-top: 5rem;
        min-height: 100px;
    }

    .kolom {
        margin-top: 50px;
        margin-bottom: 50px;
    }

    .kolom .deskripsi {
        font-size: 20px;
        font-weight: bold;
        /* font-family: "comic sans ms"; */
        color: #146c94;
    }

    h2 {
        /* font-family: "comic sans ms"; */
        font-weight: 800;
        font-size: 45px;
        margin-bottom: 20px;
        color: #146c94;
        width: 100%;
        line-height: 50px;
    }

    a.tbl-biru {
        background: #146c94;
        border-radius: 20px;
        margin-top: 20px;
        padding: 15px 20px 15px 20px;
        color: #ffffff;
        cursor: pointer;
        font-weight: bold;
    }

    a.tbl-biru:hover {
        background: #ffff;
        text-decoration: none;
    }

    p {
        font-weight: bold;
        margin: 10px 0px 10px 0px;
        padding: 10px 0px 10px 0px;
    }

    .tengah {
        text-align: center;
        width: 100%;
    }

    #contact {
        background: #dedede;
        padding: 50px 0px 50px 0px;
    }

    .footer {
        width: 100%;
        height: auto;
        position: relative;
        display: flex;
        flex-wrap: wrap;
        margin: auto;
    }

    .footer-section {
        width: 20%;
        margin: 0 auto;
    }

    h3 {
        font-family: "comic sans ms";
        font-weight: 800;
        font-size: 30px;
        margin-bottom: 10px;
        color: #146c94;
        width: 100%;
        line-height: 50px;
    }

    @media screen and (max-width: 991.98px) {
        .wrapper {
            width: 90%;
        }

        .logo a {
            display: block;
            width: 100%;
            text-align: center;
        }

        nav .menu {
            width: 100%;
            margin: 0;
        }

        nav .menu ul {
            text-align: center;
            margin: auto;
            line-height: 60px;
        }

        nav .menu ul li {
            display: inline-block;
            float: none;
        }

        section {
            display: block;
        }

        .section img {
            display: block;
            width: 100%;
            height: auto;
        }

        .footer-section {
            width: 200%;
        }
    }
</style>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIAKAD</title>
</head>

<body>
    <nav>
        <div class="wrapper">
            <div class="logo">
                <a href="#home"> SMPI YAPKUM</a>
            </div>
            <div class="menu">
                <ul>
                    <li>
                        <a href="#home"> Home</a>
                    </li>
                    <li>
                        <a href="#tentang"> Tentang</a>
                    </li>
                    <li>
                        <a href="#visimisi"> Visi&Misi</a>
                    </li>
                    <li>
                        <a href="#contact">Contact</a>
                    </li>
                    <li><a href="/login" class="tbl-biru">Sign In</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="wrapper">

        <!-- untuk home -->
        <section id="home">
            <img src="{{ 'img_landingPage/students.png' }}" alt="student">
            <div class="kolom">
                <p class="deskripsi">Sistem Informasi Akademik</p>
                <h2>SMP ISLAM YAPKUM</h2>
                <p class="slogan">"Sekolah yang Bermutu, Mencetak Generasi Berilmu"</p>
            </div>
        </section>


        <!-- untuk tentang -->
        <section id="tentang">
            <div class="kolom">
                <h2>Tentang Kami</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed deserunt voluptatibus possimus
                    blanditiis reiciendis. Qui, facilis! Delectus exercitationem dolores sapiente?</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed deserunt voluptatibus possimus
                    blanditiis reiciendis. Qui, facilis! Delectus exercitationem dolores sapiente?</p>
            </div>
            <img src="{{ 'img_landingPage/students2.png' }}" alt="student" />
        </section>

        <!-- untuk tutors -->
        <section id="visimisi">
            <div class="tengah">
                <div class="kolom">
                    <h2>Visi & Misi</h2>
                    <h3>Visi</h3>
                    <p>Mencetak generasi yang maju dalam berfikir dan bertindak dguuuudggus </p>
                    <h3>Misi</h3>
                    <p>Mencetak generasi yang maju dalam berfikir dan bertindak dguuuudggus </p>
                </div>
            </div>
        </section>
    </div>

    <div id="contact">
        <div class="wrapper">
            <div class="footer">
                <div class="footer-section">
                    <h3>Alamat</h3>
                    <p>Jl. H.Usman No.27, Meruyung, Kec. Limo, Kota Depok, Jawa Barat 16515</p>
                </div>
                <div class="footer-section">
                    <h3>No Telepon</h3>
                    <p> (021) 77973193 </p>
                </div>
                <div class="footer-section">
                    <h3>Email</h3>
                    <p>smpi.yapkum@gmail.com</p>
                </div>
                <div class="footer-section">
                    <h3>Social</h3>
                    <p>
                        <b>Instagram : </b> @smpiyapkum
                    </p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
