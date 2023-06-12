<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
    
  
</head>

<body>

  <div>
    <div >
        <div >
            @include('layouts.header')   
        </div>

        <div >
            @yield('main')
        </div>
    </div>
    <div class="background2">

    </div>
    
    
    <div>
        @include('layouts.footer') 
    </div>
  </div>
    
    {{-- js --}}
    <script src="js/popup.js"></script>
    
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    
</body>

</html>