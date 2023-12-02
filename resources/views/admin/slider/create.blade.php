@extends('layouts.app')

@section('title', 'slider')

@section('content')
<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Create Slider</h4>
                </div>
                <div class="card-body">
                  <form action="{{ route('slider.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Title</label>
                          <input type="text" class="form-control" class="title">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Sub-title</label>
                          <input type="text" class="form-control" class="sub_title">
                        </div>
                      </div>
                    </div>
                   <div class="row">
                       <div class="col-lg-12">
                           <label for="">Feature Image</label>
                           <input type="file" name="image" class="form-control">
                       </div>
                   </div>
                    <button type="submit" class="btn btn-primary pull-right">Create</button>
                    <a href="{{ route('slider.index') }}" class="btn btn-danger pull-right">Back</a>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection

