@extends('layouts.main')



@section('Container')
    
            <div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-danger" role="alert">
                        <h4 class="alert-title">Error</h4>
                        @foreach ($errors->all() as $error)
                        <div class="text-muted">{{ $error }}</div>
                        @endforeach
                    </div>
                @endif
                <form method="POST" enctype="multipart/form-data" action="{{ route('games.add') }}">
                    @csrf
                    <div class="mb-3">
                        <div class="form-label">Cover</div>
                        <input name="cover" type="file" class="form-control" value="{{ old('cover') }}">
                    </div>
                    <div class="form-group mb-3 ">
                        <label class="form-label">Trailer</label>
                        <div>
                            <input name="trailer" type="url" class="form-control" value="{{ old('trailer') }}">
                        </div>
                    </div>
                    <div class="form-group mb-3 ">
                        <label class="form-label">Name</label>
                        <div>
                            <input name="name" type="text" class="form-control" value="{{ old('name') }}">
                        </div>
                    </div>
                    <div class="form-group mb-3 ">
                        <label class="form-label">Category</label>
                        <div>
                            <select name="category" class="form-select" value="{{ old('category') }}">
                                <option value="Idle">Idle</option>
                                <option value="Strategy">Strategy</option>
                                <option value="Horror">Horror</option>
                                <option value="Role-Playing">Role-Playing</option>
                                <option value="Adventure">Adventure</option>
                                <option value="Puzzle">Puzzle</option>
                                <option value="Action">Action</option>
                                <option value="Simulation">Simulation</option>
                                <option value="Sport">Sport</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group mb-3 ">
                        <label class="form-label">Release Date</label>
                        <div>
                            <input name="release_date" type="date" class="form-control" value="{{ old('birth_date') }}">
                        </div>
                    </div>
                    <div class="form-group mb-3 ">
                        <label class="form-label">Developer</label>
                        <div>
                            <input name="developer" type="text" class="form-control" value="{{ old('developer') }}">
                        </div>
                    </div>
                    <div class="form-group mb-3 ">
                        <label class="form-label">Publisher</label>
                        <div>
                            <input name="publisher" type="text" class="form-control" value="{{ old('publisher') }}">
                        </div>
                    </div>
                    <div class="form-group mb-3 ">
                        <label class="form-label">Description</label>
                        <textarea name="description" class="form-control" rows="6">{{ old('description') }}</textarea>
                    </div>
                    <div class="form-group mb-3 ">
                        <label class="form-label">Long Description</label>
                        <textarea name="long_desc" class="form-control" rows="6">{{ old('long_desc') }}</textarea>
                    </div>
                    
                    <div class="form-group mb-3 ">
                        <label class="form-label">Price</label>
                        <div>
                            <input name="price" type="text" class="form-control" value="{{ old('price') }}">
                        </div>
                    </div>
                    <div class="form-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
