<x-header/>
<br><br>
<a href="{{ route('add.page') }}" class="btn btn-primary" id="ab">Create Page</a>
<div class="container mt-2">
<table id="mytable" class="table table-striped table-bordered">
  <thead>
    <tr>
     
      <th>Url Key</th>
      <th>Status</th>
      <th>Created At</th>
      <th>Updated At</th>
      <th>Edit</th>
      <th>Delete</th>
    </tr>
  </thead>

  <tbody>
    @forelse($page as $data)
    <tr>
    
      <td>{{ $data->url_key }}</td>
      <td>{{ $data->status }}</td>
      <td>{{ $data->created_at }}</td>
      <td>{{ $data->updated_at }}</td>
      <td><a href="{{ route('edit.page',$data->id) }}">Edit</a></td>
      <td><a href="{{ route('delete.page',$data->id) }}">Delete</a></td>
    </tr>
    @empty
      Data Not Found
    @endforelse
  </tbody>
</table>
</div>
<x-footer/>