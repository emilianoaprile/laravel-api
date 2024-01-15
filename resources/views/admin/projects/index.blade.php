@extends('layouts.app')

@section('content')
    <section>
      <div class="container">
        <h1>Projects index</h1>
      </div>
    </section>
    <section>
      <div class="container">
        <table class="table table-stripped">
          <thead>
            <tr>
              <th>ID</th>
              <th>Title</th>
              <th>
                <a class="btn btn-primary btn-sm" href="{{ route('admin.projects.create') }}">Nuovo Progetto</a>
              </th>
              <th></th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            @forelse ($projects as $project)
                <tr>
                  <td>{{ $project->id}}</td>
                  <td>
                    <a href="{{ route('admin.projects.show',$project) }}">
                    {{ $project->title  }}
                  </a>
                  </td>
                  <td>
                    <a href="{{ route('admin.projects.edit',$project) }}">edit</a>
                  </td>

                  <td>
                    <form action="{{ route('admin.projects.destroy',$project)}}" method="POST">
                      @csrf
                      @method('DELETE')

                      <input class="btn btn-danger btn-sm" type="submit" value="delete">
                    </form>
                  </td>
                  <td>
                    @if($project->type)
                  <p>
                    <strong>
                    {{ $project->type->name }}
                    </strong>
                  </p>
                  @endif
                  </td>

                  <td>
                    <ul class="d-flex gap-2 ps-0">
                      @foreach ($project->technologies as $technology)
                        <li class="badge rounded-pill text-bg-primary">{{ $technology->name }}</li>
                      @endforeach 
                    </ul>
                  </td>
                </tr>
            @empty
                <tr>
                  <td>Nessun post</td>
                </tr>
            @endforelse
          </tbody>
        </table>
      </div>
    </section>
@endsection