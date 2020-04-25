<!DOCTYPE html>
<html>
   @include('layouts.head')
   <body>
      <div id="wrapper">
         @include('layouts.navigation')
         <div id="page-wrapper" class="gray-bg">
            @include('layouts.user_check')
    		@yield('content')   
         </div>
      </div>
      @include('layouts.footer')
   </body>
</html>