<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <style>
    .card {
        display: flex;
        gap: 10px;

    }
    </style>

</head>

<body>
    <h1>Hallo Home Page </h1>
    <br>
    @if($user=='admin')
    <h2>Welcome Admin</h2>
    @else
    <h2>we most welcome {{$user}}</h2>
    @endif

    <!DOCTYPE html>
    <html>

    <head>
        <title>Test Page</title>
    </head>

    <body>

        @include('partials.header')

        <h2>Hello Blade!</h2>

        @if($user == "admin")
        <p>Welcome Admin</p>
        @else
        <p>Welcome {{$user}}</p>
        @endif

        @include('partials.footer')
        <!-- alart componetn -->
        <h3>alart component</h3>
        <x-alart type="success">
            Operation was successful!
        </x-alart>
        <!-- cart component -->
        <h3>card component </h3>
        <div class="card">
            @for ($i = 1; $i
            <= 4; $i++) <x-card title="Card Title {{ $i }}"
                description="This is the description for card number {{ $i }}." />
            @endfor
        </div>


    </body>

    </html>

</body>

</html>