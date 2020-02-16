@extends('master')
@section('css')
<link type="text/css" href="asset/home/css/vendor-dropzone.css" rel="stylesheet">
<link type="text/css" href="asset/home/css/vendor-dropzone.rtl.css" rel="stylesheet">
@endsection
@section('content')
<form action="{{ route('putProfile') }}" method="post" id="updateUs">
    @csrf
    @method("put")
<div class="card card-form">
    <div class="row no-gutters">
        @php
            $user = Auth::user();
            $avt = empty($user->avatar) ? 'asset/home/images/account-add-photo.svg' : 'storage/uploads/'.$user->avatar; 
        @endphp
        <div class="col-md-12 card-form__body card-body">
            <div class="row">
                    <div class="form-group" style="width: 100%;">
                        <label for="fname">Phu sờ nêm </label>
                        <input value="{{  $user->name}}" name="name" id="fname" type="text" class="form-control" >
                        <input type="hidden" name="filebase64" id="filebase64">
                        <input type="hidden" name="fileName" value="{{  $user->avatar }}">
                    </div>
            </div>
           
        </div>
    </div>
</div>
<div class="card card-form">
    <div class="row no-gutters">
        <div class="col-md-12 card-form__body card-body">
            <div class="form-group">
                <label>Avatar</label>
                <div class="dz-clickable media align-items-center" data-toggle="dropzone" data-dropzone-url="http://" data-dropzone-clickable=".dz-clickable" data-dropzone-files='["{{$avt}}"]'>
                    <div class="dz-preview dz-file-preview dz-clickable mr-3">
                        <div class="avatar avatar-lg">
                            <img src="{{$avt}}" class="avatar-img rounded" alt="..." data-dz-thumbnail>
                        </div>
                    </div>
                    <div class="media-body">
                        <button type="button" class="btn btn-sm btn-primary dz-clickable">Chọn ảnh</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="text-right mb-5">
    <button  class="btn-submit btn btn-success"  type="button">Lưu</button>
</div>
</form>
@endsection
@section('js')
<script src="asset/home/vendor/dropzone.min.js"></script>
<script src="asset/home/js/dropzone.js"></script>
<script>
$(function() {

$('.btn-submit').on('click',function() {
   let data =  $('.avatar-img').attr('src');
   
   $('#filebase64').val(data);
   $('#updateUs').submit();
});

$('.avatar-img').on('load', function () {
    $('input[name=fileName]').val('');
});

});
</script>
@endsection