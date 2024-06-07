@extends('template')

@section('content')
    <div class="container">
        <h1>Tambah Data Tugas</h1>

        <div class="card">
            <div class="card-body">
                <form>
                    <div class="form-group row mb-3">
                      <label for="name" class="col-4 col-form-label">Nama</label> 
                      <div class="col-8">
                        <input id="name" name="name" placeholder="Masukan Nama tugas..." type="text" class="form-control">
                      </div>
                    </div>
                    <div class="form-group row mb-3">
                      <label for="deadline" class="col-4 col-form-label">Deadline</label> 
                      <div class="col-8">
                        <input id="deadline" name="deadline" placeholder="Deadline" type="date" class="form-control">
                      </div>
                    </div>
                    <div class="form-group row mb-3">
                      <label for="status" class="col-4 col-form-label">Status</label> 
                      <div class="col-8">
                        <select id="status" name="status" class="custom-select">
                          <option value="Belum Dikerjakan">Belum Dikerjakan</option>
                          <option value="Belum Dikerjakan">Sedang Dikerjakan</option>
                          <option value="Selesai">Selesai</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row mb-3">
                      <label for="descriptiom" class="col-4 col-form-label">Deskripsi</label> 
                      <div class="col-8">
                        <textarea id="descriptiom" name="descriptiom" cols="40" rows="5" class="form-control"></textarea>
                      </div>
                    </div> 
                    <div class="form-group row mb-3">
                      <div class="offset-4 col-8">
                        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                      </div>
                    </div>
                  </form>
            </div>
        </div>
    </div>
@endsection