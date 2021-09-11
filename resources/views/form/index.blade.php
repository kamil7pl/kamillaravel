@include('partials.head')
        @include('partials.navbar')
          <div class="content">
              {!! Form::open(['route' => 'request.index', 'method' => 'put', 'files' => true]) !!}
              <div class="mb-3">
                {!! Form::label('brand', 'Brand: ', ['class' => 'form-label']) !!}
                {!! Form::text('brand', '', ['class' => 'form-control']) !!}
                @error('brand')
                    <div>{{ $message }}</div>
                @enderror
              </div>

              <div class="mb-3">
                {!! Form::label('model', 'Model: ', ['class' => 'form-label']) !!}
                {!! Form::text('model', '', ['class' => 'form-control']) !!}
                @error('model')
                    <div>{{ $message }}</div>
                @enderror
              </div>

              <div class="mb-3">
                {!! Form::label('year_of_production', 'Year of production: ', ['class' => 'form-label']) !!}
                {!! Form::text('year_of_production', '', ['class' => 'form-control']) !!}
                @error('year_of_production')
                    <div>{{ $message }}</div>
                @enderror
              </div>

              <div class="mb-3">
                {!! Form::label('price', 'Price: ', ['class' => 'form-label']) !!}
                {!! Form::text('price', '', ['class' => 'form-control']) !!}
                @error('price')
                    <div>{{ $message }}</div>
                @enderror
              </div>

              <div class="mb-3">
                {!! Form::label('image', 'Image: ', ['class' => 'form-label']) !!}
                {!! Form::file('image', ['class' => 'form-control']) !!}
                @error('image')
                    <div>{{ $message }}</div>
                @enderror
              </div>
              {!! Form::submit('submit', ['class' => 'btn btn-primary']) !!}
              {!! Form::close() !!}
          </div>
          @include('partials.footer')
          @include('partials.scripts')