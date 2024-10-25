@extends('layout.master')

@section('kontenberita')
<div class="row">
  <div class="col-12">
    <table class="table">
      <thead>
        <tr>
          <th>Title</th>
          <th>Body</th>
          <th>Comment</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($posts as $p)
          <tr>
            <td>{{ $p->title }}</td>
            <td>{{ $p->body }}</td>
            <td>
              <ul>
                @foreach ($p->comments as $c)
                  <li>
                    {{$c->body}}
                  </li>
                @endforeach
              </ul>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
    {{$posts->links()}}


    {{-- @foreach ($posts as $p)
      <h2>{{ $p->title }}</h2>
      <h2>{{ $p->body }}</h2>

      <ul>
        @foreach ($p->comments as $c)
          <li>
            {{$c->body}}
          </li>
        @endforeach
      </ul>
    @endforeach --}}
  </div>
</div>
@endsection