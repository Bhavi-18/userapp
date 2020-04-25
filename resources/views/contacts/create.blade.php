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
    <h1><b>Add a contact</b></h1>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('contacts.store') }}">
          @csrf
          <div class="form-group>    
              <label for="first_name">First Name:</label>
              <input type="text" class="form-control" name="first_name"/>
          </div>

          <div class="form-group">
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
                         
          <button type="submit" class="btn btn-primary">Add contact</button>
      </form>
  </div>
</div>
</div>
</div>
</div>
</div>