<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="{{ Session::get('theme', 'light') }}">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>B&D IT Consultancy</title>

      <!-- Fonts -->
      <link rel="preconnect" href="https://fonts.bunny.net">
      <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" 
      rel="stylesheet" />
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

      {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" /> --}}
      
      <!-- App Js -->
      @vite(['resources/js/app.js'])
      
      <!-- Livewire Styles -->
      @livewireStyles
   </head>
   <body>

      {{-- nav-components --}}
      @livewire('main.components.navigation')
      
      <!-- Pre loader -->
      <div class="loading bg-body">
         <div class="loading-icon">
         </div>
      </div>

      <div id="messenger">
         <!-- Messenger Chat Plugin Code -->
         <div id="fb-root"></div>

         <!-- Your Chat Plugin code -->
         <div id="fb-customer-chat" class="fb-customerchat">
         </div>
      </div>

      @yield('content')

      <footer>
         {{-- Footer --}}
         @livewire('main.components.footer')
      </footer>

      <!-- JQuery -->
      <script src="https://code.jquery.com/jquery-3.6.4.js" 
      integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" 
      crossorigin="anonymous"></script>

      <!-- Livewire Scripts -->
      @livewireScripts

      <script>
         Livewire.on('themeChanged', theme => {
            document.documentElement.setAttribute('data-bs-theme', theme)
         })
      </script>

      <!-- Messenger Chat Plugin Code -->
      <script>
         var chatbox = document.getElementById('fb-customer-chat');
         chatbox.setAttribute("page_id", "108916295035599");
         chatbox.setAttribute("attribution", "biz_inbox");
      </script>

      <!-- FB SDK code -->
      <script>
         window.fbAsyncInit = function() {
         FB.init({
            xfbml            : true,
            version          : 'v16.0'
         });
         };

         (function(d, s, id) {
         var js, fjs = d.getElementsByTagName(s)[0];
         if (d.getElementById(id)) return;
         js = d.createElement(s); js.id = id;
         js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
         fjs.parentNode.insertBefore(js, fjs);
         }(document, 'script', 'facebook-jssdk'));
      </script>
   </body>
</html>