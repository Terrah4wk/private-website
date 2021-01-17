@extends('layout')

@section('content')

<div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">
    <div class="me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
        <div class="my-3 py-3">
            <h2 class="display-5">Über mich</h2>
            <p class="promo-block-text">
                geboren am 24.07.1984 in Lahr/Schwarzwald.<br>
                Softwareentwickler (bevorzugt Backend)<br>
            </p>
        </div>
        <hr />
        <div class="my-3 py-3">
            <h2 class="display-5">Meine Fähigkeiten</h2>
            <p class="promo-block-text">
                PHP, HTML, CSS, MySQL, SQL, PosgreSQL, JavaScript, JQuery.<br>
                <br>
                Aktuell versuche ich mich in React einzubringen.
            </p>
        </div>
        <hr />
        <div class="my-3 py-3">
            <h2 class="display-5">Interessen</h2>
            <p class="promo-block-text">
                Reisen, Kochen, Freizeitparks, Brettspiele, Schildkröten
            </p>
        </div>
    </div>
    <div class="me-md-3 px-3 px-md-5 text-center overflow-hidden">
        <img
            src="https://jvieser.de/images/code.png"
            class="img-fluid rounded-circle shadow-sm mx-auto"
            alt=""
            />
    </div>
</div>

@endsection