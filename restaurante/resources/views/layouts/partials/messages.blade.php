@if(isset($errors) && count($errors)>0)
<div class="alert alert-warning" role="alert">
    <ul class="list-unstyled">
        @foreach ($errors->all() as $error )
            <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif
@if(Session::get('sucess',false))
    <?php $data=Session::get('sucess');?>
    @if(is_array($data))
    @foreach ($data as $msg)
        <div class="alert alert-warning" role="alert">
            <i class="fa fa-check"></i>{{$msg}}
        </div>
    @endforeach
    @else
        <div class="alert alert-warning" role="alert">
            <i class="fa fa-check"></i>{{$data}}
        </div>
    @endif
@endif
