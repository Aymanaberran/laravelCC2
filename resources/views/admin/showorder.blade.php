<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
   @include('admin.css')
  </head>
  <body style="background-color: rgb(99, 85, 85)">
      <!-- partial -->
    @include('admin.sidebar')

    @include('admin.navbar')
        <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <div class="container" align="center"   style="margin-top: 100px">
            <table class="table" >
                <tr style="background-color:rgb(233, 225, 225);">
                        <th style="padding:20px">name</th>
                        <th style="padding:20px">email</th>
                        <th style="padding:20px">Phone</th>
                        <th style="padding:20px">Address</th>
                        <th style="padding:20px">title</th>
                        <th style="padding:20px">price</th>
                        <th style="padding:20px">Quantity</th>
                        <th style="padding:20px">Status</th>
                        <th style="padding:20px">Action</th>
                        <th style="padding:20px">PDF</th>
                        <th style="padding:20px">Email</th>
                </tr>
                @foreach($order as $orders)
                <tr align="center" style="background-color:rgb(49, 45, 45);color: white">
                        <td style="padding:20px">{{$orders->name}}</td>
                        <td style="padding:20px">{{$orders->email}}</td>
                        <td style="padding:20px">{{$orders->phone}}</td>
                        <td style="padding:20px">{{$orders->address}}</td>
                        <td style="padding:20px">{{$orders->product_name}}</td>
                        <td style="padding:20px">{{$orders->price}}</td>
                        <td style="padding:20px">{{$orders->quantity}}</td>
                        <td style="padding:20px">{{$orders->statut}}</td>
                        <td style="padding:20px">
                            <a class="btn btn-success"
                             href="{{url('updatestatus',$orders->id)}}">Delivered
                            </a>
                        </td>
                        <td>
                            <a href="{{url('print_pdf',$orders->id)}}" class="btn btn-secondary">PDF</a>
                        </td>
                        <td>
                            <a class="btn btn-info" href="{{url('send-mail',$orders->id)}}">Email</a>
                        </td>
                    </tr>
                    @endforeach
            </table>

        </div>
        </div>


          <!-- partial -->
       @include('admin.script')
  </body>
</html>
