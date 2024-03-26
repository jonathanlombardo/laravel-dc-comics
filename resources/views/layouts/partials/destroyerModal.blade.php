<div id="destroyer-modal-{{$comic->id}}" class="modal-layover d-none">
  <div class="custom-modal card">
    <div class="card-header">
      Delete comic
    </div>
    <div class="card-body">
      <h5 class="card-title">Deleting {{$comic->title}}</h5>
      <p class="card-text pb-3">The operation is not reversible. Are you sure?</p>
      <button role="cancel" class="rounded-0 btn btn-outline-primary">Cancel</button>
      <form class="d-inline" action="{{route("comics.destroy", $comic)}}" method="POST">
        @csrf
        @method('DELETE')
        <button role="destroyer" class="rounded-0 btn btn-outline-danger">Delete comic</button>
      </form>
    </div>
  </div>
</div>