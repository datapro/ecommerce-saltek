@include('admin.layouts.head')

<div class="container">    
    <h3>Edit Category</h3>
    @include('includes.messages')

<form action="{{ route('updatecategory', $category->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <label>Name</label>
    <input type="text" name="name" value="{{ $category->name }}" class="form-control">

    <label>Description</label>
    <textarea name="description" value="{{ $category->description }}" class="form-control">{{ $category->description }}</textarea><br>
    
    <label>Cover Image</label><br>
    <img src="{{ asset('storage/' . $category->image) }}" alt="{{ $category->name }}" width="100">
    <input type="file" name="image" value="{{ $category->image }}" class="form-control">

    <button type="submit" class="btn btn-success mt-2">Update</button>
    <a href="{{route('category')}}" class="btn btn-secondary mt-2">BaCk</a>
</form>

</div>

