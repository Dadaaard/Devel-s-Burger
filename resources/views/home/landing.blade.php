

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
            padding: 0px 10px;
    
        }

        .nav_links li a {
            transition: all 0.3s ease 0s;
        }

        .nav_links li a:hover {
            color: #0088a9
        }
        button {
            padding: 9px 25px;
            background-color: rgba(0,136,169,1);
            border:none;
            border-radius: 50px;
            cursor: pointer;
            transition: all 0.3s ease 0s;
        }

        button:hover {
            background-color: white;
        }
        .container {
            text-align: center;
            margin: auto;
            display: flex;
            background-color: white;
            border-style: ridge;
            border: 4px;
            border-radius: 10px;
            align-content: center;
            justify-content: space-between;
            width: 90%;
            margin-top: 3%;
            box-shadow: 0px 1px 3px 0px rgb(55, 55, 55);
                
        }
        .container div {
            background-color: white;
          
            align-items: center;
            margin: 20px;
            width: 80%;
        }
        .search {
            text-align: center;
            
        }
        .btn-search {
            width:80px;
            margin-top:20px; 
            border: 1px solid #eee; 
            cursor:pointer;
            padding: 5px;  
            background-color: rgb(207, 207, 207);
        }
        .input-search {
            padding: 5px;
            width: 450px;
            height: 30px;
            border: 1px solid gray; 
            border-radius: 5px;
            padding: 0px 25px;
            outline: none;
        }
        .cart {
            align-items:center;
        }
        .num {
            width: 10px;
            font-size: 18px;
            margin: 0 10px;
            padding: 10px;
            border: none;
            outline: none;
            
        }
        button {
            background-color:rgb(246, 5, 30);
            border: none;
            border-radius: 10px;
        }
        button:hover {
            background:rgb(228, 228, 228);
            
        }

        .nice-number {

  justify-content: stretch;
}

.nice-number input {
  vertical-align: middle;
  -moz-appearance: textfield;
  box-sizing: content-box;
  margin: 0;
  text-align: center;
}

.nice-number input::-webkit-inner-spin-button,
.nice-number input::-webkit-outer-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

.cart {
 background-color: rgb(37, 217, 82);
}
i {
    padding: none;

}

        </style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" ></script>
<script>
    $(function(){
        (function ($) {
	$.fn.niceNumber = function (options) {
		var defaults = {
			autoSize: true,
			autoSizeBuffer: 1,
			buttonDecrement: '—',
			buttonIncrement: '+',
			buttonPosition: 'around',

			/**
				callbackFunction
				@param {$input} currentInput - the input running the callback
				@param {number} amount - the amount after increase/decrease
				@param {object} settings - the passed niceNumber settings
			**/
			onDecrement: false,
			onIncrement: false,
		};
		var settings = $.extend(defaults, options);

		return this.each(function () {
			var currentInput = this,
				$currentInput = $(currentInput),
				maxValue = $currentInput.attr('max'),
				minValue = $currentInput.attr('min'),
				attrMax = null,
				attrMin = null;

			// Skip already initialized input
			if ($currentInput.attr('data-nice-number-initialized')) return;

			// Handle max and min values
			if (
				maxValue !== undefined &&
				maxValue !== false
			) {
				attrMax = parseFloat(maxValue);
			}

			if (
				minValue !== undefined &&
				minValue !== false
			) {
				attrMin = parseFloat(minValue);
			}

			// Fix issue with initial value being < min
			if (attrMin && !currentInput.value) {
				$currentInput.val(attrMin);
			}

			// Generate container
			var $inputContainer = $('<div/>', {
				class: 'nice-number',
			}).insertAfter(currentInput);

			// Generate interval (object so it is passed by reference)
			var interval = {};

			// Generate buttons
			var $minusButton = $('<button/>')
				.attr('type', 'button')
				.html(settings.buttonDecrement)
				.on('mousedown mouseup mouseleave', function (event) {
					changeInterval(event.type, interval, function () {
						var currentValue = parseFloat($currentInput.val() || 0);
						if (
							attrMin == null ||
							attrMin < currentValue
						) {
							var newValue = currentValue - 1;
							$currentInput.val(newValue);
							if (settings.onDecrement) {
								settings.onDecrement(
									$currentInput,
									newValue,
									settings
								);
							}
						}
					});

					// Trigger the input event here to avoid event spam
					if (event.type == 'mouseup' || event.type == 'mouseleave') {
						$currentInput.trigger('input');
					}
				});

			var $plusButton = $('<button/>')
				.attr('type', 'button')
				.html(settings.buttonIncrement)
				.on('mousedown mouseup mouseleave', function (event) {
					changeInterval(event.type, interval, function () {
						var currentValue = parseFloat($currentInput.val() || 0);
						if (
							attrMax == null ||
							attrMax > currentValue
						) {
							var newValue = currentValue + 1;
							$currentInput.val(newValue);
							if (settings.onIncrement) {
								settings.onIncrement(
									$currentInput,
									newValue,
									settings
								);
							}
						}
					});

					// Trigger the input event here to avoid event spam
					if (event.type == 'mouseup' || event.type == 'mouseleave') {
						$currentInput.trigger('input');
					}
				});

			// Remember that we have initialized this input
			$currentInput.attr('data-nice-number-initialized', true);

			// Append elements
			switch (settings.buttonPosition) {
				case 'left':
					$minusButton.appendTo($inputContainer);
					$plusButton.appendTo($inputContainer);
					$currentInput.appendTo($inputContainer);
					break;
				case 'right':
					$currentInput.appendTo($inputContainer);
					$minusButton.appendTo($inputContainer);
					$plusButton.appendTo($inputContainer);
					break;
				case 'around':
				default:
					$minusButton.appendTo($inputContainer);
					$currentInput.appendTo($inputContainer);
					$plusButton.appendTo($inputContainer);
					break;
			}

			// Nicely size input
			if (settings.autoSize) {
				$currentInput.width(
					$currentInput.val().length + settings.autoSizeBuffer + 'ch'
				);
				$currentInput.on('keyup input', function () {
					$currentInput.animate(
						{
							width:
								$currentInput.val().length +
								settings.autoSizeBuffer +
								'ch'
						},
						200
					);
				});
			}
		});
	};

	function changeInterval(eventType, interval, callback) {
		if (eventType == 'mousedown') {
			interval.timeout = setTimeout(function () {
				interval.actualInterval = setInterval(function () {
					callback();
				}, 100);
			}, 200);
			callback();
		} else {
			if (interval.timeout) {
				clearTimeout(interval.timeout);
			}
			if (interval.actualInterval) {
				clearInterval(interval.actualInterval);
			}
		}
	}
})(jQuery);

$('input[type="number"]').niceNumber();

});
    </script>
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
<div class="search">
                    <form action="{{url('search')}}" method="get">
                        @csrf
                       
                        <input type="text" name="search" placeholder="Search Products" class="input-search">
            
                        <button type="submit" value="Search" class="btn-search"><i class="fa-solid fa-magnifying-glass"></i></button>
                    </form>      
                </div>
@foreach($post as $post)
<div class="container">
        <div><img src="images/{{$post->image}}" alt="Home Burger Background" style="width:60%; padding-top:25px;" ></div>
        <div style="padding-top:25px;"><h2> {{$post->productname}} </h2>
            <p> {{$post->description}} </p> </div>
        <div style="padding-top:25px;"> <strong>{{$post->price}}</strong> PHP </div>
        <div class="cart">
        <form action="{{url('add_cart',$post->id)}}" method="POST">

                        @csrf
                        <p><strong> Quantity</strong> </p>
                        <input type="number" name="quantity" value="1" min="1" class="num">

                        <div class="cart1">
                       
                        <button type="submit" value="Add to Cart" class="cart"><strong>Add to Cart</strong>
                        <i class="fa-solid fa-cart-shopping"></i> </button>
</div>
                        
                    </form>

    </div>
 

    </div>
    @endforeach
</body>

</html>