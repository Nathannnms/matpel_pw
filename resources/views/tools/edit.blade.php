<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Siswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Edit Siswa</h1>

        <form action="{{ route('tools.update', $student->std_id) }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="std_name">Nama</label>
                <input type="text" class="form-control" id="std_name" name="std_name" value="{{ $student->std_name }}" required>
            </div>
            <div class="form-group">
                <label for="std_classes_id">ID Kelas</label>
                 <input type="number" class="form-control" id="std_classes_id" name="std_classes_id" value="{{ $student->std_classes_id }}" required>
            </div>
            <div class="form-group">
                <label for="std_age">Usia</label>
                <input type="number" class="form-control" id="std_age" name="std_age" value="{{ $student->std_age }}" required>
            </div>
            <div class="form-group">
                <label for="std_nis">NIS</label>
                <input type="number" class="form-control" id="std_nis" name="std_nis" value="{{ $student->std_nis }}" required>
            </div>
            <div class="form-group">
                <label for="std_gender">Jenis Kelamin</label>
                <select class="form-control" id="std_gender" name="std_gender" required>
                    <option value="Laki-laki" {{ $student->std_gender == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                    <option value="Perempuan" {{ $student->std_gender == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                </select>
            </div>
            <button type="submit"class="btn btn-primary">Update</button>
            <a href="{{ route('student') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</body>
</html>