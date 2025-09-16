<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List Job Category</title>
</head>
<body>
    <h2>List Job Category</h2>
    <table class="table table-bordered">
        <thead>
            <tr>ID</tr>
            <tr>Title</tr>
            <tr>Type</tr>
            <tr>Action</tr>
        </thead>

        <tbody>
            @forelse($categories as $jobcategory)
                <tr>
                    <td>{{$categories->id }}</td>
                    <td>{{$categories->title }}</td>
                    <td>{{$categories->type}}</td>
                    <td>
                        <a href="{{ route('admin.jobcategory.edit', $jobcategory->id)}}">Edit</a>
                        <form action="{{ route('admin.jobcategory.delete', $jobcategory->id)}}" method='POST'>
                            @csrf
                            @method('DELETE')
                            <button type='submit' onclick="return confirm('Are you sure?')">Delete</button>

                        </form>
                    </td>
                </tr>
                @empty
                    <tr>
                        <td>No Job Category found.</td>
                    </tr>
                    
            @endforelse
        </tbody>
    </table>
</body>
</html>
