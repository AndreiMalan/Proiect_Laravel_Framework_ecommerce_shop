@extends('layoutcos')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add New Product</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('products.index') }}">Back</a>
            </div>
        </div>
    </div>


    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Error!</strong> Exista probleme la introducerea datelor.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <form action="{{ route('products.store') }}" method="POST">
    	@csrf


         <div class="row">
		    <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
         <label for="name">Name</label>
         <input type="text" name="name" class="form-control" value="{{old('name') }}">
      </div>
      <div class="form-group">
         <label for="description">Description</label>
         <textarea name="description" class="form-control" rows="3">{{old('description')}}</textarea>
      </div>
	  <label for="photo">Photo</label>
         <input type="text" name="photo" class="form-control" value="{{old('photo') }}">
      </div>
	  <label for="price">Price</label>
         <input type="text" name="price" class="form-control" value="{{old('price') }}">
      </div>
		    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
		            <button type="submit" class="btn btn-primary">Submit</button>
		    </div>
		</div>
</div>

    </form>



@endsection