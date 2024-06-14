@extends('layout')

@section('konten')
    <section class="portofolio" id="portofolio">
        <div class="center-text" data-aos="zoom-in-down">
            <h2>My<span> Portofolio </span></h2>
        </div>
        <div class="category-buttons">
            <button class="h-btn" onclick="showCategory('all')">All</button>
            <button class="h-btn" onclick="showCategory('training')">Training Projects</button>
            <button class="h-btn" onclick="showCategory('simple')">Simple Projects</button>
            <button class="h-btn" onclick="showCategory('big')">Big Projects</button>
        </div>
        <div class="portofolio-content" data-aos="zoom-in-up">
            <!-- Training Projects -->
            <div class="row training">
                <img src="image/bg 3.png" class="bisa"
                    onclick="openModal(this.src, 'Website untuk menyimpan list list tugas atau lainnya')">
                <div class="main-row">
                    <div class="row-text">
                        <h5><em>to-do-list</em></h5>
                    </div>
                    <div class="row-icon">
                        <a href="https://dudullll.github.io/listt/list" target="_blank"><i class="ri-eye-fill"></i></a>
                    </div>
                    <h4>t-project 1</h4>
                </div>
            </div>
            <div class="row training">
                <img src="image/bpala.png" class="bisa" onclick="openModal(this.src, 'Website personal Bapala')">
                <div class="main-row">
                    <div class="row-text">
                        <h5><em>travel</em></h5>
                    </div>
                    <div class="row-icon">
                        <a href="file:///D:/Coding%20dudul/travel/travel.html" target="_blank"><i
                                class="ri-eye-fill"></i></a>
                    </div>
                    <h4>t-project 2</h4>
                </div>
            </div>
            <!-- Simple Projects -->
            <div class="row simple">
                <img src="image/segper.jpg" class="bisa"
                    onclick="openModal(this.src, 'Website untuk menghitung luas & keliling segitiga & persegi panjang')">
                <div class="main-row">
                    <div class="row-text">
                        <h5><em>kalkulator</em></h5>
                    </div>
                    <div class="row-icon">
                        <a href="https://doeldi.great-site.net" target="_blank"><i class="ri-eye-fill"></i></a>
                    </div>
                    <h4>s-project 1</h4>
                </div>
            </div>
            <div class="row simple">
                <img src="image/rental-motor.png" class="bisa"
                    onclick="openModal(this.src, 'Website untuk peminjaman/rental motor')">
                <div class="main-row">
                    <div class="row-text">
                        <h5><em>rental motor</em></h5>
                    </div>
                    <div class="row-icon">
                        <a href="http://doeldi.42web.io/?i=1" target="_blank"><i class="ri-eye-fill"></i></a>
                    </div>
                    <h4>s-project 2</h4>
                </div>
            </div>
            <div class="row simple">
                <img src="image/BBM.png" class="bisa" onclick="openModal(this.src, 'Website BBM')">
                <div class="main-row">
                    <div class="row-text">
                        <h5><em>BBM</em></h5>
                    </div>
                    <div class="row-icon">
                        <a href="http://doeldi.free.nf/" target="_blank"><i class="ri-eye-fill"></i></a>
                    </div>
                    <h4>s-project 3</h4>
                </div>
            </div>
            <div class="row simple">
                <img src="image/shopracer.png" class="bisa"
                    onclick="openModal(this.src, 'Website penjualan motor custom')">
                <div class="main-row">
                    <div class="row-text">
                        <h5><em>shop racer</em></h5>
                    </div>
                    <div class="row-icon">
                        <a href="https://dudullll.github.io/shop.github.io/" target="_blank"><i class="ri-eye-fill"></i></a>
                    </div>
                    <h4>s-project 4</h4>
                </div>
            </div>
            <!-- Big Projects -->
            <div class="row big">
                <img src="image/nice.png" class="bisa" onclick="openModal(this.src, 'Website portofolio personal saya')">
                <div class="main-row">
                    <div class="row-text">
                        <h5><em>portofolio</em></h5>
                    </div>
                    <div class="row-icon">
                        <a href="https://doeldi.000webhostapp.com/" target="_blank"><i class="ri-eye-fill"></i></a>
                    </div>
                    <h4>b-project 1</h4>
                </div>
            </div>
            <div class="row big">
                <img src="image/proyek 1.png" class="bisa" onclick="openModal(this.src, 'Website edukasi pembelajaran')">
                <div class="main-row">
                    <div class="row-text">
                        <h5><em>edukasi</em></h5>
                    </div>
                    <div class="row-icon">
                        <a href="file:///D:/Coding%20dudul/project/frontend/profile.html" target="_blank"><i
                                class="ri-eye-fill"></i></a>
                    </div>
                    <h4>b-project 2</h4>
                </div>
            </div>
            <div class="row big">
                <img src="image/dasis.png" class="bisa"
                    onclick="openModal(this.src, 'Website untuk menyimpan Data Siswa')">
                <div class="main-row">
                    <div class="row-text">
                        <h5><em>data siswa</em></h5>
                    </div>
                    <div class="row-icon">
                        <a href="http://doeldi.000.pe/?i=1" target="_blank"><i class="ri-eye-fill"></i></a>
                    </div>
                    <h4>b-project 3</h4>
                </div>
            </div>
        </div>

        <div id="modal" class="modal">
            <span class="close" onclick="closeModal()">&times;</span>
            <img class="modal-content" id="modal-img">
            <div id="caption" class="caption"></div>
        </div>
    </section>

    <script>
        function openModal(src, description) {
            document.getElementById('modal').style.display = "block";
            document.getElementById('modal-img').src = src;
            document.getElementById('caption').innerText = description;
        }

        function closeModal() {
            document.getElementById('modal').style.display = "none";
        }

        function showCategory(category) {
            var rows = document.getElementsByClassName('row');
            for (var i = 0; i < rows.length; i++) {
                if (category === 'all') {
                    rows[i].style.display = 'block';
                } else if (rows[i].classList.contains(category)) {
                    rows[i].style.display = 'block';
                } else {
                    rows[i].style.display = 'none';
                }
            }
        }
    </script>
@endsection
