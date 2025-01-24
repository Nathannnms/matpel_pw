<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Kelas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
    <h1>Students</h1>
    <a href="{{ route('tools.create') }}" class="btn btn-primary mb-3">Add Student</a>
    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Classes Id</th>
                <th>Age</th>
                <th>NIS</th>
                <th>Gender</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr>
                    <td>{{ $student->std_id }}</td>
                    <td>{{ $student->std_name }}</td>
                    <td>{{ $student->std_classes_id }}</td>
                    <td>{{ $student->std_age }}</td>
                    <td>{{ $student->std_nis }}</td>
                    <td>{{ $student->std_gender }}</td>
                    <td>
                        <a href="{{ route('tools.edit', $student->std_id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('tools.delete', $student->std_id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>
</body>
</html>