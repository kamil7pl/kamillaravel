@include('partials.head')
        @include('partials.navbar')
          <div class="content">
          {!! Form::open(['route' => 'request.index', 'method' => 'put']) !!}
              <div class="mb-3">
                {!! Form::label('rocznik', 'Rocznik: ', ['class' => 'form-label']) !!}
                {!! Form::text('rocznik', '', ['aria-describedby' => 'rocznikError']) !!}
                <div id="rocznikError" class="form-text">
                  @error('rocznik')
                    {{ $message }}
                  @enderror
                </div>
              </div>

              <div class="mb-3">
                {!! Form::label('typ-silnika', 'Typ silnika: ', ['class' => 'form-label']) !!}
                {!! Form::text('typ-silnika', '', ['aria-describedby' => 'typ-silnikaError']) !!}
                <div id="typ-silnikaError" class="form-text">
                  @error('typ-silnika')
                    {{ $message }}
                  @enderror
                </div>
              </div>

              <div class="mb-3">
                {!! Form::label('pojemnosc-silnika', 'Pojemność silnika: ', ['class' => 'form-label']) !!}
                {!! Form::text('pojemnosc-silnika', '', ['aria-describedby' => 'pojemnosc-silnikaError']) !!}
                <div id="pojemnosc-silnikaError" class="form-text">
                  @error('pojemnosc-silnika')
                    {{ $message }}
                  @enderror
                </div>
              </div>

              <div class="mb-3">
                {!! Form::label('typ-nadwozia', 'Typ nadwozia: ', ['class' => 'form-label']) !!}
                {!! Form::text('typ-nadwozia', '', ['aria-describedby' => 'typ-nadwoziaError']) !!}
                <div id="rocznikError" class="form-text">
                  @error('typ-nadwozia')
                    {{ $message }}
                  @enderror
                </div>
              </div>

              <div class="mb-3">
                {!! Form::label('liczba-miejsc', 'Liczba miejsc: ', ['class' => 'form-label']) !!}
                {!! Form::text('liczba-miejsc', '', ['aria-describedby' => 'liczba-miejscError']) !!}
                <div id="liczba-miejscError" class="form-text">
                  @error('liczba-miejsc')
                    {{ $message }}
                  @enderror
                </div>
              </div>

              <div class="mb-3">
                {!! Form::label('przebieg', 'Przebieg: ', ['class' => 'form-label']) !!}
                {!! Form::text('przebieg', '', ['aria-describedby' => 'przebiegError']) !!}
                <div id="przebiegError" class="form-text">
                  @error('przebieg')
                    {{ $message }}
                  @enderror
                </div>
              </div>

              <div class="mb-3">
                {!! Form::label('moc-silnika', 'Moc silnika: ', ['class' => 'form-label']) !!}
                {!! Form::text('moc-silnika', '', ['aria-describedby' => 'moc-silnikaError']) !!}
                <div id="moc-silnikaError" class="form-text">
                  @error('moc-silnika')
                    {{ $message }}
                  @enderror
                </div>
              </div>

              <div class="mb-3">
                {!! Form::label('skrzynia-biegow', 'Skrzynia biegów: ', ['class' => 'form-label']) !!}
                {!! Form::text('skrzynia-biegow', '', ['aria-describedby' => 'skrzynia-biegowError']) !!}
                <div id="skrzynia-biegowError" class="form-text">
                  @error('skrzynia-biegow')
                    {{ $message }}
                  @enderror
                </div>
              </div>

              <div class="mb-3">
                {!! Form::label('kolor', 'Kolor: ', ['class' => 'form-label']) !!}
                {!! Form::text('kolor', '', ['aria-describedby' => 'kolorError']) !!}
                <div id="kolorError" class="form-text">
                  @error('kolor')
                    {{ $message }}
                  @enderror
                </div>
              </div>
              {!! Form::submit('ok', ['class' => 'btn btn-primary']) !!}
              {!! Form::close() !!}
          </div>
          @include('partials.footer')
          @include('partials.scripts')