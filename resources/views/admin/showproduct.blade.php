<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
   @include('admin.css')
  </head>
  <body>
      <!-- partial -->
    @include('admin.sidebar')

    @include('admin.navbar')
        <!-- partial -->
        

        <div  style="padding-buttom:30px " class="container-fluid page-body-wrapper">
            <div class="container" align="center" style="background-color: white">

                @if(session()->has('message'))
                <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">x</button>
                {{session()->get('message')}}
                </div>
                @endif

                <table class="table" style="margin-top: 50px">
                    <tr align="center" style="background-color:black;">
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Price</th>
                        <th scope="col">Image</th>
                        <th scope="col">Update</th>
                        <th scope="col">Delete</th>
                    </tr>
                    @foreach ($data as $product )
                    <tr align="center" style="font-weight: bold ">
                        <td >{{$product->title}}</td>
                        <td >{{$product->description}}</td>
                        <td >{{$product->quantity}}</td>
                        <td >{{$product->price}}</td>
                        <td >
                            <img 
                            src="/productimage/{{$product->image}}">
                        </td>
                        <td>
                            <a class="btn btn-primary" href="{{url('updateview',$product->id)}}">Update</a>
                        </td>
                        <td>
                            <a onclick="return confirm('Are you sure')"
                            class="btn btn-danger" href="{{url('deleteproduct',$product->id)}}">Delete</a>
                        </td>
                    </tr>
                    @endforeach
              </table>

          <!-- partial -->
       @include('admin.script')
  </body>
</html>
