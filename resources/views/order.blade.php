<!DOCTYPE html>
<html>

<head>
    <title>Order Form</title>
</head>

<body>

    <h2>Place Your Order</h2>

    {{-- Show Validation Errors --}}
    @if ($errors->any())
    <div style="color:red;">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('order.submit') }}" method="POST">
        @csrf

        <label>Name:</label><br>
        <input type="text" name="name" value="{{ old('name') }}"><br><br>

        <label>Phone Number:</label><br>
        <input type="text" name="number" value="{{ old('number') }}"><br><br>

        <label>Address:</label><br>
        <textarea name="address">{{ old('address') }}</textarea><br><br>

        <button type="submit">Order</button>
    </form>

</body>

</html>