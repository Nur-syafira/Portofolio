<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Portfolio</title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('depan') }}/css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@v2.15.1/devicon.min.css">

    <style>
        #sideNav {
            background-color: #f0e68c; 
        }

        body {
            background-color: #FFFDD0; 
            color: #000000; /* Text color */
        }
        /* Atur background gambar untuk bagian Tentang Saya */
        #about {
            background-image: url('/depan/profil.png'); /* Path to your uploaded image */
            background-color: rgb(252, 245, 181); /* Fallback color */
            background-size: cover; /* Ensures the image covers the entire background */
            background-position: center center; /* Ensures the image is centered properly */
            background-repeat: no-repeat; /* Prevents the image from repeating */
            padding: 20px;
            border-radius: 10px; /* Optional: Rounded corners */
            min-height: 100vh; /* Ensures the section takes at least full viewport height */
            width: 100%; /* Ensures the section takes full width */
            box-sizing: border-box; /* Includes padding in the element's total width and height */
        }

        h1, h2, h3 {
            color: #000000; 
        }

        /* Mengubah warna link navbar */
        .nav-link {
            color: #000000; /* Default text color */
        }

        .nav-link:hover {
            color: gray; /* Change to gray when hovered */
            text-decoration: none; /* Optional: remove underline on hover */
        }
        /* Mengubah warna elemen primary */
        .text-primary {
            color: #b0c4de; 
        }

        /* Mengubah warna ikon sosial */
        .social-icon {
            color: #ffffff; 
        }

        .social-icon:hover {
            color: #e6e6fa; 
        }
    </style>
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="sideNav">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">
            <span class="d-block d-lg-none">{{ $about->judul }}</span>
            <span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2"
                    src="{{ asset('foto') . '/' . get_meta_value('_foto') }}" alt="..." /></span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
            aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span
                class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">Tentang Saya</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#experience">Pengalaman</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#education">Pendidikan</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#skills">Skills</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#interests">Kegiatan</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#awards">Penghargaan</a></li>
            </ul>
        </div>
    </nav>
    <!-- Page Content-->
    <div class="container-fluid p-0">
        <!-- About-->
        <section class="resume-section" id="about">
            <div class="resume-section-content">
                <h1 class="mb-0">
                    {!! set_about_nama($about->judul) !!}
                </h1>
                <div class="subheading mb-5">
                    {{ get_meta_value('_kota') }} · {{ get_meta_value('_provinsi') }} · {{ get_meta_value('_nohp') }} ·
                    <a href="{{ get_meta_value('_email') }}">{{ get_meta_value('_email') }}</a>
                </div>
                <div class="lead mb-5">{!! $about->isi !!}</div>
                <div class="social-icons">
                    <a class="social-icon" href="{{ get_meta_value('_linkedin') }}"><i
                            class="fab fa-linkedin-in"></i></a>
                    <a class="social-icon" href="{{ get_meta_value('_github') }}"><i class="fab fa-github"></i></a>
                    <a class="social-icon" href="{{ get_meta_value('_twitter') }}"><i class="fab fa-twitter"></i></a>
                    <a class="social-icon" href="{{ get_meta_value('_facebook') }}"><i
                            class="fab fa-facebook-f"></i></a>
                </div>
            </div>
        </section>
        <hr class="m-0" />
        <!-- Experience-->
        <section class="resume-section" id="experience">
            <div class="resume-section-content">
                <h2 class="mb-5">Pengalaman</h2>
                @foreach ($experience as $item)
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">{{ $item->judul }}</h3>
                            <div class="subheading mb-3">{{ $item->info1 }}</div>
                            {!! $item->isi !!}
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">{{ $item->tgl_mulai_indo }} - {{ $item->tgl_akhir_indo }}</span></div>
                    </div>
                @endforeach
            </div>
        </section>
        <hr class="m-0" />
        <!-- Education-->
        <section class="resume-section" id="education">
            <div class="resume-section-content">
                <h2 class="mb-5">Pendidikan</h2>
                @foreach ($education as $item)
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">{{ $item->judul }}</h3>
                            <div class="subheading mb-3">{{ $item->info1 }}</div>
                            <div>{{ $item->info2 }}</div>
                            <p>{{ $item->info3 }}</p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">{{ $item->tgl_mulai_indo }} - {{ $item->tgl_akhir_indo }}</span></div>
                    </div>
                @endforeach
            </div>
        </section>
        <hr class="m-0" />
        <!-- Skills-->
        <section class="resume-section" id="skills">
            <div class="resume-section-content">
                <h2 class="mb-5">Skills</h2>
                <div class="subheading mb-3">Programming Languages & Tools</div>
                <ul class="list-inline dev-icons">
                    @foreach (explode(', ', get_meta_value('_language')) as $item)
                        <li class="list-inline-item"><i class="devicon-{{ strtolower($item) }}-plain"></i></li>
                    @endforeach
                </ul>
                <div class="subheading mb-3">Project</div>
                {!! set_list_workflow(get_meta_value('_workflow')) !!}
            </div>
        </section>
        <hr class="m-0" />
        <!-- Interests-->
        <section class="resume-section" id="interests">
            <div class="resume-section-content">
                <h2 class="mb-5">{{ $interest->judul }}</h2>
                {!! $interest->isi !!}
            </div>
        </section>
        <hr class="m-0" />
        <!-- Awards-->
        <section class="resume-section" id="awards">
            <div class="resume-section-content">
                <h2 class="mb-5">{{ $award->judul }}</h2>
                {!! set_list_award($award->isi) !!}
            </div>
        </section>
    </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{ asset('depan') }}/js/scripts.js"></script>
</body>

</html>