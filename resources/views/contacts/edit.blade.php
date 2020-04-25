<!DOCTYPE html>
<html>
   
   @include('layouts.head')
   <link href="/dashstyle/css/plugins/dataTables/datatables.min.css" rel="stylesheet">
   <link href="/dashstyle/css/bootstrap.min.css" rel="stylesheet">
   <link href="/dashstyle/font-awesome/css/font-awesome.css" rel="stylesheet">
   <link href="/dashstyle/css/plugins/dataTables/datatables.min.css" rel="stylesheet">
   <link href="/dashstyle/css/animate.css" rel="stylesheet">
   <link href="/dashstyle/css/style.css" rel="stylesheet">
      

      <body>
        <div id="wrapper">
      @include('layouts.navigation')
      <div id="page-wrapper" class="gray-bg">
         @include('layouts.user_check')
         <div class="wrapper wrapper-content animated fadeIn">
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1><b>Update a contact</b></h1>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br /> 
        @endif
        <form method="post" action="{{ route('contacts.update', $contact->id) }}">
            @method('PATCH') 
            @csrf
<div class="form-group">    
              <label for="first_name">First Name:</label>
              <input type="text" class="form-control" name="first_name"/>
          </div>

          <div class="form-group-sm">
              <label for="last_name">Last Name:</label>
              <input type="text" class="form-control" name="last_name"/>
          </div>

          <div class="form-group">
              <label for="gender">Gender:</label>
              <input type="text" class="form-control" name="gender"/>
          </div>
          <div class="form-group">
              <label for="city">City:</label>
              <input type="text" class="form-control" name="city"/>
          </div>
                         
          <button type="submit" class="btn btn-primary">Update</button>
      </form>
    </div>
</div>
</div>
</div>
</div>
<script src="/dashstyle/js/jquery-3.1.1.min.js"></script>
      <script src="/dashstyle/js/popper.min.js"></script>
      <script src="/dashstyle/js/bootstrap.js"></script>
      <script src="/dashstyle/js/plugins/metisMenu/jquery.metisMenu.js"></script>
      <script src="/dashstyle/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
      <script src="/dashstyle/js/plugins/dataTables/datatables.min.js"></script>
      <script src="/dashstyle/js/plugins/dataTables/dataTables.bootstrap4.min.js"></script>
      <!-- Custom and plugin javascript -->
      <script src="/dashstyle/js/inspinia.js"></script>
      <script src="/dashstyle/js/plugins/pace/pace.min.js"></script>