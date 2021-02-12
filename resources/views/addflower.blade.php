@extends('navbar')
@section('container')
<div class="containerRegist">
        <div class="row">
            <h1 class="addflower">Add New Flower</h1>
            <div class="col-md-12">
                <div class="col-md-12">
                    <form role="form" action="flowerpost" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="category">Select Category</label>
                            <select class="form-control" id="selectCategory" name="category">
                                {{-- membuat select option yang isinya berdasarkan category yang ada --}}
                              @foreach($categoryflower as $categoryflowers)
                              <option value={{$categoryflowers->id}}>{{$categoryflowers->name}}</option>
                              @endforeach
                            </select>
                        </div> 
                        <div class="form-group">
                            <label for="flowername">
                                Flower Name
                            </label>
                            <input name="flowername" type="text" class="form-control" id="flowername" />
                        </div>
                        <div class="form-group">
                            <label for="price">
                                Price
                            </label>
                            <input name="price" type="number" class="form-control" id="price" />
                        </div>
                        <div class="form-group">
                            <label for="descriptionflower">Description Flower</label>
                            <textarea class="form-control" rows="5" id="descriptionflower" name="descriptionflower"></textarea>
                          </div> 
                        <div class="form-group">
                            <label for="uploadimageflower">
                                Upload Image
                            </label>
                            <input name="uploadimageflower" type="file" class="form-control-file border" id="uploadimageflower" />
                        </div> 
                        <button type="submit" class="btn btn-primary">
                            Upload
                        </button>
                    </form>
                </div>
            </div>
        </div>
</div>
@endsection