@include('partials.head')
        @include('partials.navbar')
          <div class="content">
            <a class="btn btn-primary" href="/form" role="button">Wstaw</a>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Brand</th>
                    <th scope="col">Model</th>
                    <th scope="col">Year of production</th>
                    <th scope="col">Price</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
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
                    <td><a class="btn btn-primary" href="/edit/{{ $car->id }}" role="button">Edit</a></td>
                    <td><a class="btn btn-danger" href="/delete/{{ $car->id }}" role="button">X</a></td>
                  </tr>
                  @endforeach                 
                </tbody>
              </table>
          </div>
          @include('partials.footer')
          @include('partials.scripts')