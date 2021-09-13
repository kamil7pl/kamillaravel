@include('partials.head')
        @include('partials.navbar')
          <div class="content">
              {!! Form::open(['method' => 'put', 'route' => 'request.index', 'files' => true]) !!}
              {!! Form::label('image', 'Image: ', ['class' => 'form-label']) !!}
              {!! Form::file('image', ['class' => 'form-control']) !!}
              {!! Form::submit('ok', ['class' => 'btn btn-primary']) !!}
              {!! Form::close() !!}
          </div>
          @include('partials.footer')
          @include('partials.scripts')