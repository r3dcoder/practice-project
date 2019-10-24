@extends('layouts.admin')

@section('title')
    Editing {{ $post->title }}
@endsection

@section('content')

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-light">
                            Edit Post
                        </div>
                        @if(Session::has('success'))
                            <div class="alert alert-success">
                                {{ Session::get('success') }}
                            </div>
                        @endif
                        @if($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach($errors->all() as $error)
                                        <li>
                                            {{ $error }}
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route( 'postEditPost', $post->id) }}" method="post">
                            @csrf
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="normal-input" class="form-control-label">Post Title</label>
                                            <input name="title" id="normal-input" class="form-control" value="{{ $post->title }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-4">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="placeholder-input" class="form-control-label">Content</label>
                                            <textarea id="content" class="form-control" name="content" cols="40" >{{ $post->content }}</textarea>

                                        </div>
                                    </div>

                                </div>
                                <button class="btn btn-primary" type="submit"> Update </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection

