@include('partials.head')
        @include('partials.navbar')
          <div class="content">
          <form action="{{$url}}" method="post"><!-- Można użyć Laravel collective do formularza.-->
                <input type="submit" value="ok" />
              </form>
          </div>
          @include('partials.footer')
          @include('partials.scripts')