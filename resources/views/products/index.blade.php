@extends('layouts.app') @section('title', 'Products List') @section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
  <h1>Products</h1>
  <a href="{{ route('products.create') }}" class="btn btn-primary"
    >Add New Product</a
  >
</div>

<div class="table-responsive">
  <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Category</th>
        <th>Price</th>
        <th>Stock</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      @forelse ($products as $product)
      <tr>
        <td>{{ $product->id }}</td>
        <td>{{ $product->name }}</td>
        <td>{{ $product->category }}</td>
        <td>Rp {{ number_format($product->price, 0, ',', '.') }}</td>
        <td>{{ $product->stock }}</td>
        <td>
          <div class="btn-group" role="group">
            <a
              href="{{ route('products.show', $product) }}"
              class="btn btn-info btn-sm"
              >View</a
            >
            <a
              href="{{ route('products.edit', $product) }}"
              class="btn btn-warning btn-sm"
              >Edit</a
            >
            <form
              action="{{ route('products.destroy', $product) }}"
              method="POST"
              class="d-inline"
            >
              @csrf @method('DELETE')
              <button
                type="submit"
                class="btn btn-danger btn-sm"
                onclick="return confirm('Are you sure?')"
              >
                Delete
              </button>
            </form>
          </div>
        </td>
      </tr>
      @empty
      <tr>
        <td colspan="6" class="text-center">No products found.</td>
      </tr>
      @endforelse
    </tbody>
  </table>
</div>

{{ $products->links() }} @endsection