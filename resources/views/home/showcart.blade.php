
<style>
  @import url('https://fonts.googleapis.com/css2?family=Jost&family=Pacifico&display=swap');

.container {
    margin-top: 3%;
    display: flex;
justify-content: center;
align-items: center;
margin-left: 50px;



}
.rwd-table {
    
  background: white;
  color:black;
  border-radius: .4em;
  overflow: hidden;
 
-webkit-box-shadow: 1px 1px 5px 1px rgba(0,0,0,0.58);


  tr {
    border-color: lighten(#34495E, 10%);
    
  }
  th, td {
    margin: .5em 1em;
    @media (min-width: $breakpoint-alpha) { 
        padding: 10px;
    
    }
  }
  th, td:before {
    color: #dd5;
  }
}



.remove {
  border-color: #f44336;
  color: red;
  
}

.remove:hover {
  background: #f44336;
  color: white;
}

.check {
    
    padding: 10px;
  border-color: orange;
  background: orange;
  color: white;
  border-color: orange;
    border: 1px solid orange;
}

.check:hover {
  background: white;
  color: black;
}
h1 {
  margin-top: 5%;
  text-align: center;
  font-family:'Jost', sans-serif;
}

</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


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
            padding: 0px 20px;
    
        }

        .nav_links li a {
            transition: all 0.3s ease 0s;
        }

        .nav_links li a:hover {
            color: #0088a9
        }
        button {
            padding: 9px 25px;
            background-color: rgb(246, 5, 30);
            border:none;
            border-radius: 50px;
            cursor: pointer;
            transition: all 0.3s ease 0s;
        }

        button:hover {
            background-color:rgb(222, 27, 27);
        }
  
        </style>
</head>

<body>
    <header>
        <img class="logo" src="images/2ndlogo.png" alt="logo" style="width:6%; ">
        <nav class="nav_links">
            <li><a href="landing"> Home </a></li>
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

   
       

<div class="container">
        
        <table class="rwd-table">
          <tr style="color:rgb(246, 62, 84)">
            <th style="padding: 20px;">Image</th>
            <th >Product Name</th>
            <th style="padding: 20px;">Quantity</th>
            <th style="padding: 20px;">Price</th>
            <th style="padding: 20px;">Action</th>
           
          </tr>
          
          <?php $totalprice=0; ?>
          @foreach($cart as $cart)
        
          <tr>
        
        <td>
                <img style="height:85px;"src="images/{{$cart->image}}">
            </td>
        
            <td style="padding: 20px;">{{$cart->productname}}</td>
        
            <td style="padding: 20px;">{{$cart->quantity}}</td>
        
        
            <td style="padding: 20px; text-align: center;">{{$cart->price}}</td>
        
            <td style="padding: 20px;">
            <div class="button1">
           
                <button href="{{url('remove_cart',$cart->id)}}" class="btn default" 
                onclick="return confirm('Are you sure want to delete this ?')"><strong>Remove Product</strong>
                        <i class="fa-solid fa-cart-shopping"></i> </button>
               
            <div>
            </td>
        
        
        
        </tr>
        
        <?php $totalprice=$totalprice + $cart->price ?>
        
        @endforeach
        </table>
        </div>
        
         <div>
        
                            <h1 class="TotalP">Total Price: {{$totalprice}}PHP</h1>
                            </div>
        
                            <div style="text-align:center; margin-top:20px;">
                                <a class="check"href="{{url('checkout_order')}}">Proceed to Checkout</a>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        
            
            </div>