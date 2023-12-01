@extends('admin.layout.app')

@section('styles')

@endsection

@section('content')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Form Layouts</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Forms</li>
          <li class="breadcrumb-item active">Layouts</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        
      <div class="col-lg-6">

        <div class="card">
            <div class="card-body">
              <h5 class="card-title">Vertical Form</h5>

              <!-- Vertical Form -->
              <form class="row g-3" action="{{ route('slider_store') }}"  method="post" enctype="multipart/form-data">
                @csrf
                <div class="col-12">
                  <label for="inputNanme4" class="form-label">Title</label>
                  <input type="text" class="form-control" name="title">
                </div>
                <div class="col-12">
                  <label for="inputEmail4" class="form-label">Description</label>
                  <textarea id="description" type="text" class="form-control" rows="4" name="description" autocomplete="description" autofocus=""> </textarea>
                </div>
                <div class="col-12">
                  <label for="inputPassword4" class="form-label">Image</label>
                  <input type="file" class="form-control" name="img">
                </div>
                
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  
                </div>
              </form>
              <!-- Vertical Form -->

            </div>
          </div>
      </div>
     
      
          
      </div>
      </div>
    </section>
@endsection

@section('scripts')
@endsection
