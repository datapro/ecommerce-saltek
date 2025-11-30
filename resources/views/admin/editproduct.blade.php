@include('admin.layouts.head')

<div class="container">

    <h3>Edit Product</h3>

    @include('includes.messages')

    <form action="{{ route('updateproduct', $product->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="row">

            <div class="col-md-6 mb-3">
                <label>Product Name</label>
                <input type="text" name="productname" class="form-control" value="{{ $product->productname }}" required>
            </div>
            <div class="col-md-6 mb-3">
                <label>Size</label>
                <input type="text" name="size" class="form-control" value="{{ $product->size }}" required>
            </div>

            <div class="col-md-6 mb-3">
                <label>SKU</label>
                <input type="text" name="sku" class="form-control" value="{{ $product->sku }}" required>
            </div>

            <div class="col-md-6 mb-3">
                <label>Price</label>
                <input type="number" name="price" class="form-control" value="{{ $product->price }}" step="0.01" required>
            </div>

            <div class="col-md-6 mb-3">
                <label>Stock</label>
                <input type="number" name="stock" class="form-control" value="{{ $product->stock }}" required>
            </div>

            <div class="col-md-6 mb-3">
                <label>Category</label>
                <select name="category_id" class="form-control">
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="col-md-6 mb-3">
                <label>Brand</label>
                <input type="text" name="brand" class="form-control" value="{{ $product->brand }}">
            </div>

            <div class="col-md-6 mb-3">
                <label>Color</label>
                <input type="text" name="color" class="form-control" value="{{ $product->color }}">
            </div>

            <div class="col-md-6 mb-3">
                <label>Tax</label>
                {{-- <input type="number" step="0.01" name="tax" class="form-control" value="{{ $product->tax }}"> --}}
                <select name="tax" id="tax_type" class="form-control">
                    <option name="tax" >taxable</option>
                    <option name="tax" >non taxable</option>
                </select>
            </div>

            <div class="col-md-6 mb-3">
                <label>Weight</label>
                <input type="text" name="weight" class="form-control" value="{{ $product->weight }}">
            </div>

            <div class="col-md-12 mb-3">
                <label>Description</label>
                <textarea name="description" class="form-control">{{ $product->description }}</textarea>
            </div>

            <div class="col-md-6 mb-3">
                <label>Current Image</label><br>
                @if ($product->images->isNotEmpty())
                     <img src="{{ asset('storage/' . $product->images->last()->image) }}" 
                                width="55" height="55" style="object-fit: cover;">
                @else
                    No Image Uploaded
                @endif
            </div>

            <div class="col-md-6 mb-3">
                <label>Change Image</label>
                <input type="file" name="images[]" multiple class="form-control">
            </div>

        </div>

        <button type="submit" class="btn btn-success">Update Product</button>
        <a href="{{ route('products') }}" class="btn btn-secondary">Back</a>

    </form>

</div>

