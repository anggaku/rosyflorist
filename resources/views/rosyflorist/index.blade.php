@extends('layouts.main')

@section('content')

    <header>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <!-- Slide One - Set the background image for this slide in the line below -->
                <div class="carousel-item active" style="background-image: url('https://source.unsplash.com/1920x1080/?roses')">
                    <div class="image-overlay">
                        <div class="carousel-caption d-none d-md-block">
                            <h2 class="display-4">Say it with Flowers</h2>
                            <p class="lead">Give the flowers for a special moments.</p>
                        </div>
                    </div>
                </div>
                <!-- Slide Two - Set the background image for this slide in the line below -->
                <div class="carousel-item" style="background-image: url('https://source.unsplash.com/1920x1080/?flowers')">
                    <div class="image-overlay">
                        <div class="carousel-caption d-none d-md-block">
                            <h2 class="display-4">Flowers are our constant friends</h2>
                            <p class="lead">In joy or sadness, flowers are our constant friends.</p>
                        </div>
                    </div>
                </div>
                <!-- Slide Three - Set the background image for this slide in the line below -->
                <div class="carousel-item" style="background-image: url('https://source.unsplash.com/1920x1080/?flower')">
                    <div class="image-overlay">
                        <div class="carousel-caption d-none d-md-block">
                            <h2 class="display-4">Flowers are happiness</h2>
                            <p class="lead">Happiness radiates like the fragrance from a flower and draws all good things towards you.</p>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </header>

    <section id="sample_buket">
        <div class="container">
            <div class="row">
                <div class="col-md-4 shadow p-3 mb-5 bg-white rounded">
                    <div class="hovereffect">
                        <img class="img-fluid img-custom" src="/img/gambar1.jpg" alt="gambar 1">
                        <div class="overlay">
                            <h2>PomPom Flowers</h2>
                            <a class="info" href="#">Other Catalog of PomPom</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 shadow p-3 mb-5 bg-white rounded">
                    <div class="hovereffect">
                        <img class="img-fluid img-custom" src="/img/gambar2.jpg" alt="gambar 1">
                        <div class="overlay">
                            <h2>Lily Flowers</h2>
                            <a class="info" href="#">Other Catalog of Lily</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 shadow p-3 mb-5 bg-white rounded">
                    <div class="hovereffect">
                        <img class="img-fluid img-custom" src="/img/gambar3.jpg" alt="gambar 1">
                        <div class="overlay">
                            <h2>Flower Box</h2>
                            <a class="info" href="#">Other Catalog of Flower Box</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 shadow p-3 mb-5 bg-white rounded">
                    <div class="hovereffect">
                        <img class="img-fluid img-custom" src="/img/gambar4.jpg" alt="gambar 1">
                        <div class="overlay">
                            <h2>Dried Flowers</h2>
                            <a class="info" href="#">Other Catalog of Dried Flowers</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 shadow p-3 mb-5 bg-white rounded">
                    <div class="hovereffect">
                        <img class="img-fluid img-custom" src="/img/gambar5.jpg" alt="gambar 1">
                        <div class="overlay">
                            <h2>Rose Flowers</h2>
                            <a class="info" href="#">Other Catalog of Rose</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 shadow p-3 mb-5 bg-white rounded">
                    <div class="hovereffect">
                        <img class="img-fluid img-custom" src="/img/gambar6.jpg" alt="gambar 1">
                        <div class="overlay">
                            <h2>Hydrangea Flowers</h2>
                            <a class="info" href="#">Other Catalog of Hydrangea</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="about_service" class="bg-light">
        <div class="container">
            <h3 class="text-center title-section">About Service</h3>
            <h3 class="text-center subtitle-section">What We Do?</h3>
            <div class="row my-5 justify-content-center">
                <div class="col-md-3 text-center bg-white img-thumbnail">
                    <div class="image-icon">
                        <img src="/img/icon1.png" alt="flower bouquet" class="img-fluid">
                    </div>
                    <div class="image-title">
                        Quality
                    </div>
                    <div class="image-desc">
                        Rosy Florist selalu mengutamakan kualitas terhadap semua produk-produknya.
                    </div>
                </div>
                <div class="col-md-3 text-center bg-white img-thumbnail">
                    <div class="image-icon">
                        <img src="/img/icon2.png" alt="flower bouquet" class="img-fluid">
                    </div>
                    <div class="image-title">
                        Florist
                    </div>
                    <div class="image-desc">
                        Kunjungi Toko Rosy Florist di dalam MarketPlace Tokopedia dan Bukalapak.
                    </div>
                </div>
                <div class="col-md-3 text-center bg-white img-thumbnail">
                    <div class="image-icon">
                        <img src="/img/icon3.png" alt="flower bouquet" class="img-fluid">
                    </div>
                    <div class="image-title">
                        Order
                    </div>
                    <div class="image-desc">
                        Order Produk Rosy Florist melalui nomor WhatsApp (081282753661 / 081212941016).
                    </div>
                </div>
                <div class="col-md-3 text-center bg-white img-thumbnail">
                    <div class="image-icon">
                        <img src="/img/icon4.png" alt="flower bouquet" class="img-fluid">
                    </div>
                    <div class="image-title">
                        Need help?
                    </div>
                    <div class="image-desc">
                        Jika kamu ingin bertanya-tanya seputar produk Rosy Florist, support kami akan segera membantu.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="portofolio">
        <div class="container">
            <h3 class="text-center title-section">Our Gallery</h3>
            <div class="row my-5">

                <a href="/img/gambar1.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4 my-3 hover08">
                    <img src="/img/gambar1.jpg" class="img-fluid">
                </a>
                <a href="/img/gambar2.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4 my-3 hover08">
                    <img src="/img/gambar2.jpg" class="img-fluid">
                </a>
                <a href="/img/gambar3.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4 my-3 hover08">
                    <img src="/img/gambar3.jpg" class="img-fluid">
                </a>
                <a href="/img/gambar4.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4 my-3 hover08">
                    <img src="/img/gambar4.jpg" class="img-fluid">
                </a>
                <a href="/img/gambar5.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4 my-3 hover08">
                    <img src="/img/gambar5.jpg" class="img-fluid">
                </a>
                <a href="/img/gambar6.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4 my-3 hover08">
                    <img src="/img/gambar6.jpg" class="img-fluid">
                </a>

            </div>
        </div>
    </section>

    <section id="our_team">
        <div class="container">
            <h3 class="text-center title-section">Our Team</h3>
            <h3 class="text-center subtitle-section">Rosy Florist</h3>
            <div class="row justify-content-center my-5">
                <div class="col-md-6">
                    <div class="our_team shadow p-3 mb-5 bg-white rounded">
                        <div class="image-photo text-center mb-2">
                            <img class="img-fluid img-circle" src="/img/muti.jpg" alt="mutia">
                        </div>
                        <div class="title-photo text-center">
                            <h6>MUTIARA ROMANA KUSUMA</h6>
                        </div>
                        <div class="subtitle-photo text-center">
                            <p>Founder & Florist</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="our_team shadow p-3 mb-5 bg-white rounded">
                        <div class="image-photo text-center mb-2">
                            <img class="img-fluid img-circle" src="/img/anggaku.jpg" alt="angga">
                        </div>
                        <div class="title-photo text-center">
                            <h6>ANTONIUS ANGGA KURNIAWAN</h6>
                        </div>
                        <div class="subtitle-photo text-center">
                            <p>Co-Founder</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @endsection
    