<style>

@import url('https://fonts.googleapis.com/css2?family=Noto+Sans:wght@700&family=Poppins:wght@400;500;600&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Jost&family=Pacifico&display=swap');


* {
  font-family:'Jost', sans-serif;
}
body {
  margin: 0;
  padding: 0;
  background: none;
  height: 100vh;
  overflow: hidden;
}

.container {
    margin-top: 3%;
    display: flex;
justify-content: center;
align-items: center;
}
.rwd-table {
  -webkit-box-shadow: 1px 1px 5px 1px rgba(0,0,0,0.58);
  background: white;
  color:black;
  border-radius: .4em;
  overflow: hidden;

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
.button1 {
    text-align: center;
    padding: 5px;
    border-color: red;
    border-style: solid;
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
            font-family:'Jost', sans-serif;
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
       
    <div>
        @if(session()->has('message'))
        <div style="margin-left:auto; margin-right:auto;">

        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
        {{session()->get('message')}}

        </div>

        @endif

        <div class="container">
        
<table class="rwd-table">
  <tr style="color:rgb(246, 62, 84)">
    <th style="padding: 20px;">Image</th>
    <th >Product Name</th>
    <th style="padding: 20px;">Description</th>
    <th style="padding: 20px;">Price</th>
    <th style="padding: 20px;">Action</th>
   
  </tr>
  @foreach($post as $post)

  <tr>

<td>
        <img style="height:85px;"src="images/{{$post->image}}">
    </td>

    <td style="padding: 20px;">{{$post->productname}}</td>

    <td style="padding: 20px;">{{$post->description}}</td>


    <td style="padding: 20px; text-align: center;">{{$post->price}} PHP</td>

    <td style="padding: 20px;">
    <div style="display:flex;">
    <div style="background-color:red; padding:0px 10px; height:35px; margin-top:4px;">
        <a href="{{url('delete_post',$post->id)}}" class="btn default" 
        onclick="return confirm('Are you sure want to delete this ?')">Delete</a>
</div>
   <div style="background-color:skyblue; margin:4px; padding:5px 18px; ">
        <a href="{{url('edit_page',$post->id)}}" class="btn default">Edit</a>
</div>
</div>
    </td>



</tr>

@endforeach
</table>
</div>

               


