@extends('master')
@section('content')
    <div class="container-fluid p-0">
        <div class="trending-container p-3 mt-3">
            <table class="table">
                <tbody>
                  <tr>
                    <td>Price</td>
                    <td>{{$total}}</td>
                  </tr>
                  <tr>
                    <td>Tax</td>
                    <td>$0</td>
                  </tr>
                  <tr>
                    <td>Delivery</td>
                    <td>$10</td>
                  </tr>
                  <tr>
                    <td><h5>Total</h5></td>
                    <td><h5>${{$total+10}}</h5></td>
                  </tr>
                </tbody>
              </table>
              <form action="placeorder" method="POST">
                  @csrf
                <div class="form-group">
                  <label for="address">Address:</label>
                  <textarea name="address" class="form-control" id="address"></textarea>
                </div>
                <div class="form-group mt-3 mb-3">
                  <label for="pmethod">Payment method</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="payment" value="online" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Online payment
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="payment" value="cash" id="flexRadioDefault2" checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                            Cash on delivery
                        </label>
                    </div>
                </div>
                <button type="submit" class="btn btn-success">Order Now</button>
              </form>
        </div>
    </div>
@endsection