@extends('layouts.dashboard')

@section('title')
Dashboard Product Detail
@endsection

@section('content')
<div class="section-content section-dashboard-home" data-aos="fade-up">
          <div class="container-fluid">
            <div class="dashboard-heading">
              <h2 class="dashboard-title">Create New Product</h2>
              <p class="dashboard-subtitle">
                Create your own product
              </p>
            </div>
            <div class="dashboard-content">
              <div class="row">
                <div class="col-12">
                  <form action="">
                    <div class="card">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group" >
                            <label for="">Product Name</label>
                            <input type=" text" name="" id="" class="form-control  ">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group" >
                            <label for="">Price</label>
                            <input type=" number" name="" id="" class="form-control  ">
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="form-group">
                              <label for="">Kategori</label>
                              <select name="category" class="form-control" id="">
                                <option value="" disabled>Select Category</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-md-12 mb-2">
                            <label for="">Description</label>
                             <textarea name="editor"></textarea>
                          </div>
                          <div class="col-md-12">
                            <div class="form-group" >
                            <label for="">Thumbnails</label>
                            <input type="file" name="" id="" class="form-control ">
                              <p class="text-muted">
                                Kamu dapat memilih satu file
                              </p>
                          </div>
                          </div>
                          
                          </div>
                        </div>
                        <div class="row">
                          <div class="col text-right">
                            <button type="submit" class="btn btn-success">Create Product</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>@endsection

@push('addon-script')
  <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
  <script>
    CKEDITOR.replace( 'editor' );
  </script>
</body>
@endpush