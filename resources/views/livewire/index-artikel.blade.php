<div>
<div class="card-header bg-info">
    <strong class="text-primary">Data Terbaru</strong>
  </div>
  @foreach ($art as $a)
<div class="card">
  <div class="card-body">
    <h5 class="card-title">{{$a->judul}}</h5>
    <p class="card-text">{{$a->deskripsi}}</p>
  </div>
</div>
@endforeach
</div>


