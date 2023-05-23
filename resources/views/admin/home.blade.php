<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
   @include('admin.css')
   <style type="text/css">

      .title{
        color:white;
        padding-top: 25px;
         font-size: 25px;
     }
     label{
        display:inline-block;
        width: 200px;

     }

   </style>
  </head>
  <body style="background-color: rgb(70, 69, 68)">
      <!-- partial -->
    @include('admin.sidebar')

    @include('admin.navbar')
        <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <div class="container" align="center">
            @if(session()->has('message'))
            <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">x</button>
            {{session()->get('message')}}
        </div>
            @endif
    </div>

          <!-- partial -->
       @include('admin.script')
  </body>
</html>
