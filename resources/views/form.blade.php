@extends('template')

@section('judul-halaman', 'Halaman Konten')  
@show

@section('konten')

<div class="span9">
    <div class="content">

        <div class="module">
            <div class="module-head">
                <h3>Forms</h3>
            </div>
            <div class="module-body">
                    <br />
                    <form class="form-horizontal row-fluid">
                        <div class="control-group">
                            <label class="control-label" for="basicinput">Nama</label>
                            <div class="controls">
                                <input type="text" id="basicinput" placeholder="Masukkan Nama Anda" class="span8">
                                {{-- <span class="help-inline">Minimum 5 Characters</span> --}}
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="basicinput">Nim</label>
                            <div class="controls">
                                <input type="text" id="basicinput" placeholder="Masukkan NIM Anda" class="span8">
                                {{-- <span class="help-inline">Minimum 5 Characters</span> --}}
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="basicinput">Kelas</label>
                            <div class="controls">
                                <input type="text" id="basicinput" placeholder="Masukkan Kelas Anda" class="span8">
                                {{-- <span class="help-inline">Minimum 5 Characters</span> --}}
                            </div>
                        </div>


                        <div class="control-group">
                            <div class="controls">
                                <button type="submit" class="btn">Submit Form</button>
                            </div>
                        </div>
                    </form>
            </div>
        </div>
    </div><!--/.content-->
</div><!--/.span9-->

@endsection

