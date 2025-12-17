    @extends('headerfile')
    @section('heading')
    Page Created By Admin 
    @endsection

    @section('main')
   <div class="main">
    <div class="inner">
        <br><br>
        <h2>Title</h2>
        <h4>{{$page->meta_title}}</h4>
    </div>
   </div>
    @endsection
    @section('content')
     {!! $page->content !!}
     <button>Insert Image</button>
    @endsection
    </div>
    <x-bfooter/>
