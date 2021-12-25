<!DOCTYPE HTML>
<html>
<body>
    <h1>Biodata</h1>
    <hr>
       <form method="POST" action="/prak3">
            @csrf
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama">
                </di>
                <div class="form-group">
                    <label for="nim">NIM</label>
                    <input type="text" class="form-control" id="nim" name="nim">
                </div>
                </di>
                <div class="form-group">
                    <label for="kelas">Kelas</label>
                    <input type="text" class="form-control" id="kelas" name="kelas">
                </div>
                </di>
                <div class="form-group">
                    <label for="jurusan">Jurusan</label>
                    <input type="text" class="form-control" id="jurusan" name="jurusan">
                </div>
                @if ($errors->any())
                    <div class="alert alert_danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <button type="submit" class="btn btn-primary">Submit</button>
        </form>
</body>
</html>