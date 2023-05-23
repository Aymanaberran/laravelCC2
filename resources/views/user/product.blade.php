
<div class="latest-products">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2 style="text-align: center">All Products</h2>
          </div>
        </div>

        

        @foreach($data as $product)
        <div class="col-md-4">
          <div class="product-item">
            <a href="#"><img height="300" width="150" src="/productimage/{{$product->image}}" alt=""></a>
            <div class="down-content">
              <a href="#"><h4>{{$product->title}}</h4></a>
              <h5>{{$product->catagory}}</h5>
              <h6>${{$product->price}}</h6>
              <p>{{$product->description}}</p>
              <form action="{{url('addcart',$product->id)}}" method="POST">
                  @csrf
                  <input type="number" value="1" min="1" name="quantity" class="form-control" style="width:'100px'">
                  <br>
                  <input class="btn" type="submit" value="Add Cart" id="" style="background-color: green;color:black">
              </form>

            </div>
          </div>
        </div>
        @endforeach

  @if(method_exists($data,'links'))
        <div class="d-flex justify-content-center">

        {!! $data->links() !!}

        </div>

        @endif

      </div>
    </div>
  </div>
