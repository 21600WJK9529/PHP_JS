    <!--vertical navbar as header demo-->
    <? 
    include 'textDump.php';
    ?>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="style.css">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        
      </head>
    <body >

    <!--Container - Row - Col = no horizontal scrollbar-->
    <div class="container" id="cont-header">
     
    <!--horizontal tabs-->

    <div class="row">
    <div class="col-12" style="padding:0">

    <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link" href="http://localhost/Practice/Practice/Registration/vertNavTest.php">Home</a>
      </li>
      
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dummy 1
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Create</a>
          <a class="dropdown-item" href="#">Read</a>
          <a class="dropdown-item" href="#">Update</a>
          <a class="dropdown-item" href="#">Delete</a>
        </div>
        </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Dummy 2
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Create</a>
          <a class="dropdown-item" href="#">Read</a>
          <a class="dropdown-item" href="#">Update</a>
          <a class="dropdown-item" href="#">Delete</a>
        </div>
        </li>

        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Dummy 3
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Create</a>
          <a class="dropdown-item" href="#">Read</a>
          <a class="dropdown-item" href="#">Update</a>
          <a class="dropdown-item" href="#">Delete</a>
        </div>
        </li>

        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Dummy 4
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Create</a>
          <a class="dropdown-item" href="#">Read</a>
          <a class="dropdown-item" href="#">Update</a>
          <a class="dropdown-item" href="#">Delete</a>
        </div>

        </li>
        <li class="nav-item">
        <a class="nav-link" href="http://localhost/practice/Practice/Registration/index.php">Logout</a>
      </li>
    </ul>
    <!-- 21/01 -->
    <form class="form-inline my-2 my-lg-0" id="search">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" >
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
    <!--                                                                                          -->
  </div>
</nav>
    </div>
    </div>

<!--vertical tabs-->

    <div class="row">
            
    <!--col-x where x is width(grid concept)-->
        <div class="col-1" style="padding:0">
            <div class="nav flex-column nav-pills bg-dark" id="v-pills-tab" role="tablist" aria-orientation="vertical" >
                <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab"  aria-selected="true">Test1</a>
                <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab"  aria-selected="false">Test2</a>
                <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab"  aria-selected="false">Test3</a>
                <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab"  aria-selected="false">Test4</a>
            </div>
        </div>

        <div class="col-11" style="padding:0">
        
            <div class="tab-content" id="v-pills-tabContent"> 
                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" >
                 <? echo td1(); ?>   
                </div>
                
                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" >
                <? echo td2(); ?>
                </div>

                <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" >
                <? echo td3(); ?>
                </div>

                <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" >
                <? echo td4(); ?>   
                </div>
            </div>
        </div>

        </div>
    </div>
    </body>