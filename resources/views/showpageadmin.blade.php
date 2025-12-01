@extends('headerfile')

@section('heading')
View Pages
@endsection

<br><br><br>
<div class="table" class ="col-3"> 
<table class="table" id = "admintable">
  <thead>
  
    <tr>
      <th scope="col">Page.No</th>
      <th scope="col">Url Key</th>
      <th scope="col">Meta Title</th>
      <th scope="col">Meta Description</th>
      <th scope="col">Content</th>
      <th scope="col">Status</th>
      <th scope="col">Created At</th>
      <th scope="col">Updated At</th>
      <th scope="col">View Page</th>
      <th scope="col">Edit Page</th>
      <th scope="col">Delete Page</th>
     
    </tr>

  </thead>
  <tbody>
    <tr>
          @forelse($page as $data)
      <td>{{$data->id}}</td>
      <td>{{$data->url_key}}</td>
      <td>{{$data->meta_title}}</td>
      <td>{{$data->meta_description}}</td>
      <td>{{$data->content}}</td>
      <td>{{$data->status}}</td>
      <td>{{$data->created_at}}</td>
      <td>{{$data->updated_at}}</td>
      <td><a href="">View</a></td>
      <td><a href="">Edit</a></td>
      <td><a href="">Delete</a></td>
    </tr>
    @empty
    Data Not found
    @endforelse
  </tbody>
</table>
</div>

@extends('footerfile')