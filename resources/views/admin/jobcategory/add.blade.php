<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Job Category</title>
</head>

<body>
    <h2>Add Job Category</h2>

   
    <form action="{{ route('admin.jobcategory.store') }}" method="POST">
        @csrf
        <label for='title'>Title <span style="color:red;">*</span> </label>
        <input type='text' id='title' name='title' placeholder='Enter Title' value="{{ old('title') }}">

         @error('title')
         <div>{{ $message }}</div>
         @enderror

         <label for="type">Job Type <span style="color:red;">*</span> </label>
         <select type='text' id='type' name='type' class='form-control' required></select>
         <option value="">Select Job Type</option>
         <option value="part time">Part Time</option>
         <option value="full time">Full Time</option>

          @error('type')
         <div>{{ $message }}</div>
         @enderror

        <br><br><br>
        <button type="submit">Save Job Category</button>
    </form>
</body>

</html>
