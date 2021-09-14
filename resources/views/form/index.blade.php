@include('partials.head')
        @include('partials.navbar')
          <div class="content">
              {!! Form::open(['method' => 'put', 'route' => 'request.index', 'files' => true]) !!}
              {!! Form::label('img', 'Image: ') !!}
              {!! Form::file('img', ['class' => 'form-control', 'aria-describedby' => 'imgError']) !!}
              @error('img')
                <div id="imgError" class="form-text">Błąd walidacji.</div>
              @enderror
              {!! Form::submit('ok', ['class' => 'btn btn-primary']) !!}
              {!! Form::close() !!}
          </div>
          @include('partials.footer')
          @include('partials.scripts')