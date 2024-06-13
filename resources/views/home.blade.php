@extends('layout')

@section('konten')
<section class="hero" id="home">
    <div class="main-content" data-aos="fade-in">
        <h4>Helloo guys</h4>
        <h1>Nama saya <span>Abdul Hadi</span></h1> 
        <p>saya lahir di bogor pada tanggal 2 juni 2008, saya anak sulung, & saya punya hobi main futsal/sepakbola.
        </p>
        <div class="social">
            <a href="https://www.instagram.com/doel.hxd/" target="_blank"><i class="ri-instagram-fill"></i></a>
            <a href="tel:+6281281002848" target="_blank"><i class="ri-whatsapp-fill"></i></a>
            <a href="https://maps.app.goo.gl/t2PTA8n8Z22nCbys7" target="_blank"><i
                    class="ri-map-pin-user-fill"></i></a>
            <a href="https://github.com/dudullll" target="_blank"><i class="ri-github-fill"></i></a>
            <a href="mailto:abdulhadi@smkwikrama.sch.id" target="_blank"><i class="ri-mail-open-fill"></i></a>
        </div>

        <div class="main-btn">
            <a href="/about" class="btn">Me</a>
            <a href="/contact" class="btn btn2">Contact Me</a>
        </div>
    </div>
</section>
@endsection