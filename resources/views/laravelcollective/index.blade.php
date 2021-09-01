@include('partials.head')
        @include('partials.navbar')
          <div class="content">
          {!! Form::open(['route' => 'laravelcollectivepost']) !!}
            {!! Form::submit('ok', ['class' => 'btn btn-primary']) !!}
          {!! Form::close() !!}
          </div>
          @include('partials.footer')
          @include('partials.scripts')