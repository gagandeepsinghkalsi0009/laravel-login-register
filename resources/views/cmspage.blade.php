    
    @extends('headerfile')
    @section('heading')
    Page Created By Admin
    @endsection

    @section('content')
    <div style="text-align:center; margin-top:50px;">
    <b>Title</b>{{$page->meta_title}}<br>
    <b>Description</b>{{$page->meta_description}}<br>
    <div class="imgs">
    {!! $page->content !!}<br>
    </div>
    @endsection
    </div>
    <x-bfooter/>
