@extends('template')

@section('judul-halaman', 'Laporan')  
@show

@section('konten')

	<div class="wrapper2">
		<h3>FORM</h3>
		<form action="{{url('konten2')}}" method='post'>
            @csrf
			<table>
				<div class="form-group"></div>
					<tr>
						<td>
							<label for="nama">Nama</label>
						</td>
						<td>
							:
						</td>
						<td>
							<input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Anda..." class="@error('nama') is-invalid @enderror">
						</td>
                        <td>
                        @error('nama')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        </td>
					</tr>
				</div>
				<div class="form-group">
				<tr>
					<td>
						<label for="nim">NIM</label>
					</td>
					<td>
						:
					</td>
					<td>
						<input type="text" class="form-control" id="nim" name="nim" placeholder="Masukkan NIM Anda..." class="@error('nim') is-invalid @enderror">
					</td>
                    <td>
                        @error('nim')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </td>
				</tr>
				</div>
				<div class="form-group">
				<tr>
					<td>
						<label for="email">Email</label>
					</td>
					<td>
						:
					</td>
					<td>
						<input type="email" class="form-control" id="email" name="email" placeholder="Masukkan email Anda..." class="@error('email') is-invalid @enderror">
					</td>
                    <td>
                    @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </td>
				</tr>
				</div>
				<div class = "form-group">
				<tr>
					<td>
						<label for="gender">Gender</label>
					</td>
					<td>
						:
					</td>
					<td>
					<select name="jeniskelamin" id="jeniskelamin" class="@error('jeniskelamin') is-invalid @enderror">
						<option value=""></option>
						<option value="A"> Pria </option>
						<option value="B"> Wanita </option>
					</select> 
				</td>
                <td>
                    @error('jeniskelamin')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </td>
				</tr>
				<tr>
					<td colspan="3" align="center">
						<button type="submit" class="btn btn-primary">Simpan</button>
					</td>
				</tr>
			</table>
		</form>
	</div>

@endsection
