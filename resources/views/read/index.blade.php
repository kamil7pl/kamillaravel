@include('partials.head')
        @include('partials.navbar')
          <div class="content">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Brand</th>
                    <th scope="col">Model</th>
                    <th scope="col">Year of production</th>
                    <th scope="col">Price</th>                    
                  </tr>
                </thead>
                <tbody>
                    @foreach($cars as $car)
                  <tr>
                    <th scope="row">{{ $car->id }}</th>
                    <td>{{ $car->brand }}</td>
                    <td>{{ $car->model }}</td>
                    <td>{{ $car->year_of_production }}</td>
                    <td>{{ $car->price }}</td>
                  </tr>
                  @endforeach       
                </tbody>
              </table>
          </div>
          @include('partials.footer')
          @include('partials.scripts')