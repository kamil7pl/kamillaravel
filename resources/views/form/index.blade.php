@include('partials.head')
        @include('partials.navbar')
          <div class="content">
              {!! Form::open(['route' => 'request.index', 'method' => 'put']) !!}
              {!! Form::text('name', '') !!}
              {!! Form::submit('ok', ['class' => 'btn btn-primary']) !!}
              {!! Form::close() !!}
              @error('name')
                {{ $message }}
              @enderror
          </div>
          @include('partials.footer')
          @include('partials.scripts')