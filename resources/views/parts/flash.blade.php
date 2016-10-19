@if(Session::has('flash_message'))
    {{--<!--
    =================================
    FLASH MESSAGE
    =================================
    -->--}}
    <div class="alert alert-success">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        {{Session::get('flash_message')}}
    </div>
@elseif(Session::has('error_message'))
    {{--<!--
    =================================
    CUSTOM ERROR MESSAGE
    =================================
    -->--}}
    <div class="alert alert-danger">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        {{ Session::get('error_message') }}
    </div>
@endif

@if (count($errors) > 0)
    {{--<!--
    =================================
    VALIDATION ERROR MESSAGE
    =================================
    -->--}}
    <div class="alert alert-danger">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif