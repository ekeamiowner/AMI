@extends('layouts.main')

<link rel="stylesheet" href="/css/main.css">
@section('content')
<body style="background: rgb(255,255,255); border-bottom-width: 3px; border-bottom-style: none;">
    <div class="container" data-aos="fade" data-aos-duration="1000" data-aos-once="true" style="padding-top: 5vw;">
        <div class="row">
            <div class="col-md-6 col-xl-5">
                <h2 style="color: rgb(72,15,15); font-weight: bold; font-size: 1.5rem;"><span style="color: rgb(0, 72, 99);">About us</span></h2>
                <p style="font-size: 1.2rem;"><span style="color: rgb(0, 72, 99);">Annales Mathematicae et Informaticae is an international journal of the Institute of Mathematics and Informatics of Eszterházy Károly University (Eger, Hungary), published by Líceum University Press.</span><br></p>
            </div>
            <div class="col-md-6 col-xl-7">
                <h2 style="color: rgb(72,15,15); font-weight: bold; font-size: 1.5rem;"><span style="color: rgb(0, 72, 99);">Aims and Scope</span></h2>
                <p style="font-size: 1.2rem;"><span style="color: rgb(0, 72, 99);">This journal is open for scientific publications in mathematics and computer science, where the field of number theory, group theory, constructive and computer aided geometry as well as theoretical and practical aspects of programming languages receive particular emphasis. Methodological papers are also welcome. Papers submitted to the journal should be written in English. The Editorial Board can accept only new and unpublished material.</span><br></p>
            </div>
        </div>
    </div>
    <div class="container" data-aos="fade" data-aos-duration="1000" data-aos-once="true" style="background: #003144; padding-bottom: 2vw; border-radius: 10px; padding-right: 0; padding-left: 0; border-top-left-radius: 15px; border-top-right-radius: 15px;">
        <div class="row" style="padding: 2vw; margin-left: 0; margin-right: 0; margin-top: 3vw; padding-right: 0; padding-left: 0;">
            <div class="col-lg-11" style="width: 407px;">
                <h1 style="font-size: 1.5rem; color: var(--bs-light); margin-left: 1vw;">Browse volumes or latest articles:</h1>
            </div>
            <div class="col">
                {{-- Dropdown menu --}}
                <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" type="button" style="background: var(--bs-body-bg); font-size: 1.1rem; color: #004863; font-weight: bold;">
                        {{ $selectedOption == 'latest' || !isset($selectedOption) ? 'Latest articles' : $selectedVolume->title }}
                    </button>
                    <div class="dropdown-menu">

                        <a class="dropdown-item {{ $selectedOption == 'latest' ? 'active' : '' }}" href="{{ route('welcome.index', ['option' => 'latest']) }}">Latest articles</a>

                        @foreach($volumes->sortByDesc('created_at') as $volume)
                            <a class="dropdown-item {{ $selectedOption == 'volume' && $selectedVolume->id == $volume->id ? 'active' : '' }}" href="{{ route('welcome.index', ['option' => 'volume', 'volume_id' => $volume->id]) }}">{{ $volume->title }}</a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <div class="row" style="background: #004863; padding: 0; margin-right: 0; margin-left: 0;">
        <div class="col" style="padding-right: 0; padding-left: 0;">
            @if($selectedOption == 'latest' || !isset($selectedOption))
                <h1 style="text-align: center; color: var(--bs-white); font-size: 2.5rem;">Latest articles</h1>
            @else
                <h1 style="text-align: center; color: var(--bs-white); font-size: 2.5rem;">
                    Annales Mathematicae et Informaticae {{ $selectedVolume->title }}
                </h1>
            @endif
        </div>
        </div>
        <div class="row" style="padding: 2vw; margin-right: 0; margin-left: 0; padding-left: 0; padding-right: 0;">
            <div class="col-lg-3" style="padding: 1vw;">
                @if($selectedOption != 'latest' && isset($selectedVolume))
                    <img class="img-fluid" src="/img/covers/{{ $selectedVolume->id }}cover.jpg">
                @endif
            </div>

            @if($selectedOption != 'latest' && isset($selectedVolume))
                <div class="col">
                    <div class="row" style="padding: 0.5vw;">
                        <div class="col" style="background: #004863; border-radius: 15px; padding: 5px;">
                            <h1 style="font-size: 2rem; color: var(--bs-white);">Editorial Board</h1>
                        </div>
                    </div>
                    <div class="row" style="padding: 0.5vw;">
                        <div class="col" style="padding-top: 3px; background: #004863; border-radius: 15px;">
                            <p style="color: var(--bs-white); font-size: 1.2rem;">Sándor Bácsó, Sonja Gorjanc, Tibor Gyimóthy, Miklós Hoffmann, József Holovács, Tibor Juhász, László Kovács, Gergely Kovásznai, László Kozma, Kálmán Liptai, Florian Luca, Giuseppe Mastroianni, Ferenc Mátyás, Ákos Pintér, Miklós Rontó, László Szalay, János Sztrik, Gary Walsh<br></p>
                        </div>
                    </div>
                    <div class="row" style="padding: 0.5vw;">
                        <div class="col" style="background: #004863; border-radius: 15px; padding: 5px;">
                            <h1 style="font-size: 2rem; color: var(--bs-white);">Technical Editor</h1>
                        </div>
                    </div>
                    <div class="row" style="padding: 0.5vw;">
                        <div class="col" style="padding-top: 3px; background: #004863; border-radius: 15px;">
                                <p style="color: var(--bs-white); font-size: 1.2rem;">Tibor Tómács</p>
                        </div>
                    </div>
                </div>
            @endif
        </div>
            
        <div class="container"> 
            @if($selectedOption != 'latest' && isset($selectedVolume))
                @php
                    $researchPapers = $selectedVolume->articles()->where('state', 'ACCEPTED')->where('type_id', 1)->count();
                    $methodologicalPapers = $selectedVolume->articles()->where('state', 'ACCEPTED')->where('type_id', 2)->count();
                @endphp

                    @if($researchPapers > 0)
                        <h3 style="font-size: 1.5rem; font-weight: bold; color: var(--bs-white); margin-top: -60px;">Research Papers</h3><br>
                        {{-- Display research papers --}}
                        @foreach($selectedVolume->articles()->where('state', 'ACCEPTED',)->where('type_id', 1)->get() as $article )
                                @php
                                    $volumeArticle = $article->volumes->first();
                                    $fromPage = $volumeArticle ? $volumeArticle->pivot->from_page : 'N/A';
                                    $toPage = $volumeArticle ? $volumeArticle->pivot->to_page : 'N/A';
                                @endphp
                                
                                <div class="article-container-h" style="border-radius: 15px; padding: 1rem; margin-bottom: 1rem; background-color: #004863;">
                                    <div class="row mx-1">
                                        <div class="col">   
                                            <div class="header-section-h">
                                            <h3 style="font-size: 1.5rem; font-weight: bold; color: var(--bs-white);">
                                                <a href="{{ route('open-article') }}?file={{ $article->source }}" style="text-decoration: none; color: inherit;">
                                                    {{ $article->title }}
                                                </a>
                                            </h3>
                                            <div class="author-reviewer">
                                                <span class="author" style="font-size: 1.2rem;">by {{ optional($article->user)->name }}</span> 
                                            </div>
                                            </div>
                                            <div class="abstract-section" style="font-size: 1.2rem; color: var(--bs-white);">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="abstract-content"><em>Pages: {{ $fromPage }} - {{ $toPage }}</em></div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <span>DOI:</span> <span style="font-weight: bold;">{{ $article->doi }}</span>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="abstract-content text-right">{{ $article->updated_at }}</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        @endforeach
                    @endif

                    @if($methodologicalPapers > 0)
                        <h3 style="font-size: 1.5rem; font-weight: bold; color: var(--bs-white);">Methodological Papers</h3><br>
                        {{-- Display methodological papers --}}
                        @foreach($selectedVolume->articles()->where('state', 'ACCEPTED',)->where('type_id', 2)->get() as $article )
                                @php
                                    $volumeArticle = $article->volumes->first();
                                    $fromPage = $volumeArticle ? $volumeArticle->pivot->from_page : 'N/A';
                                    $toPage = $volumeArticle ? $volumeArticle->pivot->to_page : 'N/A';
                                @endphp
                                
                                <div class="article-container-h" style="border-radius: 15px; padding: 1rem; margin-bottom: 1rem; background-color: #004863;">
                                    <div class="row mx-1">
                                        <div class="col">   
                                            <div class="header-section-h">
                                            <h3 style="font-size: 1.5rem; font-weight: bold; color: var(--bs-white);">
                                                <a href="{{ route('open-article') }}?file={{ $article->source }}" style="text-decoration: none; color: inherit;">
                                                    {{ $article->title }}
                                                </a>
                                            </h3>
                                            <div class="author-reviewer">
                                                <span class="author" style="font-size: 1.2rem;">by {{ optional($article->user)->name }}</span> 
                                                {{-- <span class="editor">Editor: {{ optional($article->editor)->name }}</span> --}}
                                            </div>
                                            </div>
                                            <div class="abstract-section" style="font-size: 1.2rem; color: var(--bs-white);">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="abstract-content"><em>Pages: {{ $fromPage }} - {{ $toPage }}</em></div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <span>DOI:</span> <span style="font-weight: bold;">{{ $article->doi }}</span>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="abstract-content text-right">{{ $article->updated_at }}</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        @endforeach
                    @endif
                @endif
            </div>


            @if($selectedOption == 'latest' || !isset($selectedOption))
                {{-- Display the latest 5 articles --}}
                @foreach($articles->sortByDesc('updated_at')->take(5) as $article)
                    <div class="article-container-h" style="border-radius: 15px; padding: 1rem; margin-bottom: 1rem; background-color: #004863;">
                        <div class="row mx-1">
                            <div class="col">   
                                <div class="header-section-h">
                                    <h3 style="font-size: 1.5rem; font-weight: bold; color: var(--bs-white);">
                                        <a href="{{ route('open-article') }}?file={{ $article->source }}" style="text-decoration: none; color: inherit;">
                                            {{ $article->title }}
                                        </a>
                                    </h3>    
                                    <div class="author-reviewer">
                                        <span class="author" style="font-size: 1.2rem; color: var(--bs-white);">{{ optional($article->type)->name }} by {{ optional($article->user)->name }}</span> 
                                        {{-- <span class="editor">Editor: {{ optional($article->editor)->name }}</span> --}}
                                    </div>
                                </div>
                                <div class="abstract-section" style="font-size: 1.2rem; color: var(--bs-white);">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="abstract-content">Published online: {{ $article->updated_at }} </div>
                                        </div>
                                        <div class="col-md-6">
                                            <span>DOI:</span> <span style="font-weight: bold;">{{ $article->doi }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
        </div>
    </div>
    

    <div class="container d-sm-flex d-xl-flex justify-content-sm-center align-items-sm-center justify-content-xl-center align-items-xl-center" style="padding-top: 4vw;">
        <img class="img-fluid" data-aos="fade" data-aos-duration="1000" data-aos-once="true" src="/img/EKCU.png" style="width: 50%;">
    </div>

    <div class="container" style="padding-top: 5vw; text-align: center;">
        <div class="row" data-aos="fade" data-aos-duration="1800" data-aos-delay="50" data-aos-once="true">
            <div class="col-md-12">
                <h2 style="color: rgb(72,15,15); font-weight: bold; font-size: 1.5rem;"><span style="color: rgb(0, 72, 99);">Abstracting / Indexing</span></h2>
            </div>
        </div>
        <div class="row" style="padding-top: 2vw; margin-top: 3vw;">
            <div class="col d-flex flex-column align-items-center" data-aos="fade" data-aos-duration="2000" data-aos-delay="100" data-aos-once="true">
                <p style="font-size: 1.2rem; text-align: center;"><span style="color: rgb(0, 72, 99);">Clarivate Analytics (formerly Thomson Reuters) Emerging Sources Citation Index</span><br></p>
                <div class="d-flex justify-content-center align-items-center" style="width: 100%; height: 100%;">
                    <img class="img-fluid" src="/img/clarivate.png">
                 </div>
            </div>
            <div class="col d-flex flex-column align-items-center" data-aos="fade" data-aos-duration="2000" data-aos-delay="150" data-aos-once="true">
                <p style="font-size: 1.2rem; text-align: center;"><span style="color: rgb(0, 72, 99);">Scopus</span><br></p>
                <div class="d-flex justify-content-center align-items-center" style="width: 100%; height: 100%;">
                    <img class="img-fluid" src="/img/scopus.gif" width="198" height="198">
                </div>
            </div>
            <div class="col d-flex flex-column align-items-center" data-aos="fade" data-aos-duration="2000" data-aos-delay="200" data-aos-once="true">
                <p style="font-size: 1.2rem; text-align: center;"><span style="color: rgb(0, 72, 99);">Zentralblatt für Mathematik</span><br></p>
                <div class="d-flex justify-content-center align-items-center" style="width: 100%; height: 100%;">
                    <img class="img-fluid" src="/img/Zentralblatt.png">
                </div>
            </div>
            <div class="col d-flex flex-column align-items-center" data-aos="fade" data-aos-duration="2000" data-aos-delay="250" data-aos-once="true">
                <p style="font-size: 1.2rem; text-align: center;"><span style="color: rgb(0, 72, 99);">Mathematical Reviews</span><br></p>
                <div class="d-flex justify-content-center align-items-center" style="width: 100%; height: 100%;">
                    <img class="img-fluid" src="/img/MathReviews.png" width="261" height="79">
                </div>
            </div>
            <div class="col d-flex flex-column align-items-center" data-aos="fade" data-aos-duration="2000" data-aos-delay="300" data-aos-once="true">
                <p style="font-size: 1.2rem; text-align: center;"><span style="color: rgb(0, 72, 99);">EBSCO Academic Search Ultimate</span><br></p>
                <div class="d-flex justify-content-center align-items-center" style="width: 100%; height: 100%;">
                    <img class="img-fluid" src="/img/EBSCO.png" width="261" height="79">
                </div>
            </div>
            <div class="col d-flex flex-column align-items-center" data-aos="fade" data-aos-duration="2000" data-aos-delay="350" data-aos-once="true">
                <p style="font-size: 1.2rem; text-align: center;"><span style="color: rgb(0, 72, 99);">Methodological papers are indexed by Zentralblatt MathEduc</span><br></p>
                <div class="d-flex justify-content-center align-items-center" style="width: 100%; height: 100%;">
                    <img class="img-fluid" src="/img/MathEduclogo.gif" width="261" height="79">
                </div>
            </div>
        </div>
    </div>
</body> 
@endsection
