<style>

@import url('https://fonts.googleapis.com/css2?family=Noto+Sans:wght@700&family=Poppins:wght@400;500;600&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Jost&family=Pacifico&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}
body{
  margin: 0;
  padding: 0;
  background: linear-gradient(120deg,#2980b9, #8e44ad);
  height: 100vh;
  overflow: hidden;
}
.center{
  position: absolute;
  top: 55%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 400px;
  background: white;
  border-radius: 10px;
  box-shadow: 10px 10px 15px rgba(0,0,0,0.05);
  padding-bottom: 30px;
}
.center h1{
  font-weight: bold;
  text-align: center;
  padding: 20px 0;
  border-bottom: 1px solid silver;
}
.center form{
  padding: 0 40px;
  box-sizing: border-box;
}
form .txt_field{
  position: relative;
  border-bottom: 2px solid #adadad;
  margin: 30px 0;
}
.txt_field input{
  width: 100%;
  padding: 0 5px;
  height: 40px;
  font-size: 16px;
  border: none;
  background: none;
  outline: none;
}
.txt_field label{
  position: absolute;
  top: 50%;
  left: 5px;
  color: #adadad;
  transform: translateY(-50%);
  font-size: 16px;
  pointer-events: none;
  transition: .5s;
}
.txt_field span::before{
  content: '';
  position: absolute;
  top: 40px;
  left: 0;
  width: 0%;
  height: 2px;
  background: rgb(246, 62, 84);
  transition: .5s;
}
.txt_field input:focus ~ label,
.txt_field input:valid ~ label{
  top: -5px;
  color: rgb(246, 62, 84);
}
.txt_field input:focus ~ span::before,
.txt_field input:valid ~ span::before{
  width: 100%;
}

input[type="submit"]{
  width: 100%;
  height: 50px;
  border: 1px solid;
  background:rgb(246, 62, 84);
  border-radius: 25px;
  font-size: 18px;
  color: #e9f4fb;
  font-weight: 700;
  cursor: pointer;
  outline: none;
}
input[type="submit"]:hover{
  border-color: rgb(246, 62, 84);
  transition: .5s;
}
.signup_link{
  margin: 30px 0;
  text-align: center;
  font-size: 16px;
  color: #666666;
}
.signup_link a{
  color: rgb(246, 62, 84);
  text-decoration: none;
}
.signup_link a:hover{
  text-decoration: underline;
}



</style>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Post Page') }}
        </h2>
    </x-slot>
    <body class="post_title">
      
        

<div class="center">
      <h1>ADD POST</h1>
      <form class="cf" action="{{url('add_post')}}" method="POST" enctype="multipart/form-data">
@csrf
        <div class="txt_field">
          <input type="textarea" name="productname" required>
          <span></span>
          <label>ProductName</label>
        </div>
        <div class="txt_field">
          <input type="textarea" name="price" required>
          <span></span>
          <label>Price</label>
        </div>

        <div class="txt_field">
          <input type="textarea" name="description" required>
          <span></span>
          <label>Description</label>
        </div>

       <div>
          <input type="file" name="image">
        
        </div>
        <br>
        <input type="submit" value="Submit" >
        </div>
        
      </form>
    </div>

    </body>


</x-app-layout>


