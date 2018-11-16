<style> 
.header{
    padding:0;
	 margin:0;
	 border:none;
    height:100%;
    width: 100%;
    background:grey;
}

</style>
<!--Navbar-->
        
    <nav class="navbar navbar-collapse navbar-expand-lg navbar-dark blue-gradient fixed-top" >
        
        <div class="container">
        

        <a class="navbar-brand" href="index.php">
            <img src="img/icon.png" width="mr-auto" height="60" class="d-inline-block align-top" alt="UNESR"> 
            <strong class="h2-responsive font-bold wow fadeIn animated">UNESR</strong> 
        </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item <?php if ($page=='home') {echo 'active';} ?>">
                        <a class="nav-link" href="index.php">Inicio
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>                    
                    <li class="nav-item <?php if ($page=='insti') {echo 'active';} ?>">
                        <a class="nav-link" href="institucion.php">Institución</a>
                    </li>                     
                    <li class="nav-item <?php if ($page=='pensum') {echo 'active';} ?>">
                        <a class="nav-link" href="pensum.php">Pensum</a>
                    </li>
                      <li class="nav-item <?php if ($page=='petro') {echo 'active';} ?>">
                        <a class="nav-link" href="petro.php">Petro</a>
                    </li>
                     <li class="nav-item <?php if ($page=='fcu') {echo 'active';} ?>">
                        <a class="nav-link" href="fcu.php" title="Federación de Centros Universitarios">FCU</a>
                    </li>
                    
                    <!--    <li class="nav-item btn-group">
                        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>                            
                            
                                <a class="nav-link dropdown-toggle " id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown </a>                                
                                    <div class="dropdown-menu dropright" aria-labelledby="navbarDropdownMenuLink">
                                        <a href="#">4th level</a>  
                                    </div>
                        </div>
                    </li> -->
                </ul>
                <!-- <form class="form-inline">
                    <input class="form-control mr-sm-2" type="text" placeholder="Buscar" aria-label="Buscar">
                </form> 
                <a class="btn btn-sm btn-outline-white" href="login.php" type="button">Login</a> -->
                 <a class="btn aqua-gradient waves-effect waves-light" href="http://siace.unesr.edu.ve" target="_blank" title="Sistema Integrado Academico de Control de Estudios" >
                    <strong>SIACE</strong>
                </a>
            </div>
        </div>
    </nav>
    <!--/.Navbar-->