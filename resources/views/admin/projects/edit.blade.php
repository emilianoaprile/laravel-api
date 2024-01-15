@extends('layouts.app')

@section('content')
    <section>
      <div class="container">
        <h1>Project edit</h1>
      </div>
    </section>

    <section class="py-3">
      <div class="container">
        <h1>{{ $project->title }}</h1>
      </div>
    </section>
    <section>
      <div class="container">
        <form action="{{ route('admin.projects.update',$project) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" name="title" id="title" placeholder="Titolo del post" value="{{ old('title',$project->title) }}">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <input type="text" readonly required class="form-control" name="description" id="slug" placeholder="Titolo del Progetto" value="{{ old('description',$project->description) }}">
            </div>

            <div class="mb-3">
                <input type="submit" class="btn btn-primary " value="Modifica">
              </div>
        </form>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        </div>
    </section>
@endsection