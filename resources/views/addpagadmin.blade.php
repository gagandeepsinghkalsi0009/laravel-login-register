 @include('header')
<br><br><br>
<div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8 col-12 p-4 p-md-5 border rounded-3 bg-white shadow-sm">
          
          <h2 class="text-center mb-4">Add Page</h2>
          
          <form action ="{{route('add.page')}}" method="post">
            @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Url Key</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="url_key">
              
            </div>
            
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Meta Title</label>
              <input type="text" class="form-control" id="exampleInputPassword1" name="meta_title">
            </div>

            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Meta Description</label>
              <input type="text" class="form-control" id="exampleInputPassword1" name="meta_description">
            </div>

             <div class="mb-4">
                            <label for="content" class="form-label fw-semibold">Page Content</label>
                            <textarea class="form-control @error('content') is-invalid @enderror" 
                                      id="content" 
                                      name="content" 
                                      rows="6" 
                                      placeholder="Enter page content ">{{ old('content') }}</textarea>
                        </div>

            <div class="mb-3">
              <label for="userTypeSelect" class="form-label">Status</label>
              <select class="form-select" id="userTypeSelect" aria-label="Select user type" name="status">
                <option value="1" selected>Enable</option>
                <option value="2">Disable</option>
              </select>
            </div>

            <div class="d-grid">
              <button type="submit" class="btn btn-primary">Add Page </button>
            </div>

             
          </form>
          
        </div>
      </div>
    </div>
@include('footer')

