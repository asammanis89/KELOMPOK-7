<!-- TEAM -->
<section id="team" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center" data-aos="fade-down" data-aos-delay="150">
                <div class="section-title">
                    <h1 class="display-4 fw-semibold">TOP 3 PENYAKIT UMUM</h1>
                    <div class="line"></div>
                    <p>Pelajari berbagai penyebab umum sakit dan cara-cara efektif untuk mengatasinya.</p>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($penyakit as $p)
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card" data-aos="fade-up" data-aos-delay="200">
                        <img src="{{ $p->image }}" class="card-img-top" alt="{{ $p->title }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $p->title }}</h5>
                            <p class="card-text">{{ $p->description }}</p>
                            <a href="{{ $p->link }}" class="btn btn-primary">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
