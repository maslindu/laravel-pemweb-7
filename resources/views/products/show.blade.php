@extends('layouts.app') @section('title', 'Product Details') @section('content')
<div class="row">
  <div class="col-md-8">
    <div class="card">
      <div
        class="card-header d-flex justify-content-between align-items-center"
      >
        <h5 class="mb-0">Product Details</h5>
        <div>
          <a
            href="{{ route('products.edit', $product) }}"
            class="btn btn-warning btn-sm"
            >Edit</a
          >
          <a
            href="{{ route('products.index') }}"
            class="btn btn-secondary btn-sm"
            >Back to List</a
          >
        </div>
      </div>
      <div class="card-body">
        <table class="table table-borderless">
          <tr>
            <th width="150">ID:</th>
            <td>{{ $product->id }}</td>
          </tr>
          <tr>
            <th>Name:</th>
            <td>{{ $product->name }}</td>
          </tr>
          <tr>
            <th>Description:</th>
            <td>{{ $product->description }}</td>
          </tr>
          <tr>
            <th>Price:</th>
            <td>Rp {{ number_format($product->price, 0, ',', '.') }}</td>
          </tr>
          <tr>
            <th>Stock:</th>
            <td>{{ $product->stock }}</td>
          </tr>
          <tr>
            <th>Category:</th>
            <td>{{ $product->category }}</td>
          </tr>
          <tr>
            <th>Created:</th>
            <td>{{ $product->created_at->format('d M Y H:i') }}</td>
          </tr>
          <tr>
            <th>Updated:</th>
            <td>{{ $product->updated_at->format('d M Y H:i') }}</td>
          </tr>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection