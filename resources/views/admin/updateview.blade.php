

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
            <h1 class="title" style="color: black">Update Your Product</h1>

                @if(session()->has('message'))
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert">x</button>
                        {{session()->get('message')}}
                    </div>
                @endif

        <form action="{{url('updateproduct',$data->id)}}" method="post" enctype="multipart/form-data">

                @csrf



            <div class="input-group mb-3" style="margin: 30px">
                <span class="input-group-text" id="basic-addon1">Product Title :</span>
                <input class="form-control" type="text" name="title" value="{{$data->title}}" required="">
            </div>

            <div class="input-group mb-3" style="margin: 30px">
                <span class="input-group-text" id="basic-addon1">Price :</span>
                <input class="form-control" type="number" name="price"  value="{{$data->price}}" required="">
            </div>
            <div class="input-group mb-3" style="margin: 30px">
                <span class="input-group-text" id="basic-addon1">Descreption :</span>
                <input  class="form-control" type="text"  name="description" value="{{$data->description}}" required="">
            </div>
            <div class="input-group mb-3" style="margin: 30px">
                <span class="input-group-text" id="basic-addon1">Quantite :</span>
                <input  class="form-control" type="text" name="quantity"  value="{{$data->quantity}}" required="">
            </div>
            <div class="input-group mb-3" style="margin: 30px">
                <label>Old Image:</label>
                <img  height="100" width="100"
                 src="/productimage/{{$data->image}}">

            </div>
             <label>Change the image </label>
            <div style="padding:15px;">
                <input   type="file" name="file">
            </div>

            <div class="input-group mb-3" style="margin: 30px">

                <input  type="submit" class="btn btn-success" >
            </div>

        </form>


        </div>

          <!-- partial -->
       @include('admin.script')
  </body>
</html>
