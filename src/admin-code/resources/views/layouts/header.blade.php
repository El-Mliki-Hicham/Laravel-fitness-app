<section id="admin">
    <!-- start sidebar -->
    <div class="sidebar">
      <!-- start with head -->
      <div class="head">
        <div class="logo">
        <img src="{{asset('img/logo  spartel gym black and red.png ')}}" alt="">
        </div>
        <a href="#" class="btn btn-danger">SUBMIT new MOVIE</a>
      </div>
      <!-- end with head -->
      <!-- start the list -->
      <div id="list">
        <ul class="nav flex-column">
          <!-- end user interface submenu -->
          <!-- start with charts -->
          <li class="nav-item"><a href="#menu2" class="nav-link collapsed" data-toggle="collapse"><i class="fa fa-fire"></i>tables<span class="sub-ico"><i class="fa fa-angle-down"></i></span></a></li>
          <!-- start charts submenue -->
          <li class="sub collapse" id="menu2">
              <a href="{{route('afficher-exercice.index')}}" class="nav-link" data-parent="#menu3">tableau excerice</a>
              <a href="{{route('afficher-categorie.index')}}" class="nav-link" data-parent="#menu3">tableau-categorie</a>
              <a href="{{route('afficher-jour.index')}}" class="nav-link" data-parent="#menu3">tableau-jour</a>
              <a href="{{route('afficher-programme.index')}}" class="nav-link" data-parent="#menu3">tableau-programme</a>
             
          </li>
          <li class="nav-item"><a href="#menu3" class="nav-link collapsed" data-toggle="collapse"><i class="fa fa-fire"></i>Insérer<span class="sub-ico"><i class="fa fa-angle-down"></i></span></a></li>
          <!-- start charts submenue -->
          <li class="sub collapse" id="menu3">
            <a href="{{route('afficher-exercice.create')}}" class="nav-link" data-parent="#menu3">Ajouter exercice</a>
            <a href="{{route('afficher-categorie.create')}}" class="nav-link" data-parent="#menu3">Ajouter categorie</a>
            <a href="{{route('afficher-jour.create')}}" class="nav-link" data-parent="#menu3">Ajouter jour</a>
            <a href="{{route('afficher-programme.create')}}" class="nav-link" data-parent="#menu3">Ajouter programme</a>
              
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
        
        <!-- end head bottom -->
      </div>
      <!-- end content head -->
      <!-- start with the real content -->
      <div id="real">
        <!-- start content here -->
        <div class="wrap">
          <div id="layoutSidenav_content">