<!DOCTYPE html>
<html>

<body>
  <h1>Tambah Buku</h1>
  <hr>
  <form method="POST" action="/buku">
    @csrf
    <div class="form-group">
      <label for="isbn">ISBN</label>
      <input type="text" class="form-control" id="isbn" name="isbn">
    </div>
    <div class="form-group">
      <label for="judul">Judul</label>
      <input type="text" class="form-control" id="judul" name="judul" />
    </div>
    <div class="form-group">
      <label for="Pengarang">Pengarang</label>
      <input type="text" class="form-control" id="pengarang" name="pengarang" />
    </div>
    <div class="form-group">
      <label for="tahunterbit">Tahun Terbit</label>
      <input type="text" class="form-control" id="tahunterbit" name="tahunterbit" />
    </div>
    @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
      </ul>
    </div>
    @endif
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</body>

</html>