@extends('layout')
@section('content')
    <!--Input container-->
    <div class="container input-container-size">
        <!--inut form-->
        <form action="" class="row">
            @csrf
            <h2 class="text-center">Upload</h2>
            <div class="form-floating">
                <input type="text" class="form-control-2" id="floatingInputGrid" value="{{ old('name') }}" name="name" />
                <label for="floatingInputGrid">Product Name</label>
                @error('name')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-floating">
                <input type="number" class="form-control-2" id="floatingInputGrid" name="price"
                    value="{{ old('price') }}" />
                <label for="floatingInputGrid">Price</label>
                @error('price')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-floating">
                <input type="text" class="form-control-2" id="floatingInputGrid" name="price"
                    value="{{ old('price') }}" placeholder="e.g USD, EUR,YEN" />
                <label for="floatingInputGrid">Currency</label>
                @error('price')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-floating pt-2">
                <textarea id="floatingTextArea2" class="form-control" style="height: 200px" name="description"
                    value="{{ old('description') }}"></textarea>
                <label for="floatingTextArea2">Description</label>
                @error('description')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="pt-1 mb-3" style="max-width: 540px">
                <div class="row g-0">
                    <div class="form-control-2">
                        <label for="floatingTextArea2">Upload image</label>
                        <input type="image" name="image1" value="{{ old('image1') }}" />
                        @error('image1')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="pt-1 mb-3" style="max-width: 540px">
                <div class="row g-0">
                    <div class="form-control-2">
                        <label for="floatingTextArea2">Upload image</label>
                        <input type="image" name="image2" value="{{ old('image2') }}" />
                        @error('image2')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="pt-1 mb-3" style="max-width: 540px">
                <div class="row g-0">
                    <div class="form-control-2">
                        <label for="floatingTextArea2">Upload image</label>
                        <input type="image" name="image3" value="{{ old('image3') }}" />
                        @error('image3')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="form-floating">
                <input type="text" class="form-control-2" id="floatingInputGrid" name="type"
                    value="{{ old('type') }}" placeholder="e.g smartphone, smartwatch, clothing, tv" />
                <label for="floatingInputGrid">Category</label>
                @error('type')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <button type="submit" class="button btn-linear font rounded-top rounded-end">
                upload
            </button>
        </form>
        <!--inut form end-->
    </div>
    <!--input container end-->
@endsection
