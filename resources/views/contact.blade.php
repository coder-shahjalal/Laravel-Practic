<!DOCTYPE html>
<html>
<head>
    <title>Contact Form</title>
</head>
<body>

   @if (session('success'))
   <p style='color:green'>{{session("success")}}</p>
   @endif

   <form action="{{ route('contact.submit') }}" method='POST'>

    @csrf
    <label>Name:</label>
    <input type="text" name='name'value='{{ old('name') }}'>
    @error('name')
    <p style="color:red">{{ $message }}</p>
@enderror
    <br><br>
    <label>
        Email:
    </label>
    <input type="email" name="email" value="{{ old('email') }}">
    @error('email')
    <p style="color:red">{{ $message }}</p>
@enderror
@error('gender')
    <p style="color:red">{{ $message }}</p>
@enderror
@error('language')
    <p style="color:red">{{ $message }}</p>
@enderror
    <br><br>

    <label>Gender:</label><br>
    <input type="radio" name='gender' value="male" {{ old('gender') =='male'? 'checked' : ''}}> Male<br>
    <input type="radio"name='gender' value="female"{{ old('gender')=='female'?'checked':'' }}> Female<br> <br>

     <label>Language:</label><br>
     <input type="checkbox" name="language[]" value="english"{{ is_array(old('language')) && in_array('english',old('language'))?'checked':"" }}>English<br>
     <input type="checkbox" name="language[]" value="'bengali" {{ is_array(old('language')) && in_array('bengali',old('language'))?'checked':"" }}>Bengali<br><br>

{{-- Country (Dropdown/Select) --}}
    <label>Country:</label>
    <select name="country">
        <option value="">-- Select --</option>
        @foreach($countries as $country)
            <option value="{{ $country }}" {{ old('country') == $country ? 'selected' : '' }}>
                {{ $country }}
            </option>
        @endforeach
    </select>
    <br><br
    <label>Message:</label><br>
    <textarea name="message" id="" cols="30" rows="10">{{old('message')}}</textarea>

    <br><br>

    <button type='submit'>Send</button>

   </form>

  <br>
   <br>
   <br>
   {{-- Static URL --}}
<a href="{{ url('/about') }}">About</a>

{{-- Named Route URL --}}
<a href="{{ route('contact') }}">Contact</a>

{{-- Route with parameter --}}
<a href="{{ route('service.details', ['id' => 7]) }}">Service 7</a>

{{-- Controller Action URL --}}
<a href="{{ action([App\Http\Controllers\PageController::class, 'about']) }}">About via Action</a>
<br><br>
<a href="{{ route('admin.users.create') }}">Add New User</a>

</body>
</html>
