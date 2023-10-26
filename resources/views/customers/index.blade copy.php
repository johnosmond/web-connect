@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Customer List</h2>
        <table class="customers-table">
            <thead>
                <tr>
                    <th>Customer Name</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Website</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($customers as $customer)
                <tr>
                    <td>{{ $customer->customer_name }}</td>
                    <td>{{ $customer->customer_phone }}</td>
                    <td>{{ $customer->address }}</td>
                    <td>{{ $customer->website }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection