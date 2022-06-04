<section id="admin">
    <!-- start sidebar -->
    <div class="sidebar">
      <!-- start with head -->
      <div class="head">
        <div class="logo">
          <img src="img/logo-admin.png" alt="">
        </div>
        <a href="#" class="btn btn-danger">SUBMIT new MOVIE</a>
      </div>
      <!-- end with head -->
      <!-- start the list -->
      <div id="list">
        <ul class="nav flex-column">
          <li class="nav-item"><a href="index.html" class="nav-link active" ><i class="fa fa-adjust"></i>Dashboard</a></li>
          <!-- end user interface submenu -->
          <!-- start with charts -->
          <li class="nav-item"><a href="#menu2" class="nav-link collapsed" data-toggle="collapse"><i class="fa fa-fire"></i>tables<span class="sub-ico"><i class="fa fa-angle-down"></i></span></a></li>
          <!-- start charts submenue -->
          <li class="sub collapse" id="menu2">
              <a href="tableau-exercice" class="nav-link" data-parent="#menu3">tableau excerice</a>
              <a href="tableau-categorie" class="nav-link" data-parent="#menu3">tableau-categorie</a>
             
          </li>
          <li class="nav-item"><a href="#menu3" class="nav-link collapsed" data-toggle="collapse"><i class="fa fa-fire"></i>Insérer<span class="sub-ico"><i class="fa fa-angle-down"></i></span></a></li>
          <!-- start charts submenue -->
          <li class="sub collapse" id="menu3">
            <a href="inserte-exercice" class="nav-link" data-parent="#menu3">Ajouter exercice</a>
            <a href="{{route('afficher-categorie.create')}}" class="nav-link" data-parent="#menu3">Ajouter categorie</a>
              
          </li>
          <!-- end charts submenue -->
          <!-- end with charts -->
          
      </div>
      <!-- end the list -->
    </div>
    <!-- end sidebar -->
    <!-- start content -->
    <div class="content">
      <!-- start content head -->
      <div class="head">
        <!-- head top -->
       
        <!-- end head top -->
        <!-- start head bottom -->
        <div class="bottom">
          <div class="left">
            <h1>dashboard</h1>
          </div>
          <div class="right">
            <h1>dashboard /</h1>
            <a href="#">page name</a>
          </div>
        </div>
        <!-- end head bottom -->
      </div>
      <!-- end content head -->
      <!-- start with the real content -->
      <div id="real">
        <!-- start content here -->
        <div class="wrap">
          <div id="layoutSidenav_content">