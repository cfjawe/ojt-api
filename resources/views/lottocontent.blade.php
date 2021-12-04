<h1>test</h1>

<link rel="stylesheet" type="text/css" href="{{URL('/css/index.css')}}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<ul>

@foreach ($data['result'] as $dat)
</br>
<div class="container">
<div class="card mb-3" style="max-width: 1800px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="{{ $dat['image']}}" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">{{ $dat['headline']}}</h5>
        <p class="card-text">{{ $dat['category']}}</p>
        <p class="card-text">{{ $dat['source']}}</p>
        <p class="card-text"><small class="text-muted">Published at: {{ $dat['publishedAt']}}</small></p>
        <a href="{{ $dat['item_url']}}" class="btn blue text warning">Read More Here</a>

      </div>
    </div>
  </div>
</div>
</div>
@endforeach

<ul>