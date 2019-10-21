@extends('pdf.layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Add Disneyplus Shows
  </div>
  <div class="card-body">
    @if ($message = Session::get('success'))
        <div class="alert-container" id="contenedor-alert">
            <div class="alert success">
                <span class="closebtn">&times;</span>
                <p id="test">{{ $message }}</p>
            </div>
        </div>
      @elseif ($errors->any())
        <div class="alert-container" id="contenedor-alert">
            <div class="alert alert-danger">
                <span class="closebtn">&times;</span>
                <strong>Error</strong>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </div>
        </div>
      @elseif ($message = Session::get('warning'))
        <div class="alert-container" id="contenedor-alert">
            <div class="alert warning">
                <span class="closebtn">&times;</span>
                <p id="test">{{ $message }}</p>
            </div>
        </div>
      @endif
      <form method="post" action="{{ route('disneyplus.store') }}">
          <div class="form-group">
              @csrf
              <label for="name">Show Name:</label>
              <input type="text" class="form-control" name="show_name"/>
          </div>
          <div class="form-group">
              <label for="price">Series :</label>
              <input type="text" class="form-control" name="series"/>
          </div>
          <div class="form-group">
              <label for="quantity">Show Lead Actor :</label>
              <input type="text" class="form-control" name="lead_actor"/>
          </div>
          <button type="submit" class="btn btn-primary">Create Show</button>
          <a class="btn btn-info" href="{{route('disneyplus.index')}}">Ver Lista</a>
      </form>
  </div>
</div>
@endsection