@include('partials.head')
        @include('partials.navbar')
          <div class="content">
            {!! Form::open(['route' => 'clienthttp.post.index']) !!}
                {!! Form::submit('ok') !!}
            {!! Form::close() !!}
          </div>
          @include('partials.footer')
          @include('partials.scripts')