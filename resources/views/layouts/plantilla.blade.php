<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    
    <!-- favicon -->
    <style>
        .active{
            color: red;
            font-weight: bold;
        }
    </style>
    
</head>
<body>
    <!-- header-->    
    <!-- nav -->
    <header>
        <h1>
    
       
            <nav>
       
                <ul>
            
                    <li><a href="{{route('home')}}" class="{{request()->routeIs('home') ? 'active' : '' }}">Home</a>
                
              
                        
               
           
                    </li> 

            
                    <li><a href="{{route('cursos.index')}}" class="{{request()->routeIs('cursos.index') ? 'active' : '' }}">Cursos</a>
             
                        
           
                    </li>

           
                    <li><a href="{{route('nosotros')}}" class="{{request()->routeIs('nosotros') ? 'active' : '' }}">Nosotros</a>
              
                     
           
                    </li>
        
                </ul>
            
           
            </nav>
        
        </h1>
    
    </header>
    
        @yield('content')
    
    
    
    <!-- footer --> 
    <!-- script -->
    
    
</body>
</html>