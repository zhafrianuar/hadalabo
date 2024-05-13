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
            <!-- <button id="close" class="camera-btn mx-auto mt-4">x</button> -->
            <div id="reader"></div>
            <div class="mt-3 p-3">
                <p class="bottom-text text-center">Find the QR code & Scan to check in the station</p>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="scanCompleteModal" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body">
        <div class="content text-center">
            <div class="image-check">
            <img class="check" src="{{ asset('images/circleCheck.svg') }}" alt="check">
            </div>
            <div class="text-content">
                <p class="station-text">Station <span class="station_id"></span></p>
                <p class="message">Check-in Successful</p>
            </div>
            <div class="button">
                <a href="{{ route('home') }}" class="btn-okay btn">
                    Okay
                </a>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>


<script>
const mainContent = document.getElementById('mainContent');
const scannerContainer = document.getElementById('scannerContainer');
var message = '';
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
            qrbox: 150,
            aspectRatio: 9 / 16  // Set the aspect ratio to 16:9
        },
        qrCodeMessage => {
           sendMessage(`${qrCodeMessage}`);
            html5QrCode.stop();

        },
        errorMessage => {
            console.log(`QR Code no longer in front of camera.`);
        })
        .catch(err => {
            console.log(`Unable to start scanning, error: ${err}`);
        });

});

function sendMessage(message) {
    // Fetch the CSRF token from the meta tag
    var csrfToken = $('meta[name="csrf-token"]').attr('content');
    console.log(message);

    $.ajax({
        url: '{{ route('process_qr_code') }}', // Using Laravel's route() helper function
        type: 'POST',
        headers: {
            'X-CSRF-TOKEN': csrfToken // Include the CSRF token in the headers
        },
        data: {
            qrCodeMessage: message
        },
        success: function(response) {
            console.log('QR Code message sent successfully:', response);
            // Handle success response if needed
            $('.station_id').html(message);
            $(scanCompleteModal).modal('show');

        },
        error: function(xhr, status, error) {
            console.error('Error sending QR Code message:', error);
            // Handle error response if needed
        }
    });
}



document.getElementById('close').addEventListener('click', function(event) {
    event.preventDefault();
    mainContent.classList.remove('d-none');
    scannerContainer.classList.add('d-none');
    html5QrCode.stop();
});
</script>
@endsection


