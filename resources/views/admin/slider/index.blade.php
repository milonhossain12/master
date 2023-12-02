@extends('layouts.app')

@section('title', 'slider')

@section('content')
   <div class="content">
      <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <a href="{{ route('slider.create') }}" class="btn btn-primary">Add New</a>
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">All Slider</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>Sl</th>
                        <th>Title</th>
                        <th>Sub-title</th>
                        <th>Image</th>
                        <th>Action</th>
                      </thead>
                      <tbody>
                        <tr>
                          <th>01</th>
                          <th>01</th>
                          <th>01</th>
                          <th>01</th>
                          <th>01</th>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
       </div>
    </div>
@endsection
