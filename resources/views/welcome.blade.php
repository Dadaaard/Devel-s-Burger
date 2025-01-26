<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Devel's Burger</title>

        <!-- Fonts -->
 
        <link rel="stylesheet" href="styles.css">

        <!-- Styles -->
        <style>
            
            a{
                text-decoration: none;
            }
            .logo {
                position: absolute;
  top:40%;
  left: 25%;
  transform: translate(-50% , -50%)
            }
            .nav {
                position: absolute;
  top:40%;
  left: 70%;
  transform: translate(-50% , -50%)
            }

            .vl {
  border-left: 1px solid black;
  height: 500px;
  position: absolute;
  top:50%;
  left: 50%;
  transform: translate(-50% , -50%)
}
.custom-btn {
  width: 130px;
  height: 40px;
  color: #fff;
  border-radius: 5px;
  padding: 10px 25px;
  font-family: 'Lato', sans-serif;
  font-weight: 500;
  background: transparent;
  cursor: pointer;
  transition: all 0.3s ease;
  position: relative;
  display: inline-block;
   box-shadow:inset 0.2px 0.2px 0px 0px black,
   7px 7px 20px 0px rgba(0,0,0,.1),
   3px 2px 3px 0px red;
  outline: none;
}
button {
  margin: 20px;
}
.btn-16 {
  border: none;
  color: black;
}
.btn-16:after {
  position: absolute;
  content: "";
  width: 0;
  height: 100%;
  top: 0;
  left: 0;
  direction: rtl;
  z-index: -1;
  box-shadow:
   -7px -7px 10px 0px #fff9,
   5px 5px 5px 0px red,
   7px 7px 20px 0px #0002,
   4px 4px 5px 0px #0001;
  transition: all 0.3s ease;
}
.btn-16:hover {
  color: #000;
}
.btn-16:hover:after {
  left: auto;
  right: 0;
  width: 100%;
}
.btn-16:active {
  top: 2px;
}

.btn-17 {
  border: none;
  color: black;
  box-shadow:inset 0.2px 0.2px 0px 0px black,
   7px 7px 20px 0px rgba(0,0,0,.1),
   3px 2px 3px 0px orange;
}
.btn-17:after {
  position: absolute;
  content: "";
  width: 0;
  height: 100%;
  top: 0;
  left: 0;
  direction: rtl;
  z-index: -1;
  box-shadow:
   -7px -7px 20px 0px #fff9,
   5px 5px 5px 0px orange,
   7px 7px 20px 0px #0002,
   4px 4px 5px 0px #0001;
  transition: all 0.3s ease;
}
.btn-17:hover {
  color: #000;
}
.btn-17:hover:after {
  left: auto;
  right: 0;
  width: 100%;
}
.btn-17:active {
  top: 2px;
}




     </style>
    </head>
    <body class="antialiased" >
    <div class="vl">
</div>
        <div class="container">
        <div class="nav" >
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right" >
                    @auth
                       <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                    <div style="margin:0;">
                    <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"> <button class="custom-btn btn-16"><strong> LOGIN </strong></button></a>
        </div>
        <div style="margin:0;">
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"> <button class="custom-btn btn-17"><strong> REGISTER</strong></button></a>
        </div>
                        @endif
                    @endauth
                    
                </div>
               
        </div>
            @endif
            <div>
            <img class="logo" src="images/2ndlogo.png" alt="logo">

</div> 
</div>

            </div>
        </div>
    </body>
</html>
