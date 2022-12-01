<!DOCTYPE html>
<html lang="en">
  <head>
  @include('admin.css');
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar');
      <!-- partial -->
        <!-- partial:partials/_navbar.html -->
        @include('admin.header');
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Shippers </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Shipper</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Edit Shipper</li>
                </ol>
              </nav>
            </div>
            @if ($errors->any())
            <div class ="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li> {{ $error }} </li>
                @endforeach
            </ul>
            </div>
            @endif
            <div class="row justify-content-center">
              <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title"></h4>
                    <p class="card-description"></p>
                    <form class="forms-sample" action="/save_edit_Shipper" method="POST">
                      <div class="form-group">
                      <input type="hidden" name="id" value="{{ $Shipper->getId() }}"/>
                        @csrf
                        <label for="companyName">Company Name</label>
                        <input type="text" class="form-control" name="company_name" id="company_name" placeholder="{{ $Shipper->getCompanyName() }}">
                        <label for="phone">Phone</label>
                        <input type="text" class="form-control" name="phone" id="phone" placeholder="{{ $Shipper->getPhone() }}">
                      </div>
                      <button type="submit" class="btn btn-primary mr-2">Save</button>
                      <a href="{{url('view_Shipper')}}" class="btn btn-danger">Cancel</a>
                    </form>
                  </div>
                </div>
              </div>
        </div>
    </div>
    <!-- container-scroller -->
    @include('admin.script')
  </body>
</html>