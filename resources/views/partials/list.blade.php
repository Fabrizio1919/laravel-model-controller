<h1>Ecco i nostri film:</h1>
@foreach ($movies as $movie)
<div class="container bg-dark">
    <div class="row">
        <div class="col">
            <div class="card-header text-white bg-secondary">
                <h4 class="card-title fw-bold">{{$movie->title}}</h4>
                <div class="card-body bg-danger text-white shadow">
                    <h5>{{$movie->original_title}}</h5>
                    <p>{{$movie->nationality}}</p>
                    <p>{{$movie->date}}</p>
                    <p>{{$movie->vote}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach