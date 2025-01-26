



<style>

@import url('https://fonts.googleapis.com/css2?family=Noto+Sans:wght@700&family=Poppins:wght@400;500;600&display=swap');
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
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}
body{
  margin: 0;
  padding: 0;
  background: none;
  
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

.center {
  margin-top: 1%;
}



</style>
<header>
        <img class="logo" src="images/2ndlogo.png" alt="logo" style="width:15%; height: 50px; ">
        <nav class="nav_links">
            <li><a href="{{url('post_page')}}">Add Data </a></li>
            <li><a href="{{url('show_data')}}"> Show Data </a><li>
            <li><a href="{{url('admin_orders')}}"> Show Order </a><li>
            
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
   
    <body>
      
        

<div class="center" >
      <h1 class="font-semibold text-xl text-gray-800 leading-tight">EDIT PRODUCT</h1>
      <form action="{{url('update_post', $post->id)}}" method="POST" enctype="multipart/form-data">
@csrf
        <div class="txt_field">
          <input type="textarea" name="productname" required>
          <span></span>
          <label>{{$post->productname}} (Current Product Name)</label>
        </div>
        <div class="txt_field">
          <input type="textarea" name="price" required>
          <span></span>
          <label>{{$post->price}}(Current Price)</label>
        </div>

        <div class="txt_field">
          <input type="textarea" name="description" required>
          <span></span>
          <label>{{$post->description}}(Current Description)</label>
        </div>

        <div>
                            <label>Old Image</label>

                            <img  style="margin:auto;"height="100px" width="150px" src="/images/{{$post->image}}">
                        </div>



                     




                        <div>
                            <label> Update Old Image:</label>

                            <input type="file" name="image"></input>
                        </div>
        <br>
        <input type="submit" onclick="return confirm('Are you sure want to update this data ?')"class="btn default" ></input>
        </div>
        
      </form>
    </div>

    </body>





