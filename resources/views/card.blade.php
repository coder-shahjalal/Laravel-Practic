<!-- resources/views/cards.blade.php -->

<!DOCTYPE html>
<html>

<head>
    <title>Card Component Test</title>
</head>

<body>

    <h1>My Cards</h1>

    @for ($i = 1; $i
    <= 4; $i++) <x-card title="Card Title {{ $i }}" description="This is the description for card number {{ $i }}." />
    @endfor
    <x-card title="Laravel" description="Laravel is awesome!" />
    <x-card title="Vue.js" description="Vue is a progressive JS framework." />

</body>

</html>