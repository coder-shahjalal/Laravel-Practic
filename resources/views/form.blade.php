<!-- resources/views/form.blade.php -->

<!DOCTYPE html>
<html>

<head>
    <title>Laravel Form</title>
</head>

<body>

    <h1>Enter Your Name</h1>

    <form action="{{ route('form.submit') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Your name">
        <button type="submit">Submit</button>
    </form>

</body>

</html>