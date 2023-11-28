  <!DOCTYPE html>
  <html>
  <head>
      <title>My Blog</title>
      <!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
      
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      <script src="js/jquery.js"></script>
      <script src="js/bootstrap.js"></script>
      <script src="js/my.js"></script>
    </head>
  <body class="badge-dark">
  <nav class="navbar navbar-expand-lg navbar-dark badge-dark">
    <a class="navbar-brand" href="#">Blog</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Dropdown
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#">Disabled</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>
              <div class="row ">
                <div class="col">
                  <div class ="card">
                   <div class ="card-title ml-5 my-2 ">
                  <button type="btn"  class="btn btn-primary" data-toggle="modal" data-target ="#Registration">+ Create new Blog</button>
          <!-- href="cpost.php" -->
                    </div>
            </div>
          </div>
  <!-- Create user -->

    <div class="modal" id="Registration">
      <div class="modal-dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h3 class="text-dark"> New Post</h3>
        </div>
        <div class="modal-body">
          <p id="message" class="text-dark"></p>
          <form>
            <input type="text" class="form-control my-2" placeholder="Title" id="Title">   
            <input type="text" class="form-control my-2" placeholder="description" id="description">   
        
        </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success" id="btn-post"> Post</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal"> Back</button>
</div>
      </div>
        </div>
      </div>
    </div>
              

</div>
    

      <footer>
          &copy; 2023 My Blog. All rights reserved.
      </footer>

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
  </html>