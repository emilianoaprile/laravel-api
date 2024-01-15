@extends('layouts.app')

@section('content')
    <section>
      <div class="container">
        <h1>{{ $project->title }}</h1>
        @if($project->type)
        <p>
          <strong>
          {{ $project->type->name }}
          </strong>
        </p>
        @endif
        <p>{{ $project->slug }}</p>
        <ul class="d-flex gap-2 ps-0">
          <strong>Technologies used:</strong>
          @foreach ($project->technologies as $technology)
            <li class="badge rounded-pill text-bg-primary">{{ $technology->name }}</li>
          @endforeach 
        </ul>
        <p>{{ $project->created_at->format('d/m/Y') }}</p>
      </div>
    </section>
    <section>
      <div class="container">
        {!! $project->description !!}
      </div>
    </section>
@endsection