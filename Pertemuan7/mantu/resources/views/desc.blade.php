<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Description-Task</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <h1 class='text-center'>DAFTAR TUGAS</h1>
        <hr>
        
        <div class="row">
            @foreach ($descs as $desc)
            <div class="col-12 col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">{{$desc ['name']}}</h4>
                        <small>Deadline : {{\Carbon\Carbon::parse($desc['deadline'])->format('d-m-y')}}</small><br>
                        <span class="badge bg-warning">{{$desc ['status']}}</span>
                        <p class="card-text">{{ Str::limit($desc ['description'], 90, '..')}}</p>
                    
                        <div class="mt-2">
                            <a href="#" class="btn btn-warning">Detail</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>