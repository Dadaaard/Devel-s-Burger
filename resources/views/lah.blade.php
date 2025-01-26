<style>
  @import url('https://fonts.googleapis.com/css2?family=Jost&family=Pacifico&display=swap');

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            background-color: none;
           font-family:'Jost', sans-serif;
        }

        li, a {
            font-family:'Jost', sans-serif;
            font-weight: 500;
            font-size: 16px;
            color: black;
            text-decoration: none;
            list-style:none;

        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 5px 8%;
            background-color: white;
            box-shadow: 0px 1px 5px 0px rgb(240, 237, 239);

        }

        .logo {
            cursor: pointer;
        }
        .nav_links {
            list-style:none;
        }
        .nav_links li {
            display: inline-block;
            padding: 0px 10px;
    
        }

        .nav_links li a {
            transition: all 0.3s ease 0s;
        }

        .nav_links li a:hover {
            color: #0088a9
        }

        a {
    color: inherit;
    text-decoration: inherit;
  }

  body {
    margin: 0;
    padding: 0;
    font-family: 'Open Sans', sans-serif;
  }
  ::selection {
    background-color: #f7ca18;
    color: #1b1b1b;
  }
  
  section {
    background-color: none;
    height: 70vh;
    display: flex;
  }
  section .title {
    max-width: 80%;
    width: 100%;
    align-self: center;
    transform: translateY(-50px);
    margin: 0 auto;
    overflow: hidden;
    padding-bottom: 10px;
  }
  section .title span {
    display: inline-block;
    font-size: 5vw;
    color: black;
    width: 100%;
    text-transform: uppercase;
    transform: translateX(-100%);
    animation: byBottom 1s ease both;
    font-weight: 600;
    letter-spacing: 0.25vw;
  }
  section .title span:last-child {
    font-size: 1rem;
    animation: byBottom 1s 0.25s ease both;
  }
  section .title span a {
    position: relative;
    display: inline-block;
    margin-left: 0.5rem;
    text-decoration: none;
    color: red;
  }
  section .title span a::after {
    content: "";
    height: 2px;
    background-color:red;
    position: absolute;
    bottom: -10px;
    left: 0;
    width: 0;
    animation: linkAfter 0.5s 1s ease both;
  }
  @-moz-keyframes pop {
    0% {
      transform: translateY(100%);
    }
    100% {
      transform: translateY(0);
    }
  }
  @-webkit-keyframes pop {
    0% {
      transform: translateY(100%);
    }
    100% {
      transform: translateY(0);
    }
  }
  @-o-keyframes pop {
    0% {
      transform: translateY(100%);
    }
    100% {
      transform: translateY(0);
    }
  }
  @keyframes pop {
    0% {
      transform: translateY(100%);
    }
    100% {
      transform: translateY(0);
    }
  }
  @-moz-keyframes byBottom {
    0% {
      transform: translateY(150%);
    }
    100% {
      transform: translateY(0);
    }
  }
  @-webkit-keyframes byBottom {
    0% {
      transform: translateY(150%);
    }
    100% {
      transform: translateY(0);
    }
  }
  @-o-keyframes byBottom {
    0% {
      transform: translateY(150%);
    }
    100% {
      transform: translateY(0);
    }
  }
  @keyframes byBottom {
    0% {
      transform: translateY(150%);
    }
    100% {
      transform: translateY(0);
    }
  }
  @-moz-keyframes linkAfter {
    0% {
      width: 0;
    }
    100% {
      width: 30px;
    }
  }
  @-webkit-keyframes linkAfter {
    0% {
      width: 0;
    }
    100% {
      width: 30px;
    }
  }
  @-o-keyframes linkAfter {
    0% {
      width: 0;
    }
    100% {
      width: 30px;
    }
  }
  @keyframes linkAfter {
    0% {
      width: 0;
    }
    100% {
      width: 30px;
    }
  }

        </style>

        <script>

(function($){
  // variables
  elementWidth = $('ul').width(),
  containerWidth = $('nav').width(),
  difference = elementWidth-containerWidth,
  finalWidth = difference * 1.5,
  element = $('ul');
  
  // active on click
  $('li').on('click', function(){
    $('li').removeClass('active');
    $(this).addClass('active');
  });
  
})(jQuery);

          </script>
        <!DOCTYPE html>
        <html lang="en">
        <head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Document</title>
        </head>
        <body>
        <header>
        <img class="logo" src="images/2ndlogo.png" alt="logo" style="width:6%; ">
        <nav class="nav_links">
            <li><a href="landing">Home </a></li>
            <li><a href="homepage"> Menu </a><li>
            <li><a href="{{url('show_cart')}}"> My Cart </a><li>
            
            </nav>
   
    <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
    

                

</header>

<div class="container" style="display:flex">
<section>
  <div class="title"><span>Devel's Burger</span><span>where taste meets<a target="_blanck" href="salfia.com">perfection!</a></span></div>
</section>

      <div class="photo">
      <img src="images/logo-main.png" alt="logo">
      </div>
      </div>
        </body>
        </html>
