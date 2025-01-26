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
  background: none;
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
<header>
        <img class="logo" src="images/2ndlogo.png" alt="logo" style="width:6%; ">
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
       
        

<div class="center" style="-webkit-box-shadow: 1px 1px 5px 1px rgba(0,0,0,0.58);">
      <h1>ADD PRODUCT</h1>
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





