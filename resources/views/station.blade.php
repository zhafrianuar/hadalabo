@extends('layouts.app')

@section('content')


<div class="container-fluid py-5 station">
    <div class="row">
        <div class="col-12 d-flex justify-content-center align-items-center">
            <div class="branding-container">
                <img class="logo" src="{{ asset('images/logo.svg') }}" alt="brand-logo">
            </div>
        </div>
        <div id="mainContent" class="col-12 mt-3 text-content text-center">
            <div class="icon-container mt-4">
                <img class="icon-bg" src="{{ asset('images/icon-bg.svg') }}" alt="Lock Image">
                <img class="icon" src="{{ asset('images/station3icon.svg') }}" alt="Lock Image">
            </div>
            <h1 class="station-heading mt-2">
                @if($station->id == 6)
                    Gift House
                @else
                    Station {{$station->id}}
                @endif
            </h1>
            <h2 class="station-subheading">{{$station->name}}</h2>
            <img class="mt-5" src="{{ asset('images/' . $station->id . '.svg') }}" alt="Station Image">
            <button id="start-scanner" class="camera-btn mx-auto mt-4"><img  src="{{ asset('images/camera.svg') }}" alt=""></button>
            <p class="bottom-text mt-2">Scan the QR code at the station to proceed</p>
        </div>
        <div id="scannerContainer" class="scanner-container d-none">
            <button id="close" class="camera-btn mx-auto mt-4">x</button>
            <div id="reader" style="width: 300px; height: 300px;"></div>
        </div>
    </div>
</div>

<script>
const mainContent = document.getElementById('mainContent');
const scannerContainer = document.getElementById('scannerContainer');

document.getElementById('start-scanner').addEventListener('click', function(event) {
    event.preventDefault();

    mainContent.classList.add('d-none');
    scannerContainer.classList.remove('d-none');

    //get permission to use camera dont start qr scanner until permission is granted

    const html5QrCode = new Html5Qrcode("reader");

    html5QrCode.start(
        {
            facingMode: "environment"
        },
        {
            fps: 10,
            qrbox: 250
        },
        qrCodeMessage => {
            console.log(`QR Code detected: ${qrCodeMessage}`);
            html5QrCode.stop();
            window.location.href = qrCodeMessage;
        },
        errorMessage => {
            console.log(`QR Code no longer in front of camera.`);
        })
        .catch(err => {
            console.log(`Unable to start scanning, error: ${err}`);
        });

});

document.getElementById('close').addEventListener('click', function(event) {
    event.preventDefault();

    mainContent.classList.remove('d-none');
    scannerContainer.classList.add('d-none');
    html5QrCode.stop();
});
</script>
@endsection


