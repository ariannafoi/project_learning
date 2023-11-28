<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Project Learning | AF</title>
</head>
<body>
    
    <x-nav></x-nav>

    <div class="container-fluid">
        <div class="row vh-100">
            <div class="col-12">

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                {{$slot}}
            </div>
        </div>
    </div>

    {{-- <x-footer></x-footer> --}}
    
</body>
</html>