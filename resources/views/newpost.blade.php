@extends('base')
<img src="/images/4.png" alt="" class="bg">
@section('content')

<div class="container">

    <div class="row">
        <div class="col-md-4 offset-md-4">
            <div class="card" style="background-color:#0008;" id="postcard">
                <div class="card-header">
                    <h3 class="card-title text-white"><i class="fas fa-money-check-edit"></i> New Post</h3>
                </div>
                <div class="card-body text-white">
                    <form action="{{url('/newpost')}}" method="post">
                        {{csrf_field()}}
                        <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
                        <div class="mb-3">
                            <label for="category_id">Categories</label>
                            <select name="category_id" id="category_id" class="form-select">
                                @foreach(App\Models\Category::all() as $c)
                                <option value="{{$c->id}}">{{$c->category}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="post">Post</label>
                            <textarea name="post" id="post" cols="30" rows="5" class="form-control"></textarea>
                        </div>
                        <a href="/dashboard" class="btn btn-secondary">Back</a>
                        <button class="btn btn-success float-end" type="submit" style="width: 100px">Post</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
    
@endsection

