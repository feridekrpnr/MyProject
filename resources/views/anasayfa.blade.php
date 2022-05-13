<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Eticaret Projesi </title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">


    </head>
    <body class="antialiased">
    @php
        $yas =29;
    @endphp
       Merhaba {{$isim . ' ' . $soyisim}}, {{$yas}} yaşındasın.
    <hr>
    @if($isim == 'Ayşe Meva')
        Hoşgeldin Patron
    @elseif($isim == 'Esra')
         Hoşgeldin Esra
    @else
         Hoşgeldin
    @endif
    <hr>
    @switch($isim)
        @case('Cem')
        Hoşgeldin Cem
        @break

        @case('Esra')
        Hoşgeldin Esra
        @break

        @default
        Hoşgeldin
    @endswitch
    <hr>
    @for($i=0;$i<10;$i++)
        Döngü Değeri: {{$i}}
    @endfor
    <hr>
    @php
    $i=0;
    @endphp
    @while($i<=10)
        Döngü Değeri: {{$i}}
        @php
        $i++;
        @endphp
    @endwhile
    <hr>
    @foreach($isimler as $isim)
         {{$isim . ($isim !== end($isimler) ? ',' : '')}}
    @endforeach
    <hr>

    @foreach($kullanicilar as $kullanici)
        @continue($kullanici['id'] == 1)
        <li>{{ $kullanici['id']. '-' . $kullanici['kullanici_adi'] }}</li>
        @break($kullanici['id'] == 4)
    @endforeach
    <hr>
    @php
        $html = "<b> Test </b>";
    @endphp
        {!! $html !!}
    </body>
</html>
