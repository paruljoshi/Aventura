@extends('layouts.master')

@section('content')
    <div class="w-section hero-section centered cart">
      <div data-ix="new-interaction" class="w-container">
        <h1 data-ix="fade-in-bottom-page-loads" class="hero-heading cart">View your Cart</h1>
      </div>
    </div>
  </div>
  <div>
    <div class="w-row shoppingbagrow">
      <div class="w-col w-col-9 shoppingbagcolumn">
        <div class="w-section shoppingbagheadingsection">
          <h1 class="cartheading">Shopping Bag</h1>
        </div>
        <div class="w-section itemdetailsheadingsection">
          <div class="w-row">
            <div class="w-col w-col-4">
              <h4 class="bagsubheading">Item Details</h4>
            </div>
            <div class="w-col w-col-2">
              <h4 class="bagsubheading">Item</h4>
            </div>
            <div class="w-col w-col-2">
              <h4 class="bagsubheading">Quantity</h4>
            </div>
            <div class="w-col w-col-2">
              <h4 class="bagsubheading">Item Price</h4>
            </div>
            <div class="w-col w-col-2">
              <h4 class="bagsubheading">Total Price</h4>
            </div>
          </div>
        </div>

        @foreach($cart as $item)
        <div class="w-section itemdetailssection">
          <div class="w-row">
            <div class="w-col w-col-4 itemimage"><img src="images/adventure-sports-83a.jpg">
            </div>
            <div class="w-col w-col-8 itemdetails">
              <div class="w-row">
                <div class="w-col w-col-3">
                  <h2 class="itemdetailheading">{{$item->name}}</h2>
                </div>
                <div class="w-col w-col-3">
                  <h2 class="itemdetailheading">{{$item->qty}}</h2>
                </div>
                <div class="w-col w-col-3">
                  <h2 class="itemdetailheading">{{$item->price}}</h2>
                </div>
                <div class="w-col w-col-3">
                  <h2 class="itemdetailheading">{{$item->subtotal}}</h2>
                </div>
              </div>
              <div class="w-row itemdeletesection">
                <div class="w-col w-col-3">
                  <h4 class="bagsubheading date">Date: {{$item->date}}</h4>
                </div>
                <div class="w-col w-col-7"></div>
                <div class="w-col w-col-2">
                  <form action="deleteitem" method="post">
                    <input type="hidden" name="rowId" value="{{$item->rowid}}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <button class="btn btn-link" type="submit">Remove</button>
                  </form>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>

      <div class="w-col w-col-3 ordersummarycolumn">
        <div class="w-section">
          <h1 class="cartheading">Order Summary</h1>
        </div>
        <div class="w-section">
          <div class="w-row">
            <div class="w-col w-col-9">
              <p>Subtotal
                <br>Shipping
                <br>Estimated Tax
                <br><strong>Total</strong>
              </p>
            </div>
            <div class="w-col w-col-3">
              <p>${{Cart::total()}}
                <br>$0.00
                <br>$0.00
                <br><strong>${{Cart::total()}}</strong>
              </p>
            </div>
          </div><a href="#" class="w-button checkoutbutton">&nbsp;Checkout</a>
        </div>
      </div>
    </div>
  </div>
@endsection