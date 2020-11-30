@extends('master')

@section('content')
 <h1>Restaurants Page</h1>
@if(Session::get('status'))
 <div class="alert alert-warning alert-dismissible fade show" role="alert">
  {{ Session::get('status')}}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif

 <table class="table">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Address</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
 
  	@foreach($data as $item)
    <tr>
      <td>{{ $item->name }}</td>
      <td>{{ $item->email}} </td>
      <td>{{ $item->address }}</td>
      <td><a href="delete_hotel?hotel_id={{$item->id }}" style="color: red;">Delete </a></td>
    </tr>
    @endforeach
  </tbody>
</table>

<script type="text/javascript">
	
</script>

@endsection