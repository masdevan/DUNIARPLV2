<!DOCTYPE html>
<html lang="en">

<x-partials.head>
  <link rel="stylesheet" href="{{ asset('assets/css/vendor/glightbox.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/vendor/plyr.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/vendor/prism.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/vendor/scrollcue.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/vendor/swiper-bundle.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/vendor/animate.css') }}">
  <title>RPL-Sata | {{ $title }}</title>
  {{-- ...dll --}}
</x-partials.head>

<body>
  <div class="content-wrapper">

    {{-- start: headers --}}
    <x-partials.headers/>
    {{-- end: headers --}}

    {{ $slot }}
    
  </div>
  <x-partials.foother />
  <x-partials.progress-wrap/>
  <x-partials.scripts>
    {{-- masukan script lainya disini atau langsung msukan ke partials/scripts --}}
  </x-partials.scripts>
</body>

</html>