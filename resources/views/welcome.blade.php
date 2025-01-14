<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap</title>

    <!-- Link to the compiled CSS file -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Launch demo modal
    </button>
  
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <nav aria-label="Page navigation example">
        <ul class="pagination">
          <li class="page-item"><a class="page-link" href="prev">Previous</a></li>
          <li class="page-item"><a class="page-link" href="#1">1</a></li>
          <li class="page-item"><a class="page-link" href="#2">2</a></li>
          <li class="page-item"><a class="page-link" href="#3">3</a></li>
          <li class="page-item"><a class="page-link" href="next">Next</a></li>
        </ul>
    </nav>
  
    <div id="1" class="d-flex" style="height: 100vh">1</div>
    <div id="2" class="d-flex" style="height: 100vh">2</div>
    <div id="3" class="d-flex" style="height: 100vh">3</div>
      
</body>
</html>
