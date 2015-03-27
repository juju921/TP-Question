
<html>
    <head>
        <title>Questions</title>
        <link href="{{url('assets/css/bootstrap.min.css')}}" rel="stylesheet">
            <link href="{{url('css/style.css')}}" rel="stylesheet">

    </head>
    <body>

     <nav class="navbar navbar-inverse navbar-fixed-top">
           <div class="container">
             <div class="navbar-header">
               <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                 <span class="sr-only">Toggle navigation</span>
                 <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
               </button>
               <a class="navbar-brand" href="#">Questionnaire</a>
             </div>
             <div id="navbar" class="collapse navbar-collapse">
               <ul class="nav navbar-nav">
                 <li class="active"><a href="#">Home</a></li>
                 <li><a href="#"></a></li>
                 <li><a href="#"></a></li>
               </ul>
             </div><!--/.nav-collapse -->
           </div>
         </nav>
        <div class="container content">
            <div class="row content">
                <div class="col-xs-8">
                </div>
                <div class="col-xs-4">
                    @section('sidebar')

                    @show
                </div>
            </div>
        </div>

    <div class="container">

      <div class="starter-template">
        <h1>Questions</h1>
        @yield('content')
      </div>
    @section('sidebar')

                    @show
    </div><!-- /.container -->

    </body>
</html>