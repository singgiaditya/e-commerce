@extends('admin.master')

@section('content')
    <main class="py-3 bg-light">
        <div class="container">
            <h1>New Product</h1>
            <hr>
            <form class="row" action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="col-12 col-md-6 col-lg-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <img src="{{ asset('assets/images/product.jpg') }}" alt=""
                                class="img-fluid img-thumbnail mb-3" id="image-preview">
                            <div>
                                <label for="image" class="form-label">Product Image</label>
                                <input class="form-control" name="image" type="file" id="image" accept="image/*">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md">
                    <div class="card">
                        <div class="card-body">
                            <h3>Product Details</h3>
                            <hr>
                            <div class="mb-3">
                                <label for="name">Product Name</label>
                                <input type="text" name="title" id="title" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="description">Description</label>
                                <textarea type="text" name="description" id="quantity" class="form-control" rows="3" required></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="category">Category</label>
                                <select class="form-control m-bot15" name="category">
                                    <option value="men">Men</option>
                                    <option value="women">Women</option>
                                    <option value="bag">Bag</option>
                                    <option value="shoes">Shoes</option>
                                    <option value="watches">Watches</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="price">Price</label>
                                <input type="number" name="price" id="price" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="quantity">Stock</label>
                                <input type="number" name="quantity" id="quantity" class="form-control" required>
                            </div>
                            <button class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </main>

    <script>
        const imgInput = document.getElementById('image')
        const imgPreview = document.getElementById('image-preview')

        imgInput.onchange = evt => {
            const [file] = imgInput.files
            if (file) {
                imgPreview.src = URL.createObjectURL(file)
            }
        }
    </script>
@endsection
