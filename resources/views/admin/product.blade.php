<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
   @include('admin.css')
   <style type="text/css">

      .title{
        color:rgb(22, 18, 18);
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
        <h1 class="title">Add Product</h1>

        @if(session()->has('message'))
        <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">x</button>
        {{session()->get('message')}}
        </div>
        @endif

         <form action="{{url('uploadproduct')}}" method="post" enctype="multipart/form-data">

            @csrf
        <div class="input-group mb-3" style="margin: 30px">
            <span class="input-group-text" id="basic-addon1">Product title :</span>
            <input class="form-control" type="text" name="title" placeholder="Enter The Product Title" required="">
        </div>
        

        <div class="input-group mb-3" style="margin: 30px">
            <span class="input-group-text" id="basic-addon1">Price :</span>
            <input class="form-control"  type="number" name="price" placeholder="Enter The  Price" required="">
        </div>


        <div class="input-group mb-3" style="margin: 30px">
            <span class="input-group-text" id="basic-addon1">Descreption :</span>
            <input class="form-control"  type="text" name="des" placeholder="Enter The  Descreption" required="">
        </div>
        <div class="input-group mb-3" style="margin: 30px">
            <span class="input-group-text" id="basic-addon1">Quantite :</span>
            <input class="form-control"  type="text" name="quantity" placeholder="Enter The Quantity" required="">
        </div>

        <div class="input-group mb-3" style="margin: 30px">
            <input   type="file" name="file">
        </div>

        <div >
            <input style="padding:20px;" type="submit" class="btn btn-success" >
        </div>

    </form>


    </div>

          <!-- partial -->
       @include('admin.script')
  </body>
</html>
