<x-app-layout>
<div class="wrapper">
  @include('navbar')
  @include('menu')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            
          </div>
        </div>
      </div><!-- /.container-fluid -->
      <br>
      
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card card-solid">
        <div class="card-body pb-0">
          <div class="row">
          
          <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
              <div class="card bg-light d-flex flex-fill">
                <div class="card-header text-muted border-bottom-0">
                <span id="isi" name="isi" >Email: {{Auth::user()->email}}</span>
                <img src="" id="qrcode_image" />
                </div>
                
              </div>
            </div>
          </div>

        <!-- The Modal -->
        <div id="myModal" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
        <span class="close">&times;</span>
        <form action="/selesaiorder" method="GET" target="temp_iframe">
        @csrf
        <table id="myTable" style="width:100%;">
            <tr>
                <td style="padding:5px;vertical-align:top">
                </td>
                <td>
                </td>
                <td>
                </td>
            </tr>
            <tr>
                <td colspan="3">
                <input type="text" id="id_makanan" name="id_makanan" value="" style="display:none;" />
                </td>
            </tr>
        </table>
        <input type="submit" onclick="modal.style.display = 'none';" class="btn btn-default" style="width:99%;margin-top:10px;" value="Selesai Pesanan">
        </form>
        </div>
        </div>

        </div>
      </div>
      <!-- /.card -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <iframe src="" id="temp_iframe" name="temp_iframe" style="display:none;"></iframe>
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- ajax -->
<script>
function ajax_email(id){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        url: '/email',
        type: 'GET',
        data: { id: id },
        success: function (response) {
            console.log(response.email);

            // Handle the response
            var isi = document.getElementById("isi");
            isi.innerHTML = "Email: " +response.email;
            var img = document.getElementById("qrcode_image");
            img.src =  "";
                        
        },
        error: function (xhr, status, error) {
            // Handle the error
            console.log(error);
        },
    });
}

function ajax_code_acak(id){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        url: '/code_acak',
        type: 'GET',
        data: { id: id },
        success: function (response) {
            console.log(response.code_acak);

            // Handle the response
            var isi = document.getElementById("isi");
            isi.innerHTML = "Code Acak: " + response.code_acak;
            var img = document.getElementById("qrcode_image");
            img.src =  "";
                        
        },
        error: function (xhr, status, error) {
            // Handle the error
            console.log(error);
        },
    });
}

function ajax_qrcode(id){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        url: '/qrcode',
        type: 'GET',
        data: { id: id },
        success: function (response) {
            console.log(response.qrcode);

            // Handle the response
            var isi = document.getElementById("isi");
            isi.innerHTML = "Code Acak: " + response.code_acak;
            var img = document.getElementById("qrcode_image");
            img.src =  response.qrcode;
                        
        },
        error: function (xhr, status, error) {
            // Handle the error
            console.log(error);
        },
    });
}

function ajax_masking(id){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        url: '/masking',
        type: 'GET',
        data: { id: id },
        success: function (response) {
            console.log(response.qrcode);

            // Handle the response
            var isi = document.getElementById("isi");
            isi.innerHTML = "Masking: " + response.masking;
            var img = document.getElementById("qrcode_image");
            img.src =  "";
                        
        },
        error: function (xhr, status, error) {
            // Handle the error
            console.log(error);
        },
    });
}

function ajax_parsing(id){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        url: '/parsing',
        type: 'GET',
        data: { id: id },
        success: function (response) {
            console.log(response.parsing);

            // Handle the response
            var isi = document.getElementById("isi");
            isi.innerHTML = "Parsing No Angka: " + response.parsing;
            var img = document.getElementById("qrcode_image");
            img.src =  "";
                        
        },
        error: function (xhr, status, error) {
            // Handle the error
            console.log(error);
        },
    });
}

</script>
</x-app-layout>
