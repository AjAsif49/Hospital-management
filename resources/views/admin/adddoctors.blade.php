<!DOCTYPE html>
<html lang="en">
  <head>

    <style type="text/css">
      label{
        display: inline-block;
        width: 200px;
      }
    </style>

    <!-- Required meta tags -->
    @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          
        </div>
      </div>
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.navbar')
        <!-- partial -->
        <div class="main-panel">
      
          <div class="container-fluid page-body-wrapper">

            <div class="container" align="center" style="padding-top: 100px">

            @if(session()->has('message'))
            
            <div class="alert alert-success">
              
              {{ session()->get('message') }}
            </div>
            
            @endif


              <form action="{{ url('upload_doctor') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div style="padding: 15px">
                  <label for="">Doctor Name</label>
                  <input type="text" style="color: black" name="name" placeholder="Enter Doctor's Name" required>
                </div>

                <div style="padding: 15px">
                  <label for="">Phone</label>
                  <input type="text" style="color: black" name="phone" placeholder="Enter Number Here.." required>
                </div>

                <div style="padding: 15px;">
                  <label>Speciality</label>
                  <select name="speciality" style="color: black; width: 200px;" required>
                    <option value="">---select---</option>
                    <option value="heart">heart</option>
                    <option value="nose">nose</option>
                    <option value="eye">eye</option>
                  </select>
                </div>

                <div style="padding: 15px">
                  <label for="">Room No</label>
                  <input type="text" style="color: black" name="room" placeholder="Enter Room No" required>
                </div>

                <div style="padding: 15px">
                  <label for="">Doctor Image</label>
                  <input type="file" name="file" required>
                </div>
                <div style="padding: 15px">
                  <input type="submit" class="btn btn-success">
                </div>

              </form>
            </div>
          </div>
          
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          @include('admin.footer')
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>