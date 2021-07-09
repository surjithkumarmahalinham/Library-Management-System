@include('layouts.front_header')


<section>
    <div class="container">
      <br>
      @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
      <div class="row">
        <span id="status"></span>
        <div class="col-sm-12 padding-right">
          <div class="features_items"><!--features_items-->
@foreach($book as $i => $bk)
             <div class="col-sm-3">
              <div class="product-image-wrapper">
                <div class="single-products">
                    <div class="productinfo text-center">
                      @if($bk->image)
                      <img src="{{ URL::asset('images/books/'.$bk->image) }}" width="80" height="280px;" alt="person">
                      @endif
                      <h3>{{$bk->book_name}}</h3>
                      <p>{{$bk->author}}</p>
                      <h2>₹{{$bk->price}}</h2>
                      <form method="post" action="{{route('front.subscribe')}}">
                        {{ csrf_field() }}
                        <input type="hidden" name="book_id" value="{{$bk->id}}">
                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                      <p class="btn-holder">
                        <button class="btn btn-warning text-center" role="button" id="submit">Subscribe</button>
                                </p>
                            </form>
                    </div>
                </div>
                </div>
            </div>
            @endforeach
            </div><!--features_items-->

        </div>
      </div>
    </div>
  </section>
  <script src="{{asset('front/assets/js/jquery.js')}}"></script>
  <script src="{{asset('front/assets/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('front/assets/js/jquery.scrollUp.min.js')}}"></script>
  <script src="{{asset('front/assets/js/price-range.js')}}"></script>
    <script src="{{asset('front/assets/js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{asset('front/assets/js/main.js')}}"></script>
</body>
</html>