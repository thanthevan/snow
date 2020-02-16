@extends('master')
@section('content')
<div class="row">


    

    <div class="col-md-12">
        <div class="alert-dismissible alert alert-soft-success d-flex align-items-center card-margin" role="alert">
          
            <i class="material-icons mr-3">edit</i>
            <div class="text-body">Tạo thành công nà</div>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
    </div>

    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <div class="media align-items-center">
                    <div class="media-body">
                        <h4 class="card-title m-0">
                            <div class="form-group">
                                <label for="name">Tên câu hỏi</label>
                                <textarea id="name" rows="4" class="form-control" placeholder="Tên câu hỏi"></textarea>
                            </div>
                        </h4>
                    </div>
                </div>
            </div>
            <div class="card-body" id="container-wp">
                <a id="add-new" href="#" class="btn btn-success mb-3 btn-block">Thêm câu trả lời <i class="material-icons">add_circle_outline</i></a>
                
                
            </div>
            <div class="card-footer">
                <a href="#" class="btn btn-success float-right">Tạo câu hỏi <i class="material-icons btn__icon--right">arrow_forward</i></a>
            </div>
        </div>
    </div>
    
</div>
@endsection