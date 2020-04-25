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
          <div>
    <a style="margin: 19px;" href="{{ route('contacts.create')}}" class="btn btn-primary">Add New Contact</a>
    </div>   

<div class="ibox-content">
    <div class="table-responsive">
         <!-- <input type="text" class="form-control input-sm fuzzy-search" id="search"  placeholder="Search Box"> -->
    <table class="table  table-bordered table-hover dataTables-example" >

               <thead>
              <tr>
<th style="background-color: #FF3C33!important;color: #FFFFFF!important;">ID</th>
<th style="background-color: #FF3C33!important;color: #FFFFFF!important;">FIRST NAME</th>
<th style="background-color: #FF3C33!important;color: #FFFFFF!important;">LAST NAME</th>
<th style="background-color: #FF3C33!important;color: #FFFFFF!important;">GENDER</th>
<th style="background-color: #FF3C33!important;color: #FFFFFF!important;">CITY</th>
<th style="background-color: #FF3C33!important;color: #FFFFFF!important;">EDIT</th>
<th style="background-color: #FF3C33!important;color: #FFFFFF!important;">DELETE</th>
 </tr>
    </thead>
    <tbody>
       
         @foreach($contacts as $contact)
        <tr>
<td style="background-color: #ffffff!important;color: #FF5733!important;width:15%;">{{@$contact->id}}</td>
<td style="background-color: #ffffff!important;color: #FF5733!important;width:15%;">{{@$contact->first_name}}</td>
<td style="background-color: #ffffff!important;color: #FF5733!important;width:15%;">{{@$contact->last_name}}</td>
<td style="background-color: #ffffff!important;color: #FF5733!important;width:15%;">{{@$contact->gender}}</td>
<td style="background-color: #ffffff!important;color: #FF5733!important;width:15%;">{{@$contact->city}}</td>
<td><a href="{{ route('contacts.edit',$contact->id)}}" class="btn btn-primary">Edit</a>
            </td>
            <td>
                <form action="{{ route('contacts.destroy', $contact->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
       
    </tbody>
  </table>
</div>
</div>
</div>
</div>
</div>


<!-- Mainly scripts -->
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
      <!-- Page-Level Scripts -->
      <script>
         $(document).ready(function(){
             $('.dataTables-example').DataTable({
                 pageLength: 5,
                 responsive: true,
                 dom: '<"html5buttons"B>lTfgitp',
                 buttons: [
                     
                     {extend: 'pdf', title: 'User List'},
         
                 ]
         
             });
         
         });
         
      </script>
     
      
   </body>
</html>