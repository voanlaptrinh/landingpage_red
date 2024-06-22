<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<!-- Favicons -->
<link href="{{ isset($webConfig->logo) ? asset('images/' . $webConfig->logo) : asset('logo.png') }}" rel="icon">
<link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

<!-- Google Fonts -->
<link href="https://fonts.gstatic.com" rel="preconnect">
<link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

<!-- Vendor CSS Files -->
<link href="{{ asset('/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
<link href="{{ asset('/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
<link href="{{ asset('/assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
<link href="{{ asset('/assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
<link href="{{ asset('/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
<link href="{{ asset('/assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">
<meta name="csrf-token" content="{{ csrf_token() }}">

<!-- Template Main CSS File -->
<link href="{{ asset('/assets/css/style.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<link href="{{ asset('/css/toastr.min.css') }}" rel="stylesheet">

<style>
    .file-upload-form {
        width: 100% !important;
        width: fit-content;
        height: fit-content;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .file-upload-label input {
        display: none;
    }

    .file-upload-label svg {
        height: 50px;
        fill: rgb(82, 82, 82);
        margin-bottom: 20px;
    }

    .file-upload-label {
        cursor: pointer;
        /* background-color: #ddd; */
        padding: 25px 70px;
        border-radius: 40px;
        border: 2px dashed rgb(82, 82, 82);
        /* box-shadow: 0px 0px 200px -50px rgba(0, 0, 0, 0.719); */
    }

    .file-upload-design {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        gap: 5px;
    }

    .browse-button {
        background-color: rgb(82, 82, 82);
        padding: 5px 15px;
        border-radius: 10px;
        color: white;
        transition: all 0.3s;
    }

    .browse-button:hover {
        background-color: rgb(14, 14, 14);
    }
</style>
