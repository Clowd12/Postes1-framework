@extends('layouts.base')

@section('content')

<body>
    
    <h2>Bookmark</h2>

<div class="manga-grid">
    <div class="manga-card">
        <h3>Damn Reincarnation</h3>
        <img src="/image/1.jpg" alt="" id="img-list" class="img-list">
        <p>Chapter 68</p>
    </div>
    <div class="manga-card">
        <h3>Retrun of the Mad Demon</h3>
        <img src="/image/8.webp" alt="" id="img-list" class="img-list">
        <p>Chapter 90</p>
    </div>
    <div class="manga-card">
        <h3>Wind Breaker</h3>
        <img src="/image/9.jpg" alt="" id="img-list" class="img-list">
        <p>Chapter 463</p>
    </div>
    <div class="manga-card">
        <h3>Nano Machine</h3>
        <img src="/image/5.jpg" alt="" id="img-list" class="img-list">
        <p>Chapter 179 END</p>
    </div>
    <div class="manga-card">
        <h3>The World's Best Engineer</h3>
        <img src="/image/6.webp" alt="" id="img-list" class="img-list">
        <p>Chapter 104</p>
    </div>
    <div class="manga-card">
        <h3>Magic Emperor</h3>
        <img src="/image/10.jpg" alt="" id="img-list" class="img-list">
        <p>Chapter 450</p>
    </div>
    </div>

@endsection   
</body>
</html>









{{-- <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Mangaku</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        
        <!-- Styles -->
        <link rel="stylesheet" href="style.css">
    </head>

    @extends('layouts.base')

    @section('content')
    <body >
         <div class="manga-grid">
            <div class="manga-card">
                <h3>Game obu Familia</h3>
                <img src="/image/2.webp" alt="" id="img-list" class="img-list">
                <p>Chapter 55</p>
            </div>

            <div class="manga-card">
            <h3>Damn Reincarnation</h3>
            <img src="/image/1.jpg" alt="" id="img-list" class="img-list">
            <p>Chapter 68</p>

            <div class="manga-grid">
                <div class="manga-card">
                    <h3>Magic Emperor</h3>
                    <img src="/image/10.jpg" alt="" id="img-list" class="img-list">
                    <p>Chapter 450</p>
                </div>

                <div class="manga-grid">
                    <div class="manga-card">
                        <h3>The World's Best Engineer</h3>
                        <img src="/image/6.webp" alt="" id="img-list" class="img-list">
                        <p>Chapter 104</p>
                    </div>
                </div>
            </div>
                    
            @endsection
    
        </body>
    </html> --}}