

<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
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
  <body style="background-color: white">
      <!-- partial -->
    @include('admin.sidebar')

    @include('admin.navbar')
        <!-- partial -->

        <div class="container-fluid page-body-wrapper">
            <div class="container" align="center">
            <h1 class="title" style="color:black">Update Category</h1>

            @if(session()->has('message'))
            <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">x</button>
            {{session()->get('message')}}
            </div>
            @endif

             <form action="{{url('updatecategory',$data->id)}}" method="post" enctype="multipart/form-data">

                    @csrf
                    <div class="input-group mb-3" style="margin: 30px">
                      <span class="input-group-text" id="basic-addon1">Category Title :</span>
                        <input class="form-control" type="text" name="name" placeholder="give a product title" required="">
                    </div>
                

                    <div style="padding:15px;">

                        <input  type="submit" class="btn btn-success" >
                    </div>

                    

        </form>


        </div>

          <!-- partial -->
       @include('admin.script')
  </body>
</html>
