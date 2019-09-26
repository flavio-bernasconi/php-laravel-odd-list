<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    @include ('include-components.head')
  </head>
  <body>
    <h1>odd num</h1>

    <ul class="wrap-numbers">
      @foreach($oddNum as $num)
        <li class="number">{{ $num}}</li>
      @endforeach

    </ul>

  <h1>even num</h1>

    <ul class="wrap-numbers">
      @foreach($evenNum as $num)
        <li class="number">{{ $num}}</li>
      @endforeach

    </ul>

    @include ('include-components.footer')

  </body>
</html>
