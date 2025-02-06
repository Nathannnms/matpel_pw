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
        <h1>Edit Siswa</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('student.update', $student->std_id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label>Nama</label>
                <input type="text" class="form-control @error('std_name') is-invalid @enderror" 
                       name="std_name" value="{{ old('std_name', $student->std_name) }}" required>
                @error('std_name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label>Kelas</label>
                <select class="form-control" name="std_classes_id" required>
                    <option value="">Pilih Kelas</option>
                    @foreach($classes as $class)
                        <option value="{{ $class->cls_id }}" {{ $student->std_classes_id == $class->cls_id ? 'selected' : '' }}>
                            {{ $class->cls_name }}
                        </option>
                    @endforeach
                </select>
                @error('cls_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror

            </div>
            <div class="form-group">
                <label>Umur</label>
                <input type="number" class="form-control @error('std_age') is-invalid @enderror" 
                       name="std_age" value="{{ old('std_age', $student->std_age) }}" required>
                @error('std_age')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label>NIS</label>
                <input type="number" class="form-control @error('std_nis') is-invalid @enderror" 
                       name="std_nis" value="{{ old('std_nis', $student->std_nis) }}" required>
                @error('std_nis')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label>Gender</label>
                <select class="form-control" name="std_gender" required>
                    <option value="Laki-laki" {{ $student->std_gender == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                    <option value="Perempuan" {{ $student->std_gender == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('student') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</body>
</html>
