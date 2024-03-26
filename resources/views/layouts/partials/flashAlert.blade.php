@if(session('message'))
  <div class="alert alert-{{session('class')}} alert-dismissible mt-3" role="alert">
    <strong>{{session('message')}}</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
@endif