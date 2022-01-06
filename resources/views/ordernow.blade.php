@extends('master')
@section('content')

<div class="container">
    <div class="col-sm-6">
        <table class="table table-striped">
            <tbody>
                <tr>
                    <td>Price</td>
                    <td>{{$total}} Rupees</td>
                </tr>
                <tr>
                    <td>Tax</td>
                    <td>0 Rupee</td>
                </tr>
                <tr>
                    <td>Delivery</td>
                    <td>100 Rupees</td>
                </tr>
                <tr>
                    <td>Total Amount</td>
                    <td>{{$total+100}}</td>
                </tr>
            </tbody>
        </table>

        <form method="POST" action="orderplace">
            @csrf
            <div class="form-group">
                <label for="">Delivery Place:</label>
                <textarea class="form-control" placeholder="Enter your address" name="address"></textarea>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Paynent Method</label>
                <p><input type="radio" name="payment"> <span>Online Payment</span></p>
                <p><input type="radio" name="payment"> <span>EMI Payment</span></p>
                <p><input type="radio" name="payment"> <span>Paymenton Delivery</span></p>
            </div>
            <button type="submit" class="btn btn-success">Order Now</button>
        </form>
    </div>
</div>

@endsection