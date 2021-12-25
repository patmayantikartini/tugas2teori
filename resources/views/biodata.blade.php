<html>
    <title>Tambah buku</title>
    <body>
        <form action="{{url('biodata')}}" method='post'>
            @csrf
            <!-- var_dump(csrf) -->
            <input type="text" name="nim" id="nim" placeholder="No. Induk Mahasiswa" class="@error('nim') is-invalid @enderror">
            <!-- <li>{{$errors}}</li> -->
            @error('nim')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <input type="text" name="nama" id="nama" placeholder="Nama Anda">
            <select name="kelas" id="kelas">
                <option value=""> .::Pilih Kelas::. </option>
                <option value="A"> A </option>
                <option value="B"> B </option>
            </select>
            <select name="jurusan" id="jurusan">
                <option value=""> .::Pilih Jurusan::. </option>
                <option value="si"> SI </option>
                <option value="ti"> TI </option>
            </select>
            <button type="submit">
                Kirim
            </button>
            <input type="submit" name="kirim" id="kirim">
        </form>
    </body>
</html>