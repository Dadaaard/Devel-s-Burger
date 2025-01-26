<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .div1{
            

            background-color: red;
            color: white;
            height: 280px;
            text-align: center;
            font-size: 30px;
            position: absolute;
            width: 1280px;
            left: 0px;
            top: 0px;
            font-family: 'Roboto';
            

        }



.button {
  background: red;
  border: 1px solid #FF4742;
  border-radius: 6px;
  box-shadow: rgba(0, 0, 0, 0.1) 1px 2px 4px;
  box-sizing: border-box;
  color: #FFFFFF;
  cursor: pointer;
  display: inline-block;
  font-family: nunito,roboto,proxima-nova,"proxima nova",sans-serif;
  font-size: 16px;
  font-weight: 800;
  line-height: 16px;
  min-height: 40px;
  outline: 0;
  padding: 12px 14px;
  margin-top: 580px;
  text-align: center;
  text-rendering: geometricprecision;
  text-transform: none;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  vertical-align: middle;
}

.button:hover,
.button:active {
  background-color: initial;
  background-position: 0 0;
  color: #FF4742;
}

.button:active {
  opacity: .5;
}

.center{
    margin-top: 100px;
}


    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="div1">
        <div class=center>
    <strong>THANK YOU FOR PURCHASING!</strong>
    <br>
    You may come now.
        </div>
    </div>

    <div class="div2">
    <a class="button"href="{{url('landing')}}">Go Back</a>
    </div>
</body>
</html>