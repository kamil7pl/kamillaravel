@include('partials.head')
        @include('partials.navbar')
          <div class="content">
              {!! Form::open(['url' => $url]) !!}
              {!! Form::submit('submit') !!}
              {!! Form::close() !!}
          </div>
          @include('partials.footer')
          @include('partials.scripts')