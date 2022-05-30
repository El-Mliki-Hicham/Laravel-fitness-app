
@include('layouts.app')

@section('content')


    <!-- start with the real content -->
    <div id="real">
      <div class="row">
        <!-- start head content         -->
        <div class="col-lg-4">
          <!-- avtive -->
          <div class="activeMode">
            <div class="card">
              <h1>Deactivate Mode</h1>
              <a href="" class="btn btn-info">Activate now</a>
            </div>
          </div>
          <!-- end active -->
          <!-- Regster Users -->
          <div class="regsterUsers">
            <div class="card">
              <div class="card-top">
                <h1>500</h1>
                <i class="fa fa-users"></i>
              </div>
              <div class="card-bottom">
                <p>New Registered Users This Month</p>
              </div>
            </div>
          </div>
          <!-- end  Regster Users-->
        </div>
        <div class="col-lg-8">
          <div id="money">
            <div class="card">
              <div id="chart" style="width:100%; height:270px;"></div>
            </div>
          </div>
        </div>
        <!-- end head content -->
    
        <div class="activeMode col-lg-12">
          <div class="card">
            <h1>Ajouter (categortie,Exercices,jours...)</h1>
            <a href="forms.html" class="btn btn-info">Ajouter</a>
          </div>
        </div>
      
        <!-- cadre basketball -->
        <div class="col-lg-6">
          <div class="users">
            <div class="card">
              <h1 class="head">Basketball</h1>
              <!-- start row -->
              <div class="user">
                <div class="uImg"><img src="img/act/1.jpg" alt=""></div>
                <div class="info">
                  <h1>Josephine Walker</h1>
                  <p>Apple Iwork 08 Review</p>
                </div>
                <div class="item-actions" >
                  <a href="edit.html"><i  class="item-action fa fa-edit" data-toggle="modal" data-target="#labelModal"></i></a>
                  <a href=""> <i class="item-action fa fa-trash" data-toggle="modal" data-target="#deleteItemModal"></i></a>
                </div>
              </div>
              <!-- end row -->
                  
            </div>
          </div>
        </div>
        <!-- end basketball -->

        <!-- start vollyball -->
        <div class="col-lg-6">
          <div class="users">
            <div class="card">
              <h1 class="head">Vollyball</h1>
              <!-- start row -->
              <div class="user m-r-sm fa  ">
                <div class="uImg"><img src="img/act/5.jpg" alt=""></div>
                <div class="info">
                  <h1>Josephine Walker</h1>
                  <p>Apple Iwork 08 Review</p>
                
                </div>
                <div class="item-actions" >
                  <a href=""><i  class="item-action fa fa-edit" data-toggle="modal" data-target="#labelModal"></i></a>
                  <a href=""> <i class="item-action fa fa-trash" data-toggle="modal" data-target="#deleteItemModal"></i></a>
                </div>
              </div>
              <!-- end row -->
            
            </div>
          </div>
        </div>
        <!-- end vollyball -->

         <!-- cadre Exercices -->
         <div class="col-lg-6">
          <div class="users">
            <div class="card">
              <h1 class="head">Exercices</h1>
              <!-- start row -->
              <div class="user">
                <div class="uImg"><img src="img/act/1.jpg" alt=""></div>
                <div class="info">
                  <h1>Josephine Walker</h1>
                  <p>Apple Iwork 08 Review</p>
                </div>
                <div class="item-actions" >
                  <a href=""><i  class="item-action fa fa-edit" data-toggle="modal" data-target="#labelModal"></i></a>
                  <a href=""> <i class="item-action fa fa-trash" data-toggle="modal" data-target="#deleteItemModal"></i></a>
                </div>
              </div>
              <!-- end row -->
                  
            </div>
          </div>
        </div>
        <!-- end Exercices -->

        
         <!-- cadre jours -->
         <div class="col-lg-6">
          <div class="users">
            <div class="card">
              <h1 class="head">jours</h1>
              
              <!-- start row -->
              <div class="user">
                <div class="uImg"><img src="img/act/1.jpg" alt=""></div>
                <div class="info">
                  <h1>Josephine Walker</h1>
                  <p>Apple Iwork 08 Review</p>
                </div>
                <div class="item-actions" >
                  <a href=""><i  class="item-action fa fa-edit" data-toggle="modal" data-target="#labelModal"></i></a>
                  <a href=""> <i class="item-action fa fa-trash" data-toggle="modal" data-target="#deleteItemModal"></i></a>
                </div>
              </div>
             
              <!-- end row -->
              
            </div>
          </div>
        </div>
        <!-- end Jours -->


        <!-- categories -->
        <div class="col-lg-7">
          <div id="leads">
            
           
      
          <div class="users">
            <div class="card">
              <h1 class="head">Categories</h1>
              <!-- start row -->
              <div class="user">
                <div class="uImg"><img src="img/act/1.jpg" alt=""></div>
                <div class="info">
                  <h1>Josephine Walker</h1>
                  <p>Apple Iwork 08 Review</p>
                </div>
                <div class="item-actions" >
                  <a href=""><i  class="item-action fa fa-edit" data-toggle="modal" data-target="#labelModal"></i></a>
                  <a href=""> <i class="item-action fa fa-trash" data-toggle="modal" data-target="#deleteItemModal"></i></a>
                </div>
              </div>
              <!-- end row -->
                  
            </div>
          </div>
        
    

          </div>
        </div>
        <!-- end categories -->

        <!-- start task card -->
        <div class="col-lg-5">
          <div id="active">
            <div class="card">
              <p class="head">Active user right now</p>
              <div class="info">
                <div class="col">
                  <h1>937</h1>
                  <p>users</p>
                </div>
                <div class="col">
                  <h1>82</h1>
                  <p>guests</p>
                </div>
              </div>
              <p class="head">Page view per aria</p>
              <div class="aria">
                <p>22 from the United States of America</p>
                <p>96 from the egypt</p>
                <p>667 from the canada</p>
              </div>
            </div>
          </div>
        </div>
        <!-- end task card -->

        <!-- start Questions per Product -->
        <div class="col-lg-4">
          <div id="questions">
            <div class="card">
              <h1 class="head">Questions per Product</h1>

              <div class="pro">
                <!-- start top -->
                <div class="proTop">
                  <div class="left">
                    <p>apple store</p>
                  </div>
                  <div class="right">
                    <p>29215 Tickets / 1041 Pending</p>
                  </div>
                </div>
                <!-- end top -->

                <!-- start bottom -->
                <div class="progress">
                  <div class="progress-bar" style="width: 60%;"></div>
                </div>
                <!-- end bottom -->
              </div>
              <div class="pro">
                <!-- start top -->
                <div class="proTop">
                  <div class="left">
                    <p>google play</p>
                  </div>
                  <div class="right">
                    <p>9271 Tickets / 1220 Pending</p>
                  </div>
                </div>
                <!-- end top -->

                <!-- start bottom -->
                <div class="progress">
                  <div class="progress-bar" style="width: 10%;"></div>
                </div>
                <!-- end bottom -->
              </div>
              <div class="pro">
                <!-- start top -->
                <div class="proTop">
                  <div class="left">
                    <p>codecanyon</p>
                  </div>
                  <div class="right">
                    <p>235 Tickets / 101 Pending</p>
                  </div>
                </div>
                <!-- end top -->

                <!-- start bottom -->
                <div class="progress">
                  <div class="progress-bar" style="width: 40%;"></div>
                </div>
                <!-- end bottom -->
              </div>
              <div class="pro">
                <!-- start top -->
                <div class="proTop">
                  <div class="left">
                    <p>themeforest</p>
                  </div>
                  <div class="right">
                    <p>18 Tickets / 7 Pending</p>
                  </div>
                </div>
                <!-- end top -->

                <!-- start bottom -->
                <div class="progress">
                  <div class="progress-bar" style="width: 80%;"></div>
                </div>
                <!-- end bottom -->
              </div>
              <div class="pro">
                <!-- start top -->
                <div class="proTop">
                  <div class="left">
                    <p>google play</p>
                  </div>
                  <div class="right">
                    <p>9271 Tickets / 1220 Pending</p>
                  </div>
                </div>
                <!-- end top -->

                <!-- start bottom -->
                <div class="progress">
                  <div class="progress-bar" style="width: 10%;"></div>
                </div>
                <!-- end bottom -->
              </div>
              <div class="pro">
                <!-- start top -->
                <div class="proTop">
                  <div class="left">
                    <p>google play</p>
                  </div>
                  <div class="right">
                    <p>9271 Tickets / 1220 Pending</p>
                  </div>
                </div>
                <!-- end top -->

                <!-- start bottom -->
                <div class="progress">
                  <div class="progress-bar" style="width: 10%;"></div>
                </div>
                <!-- end bottom -->
              </div>
            </div>
          </div>
        </div>
        <!-- end Questions per Product -->

        <!-- start chatts -->
        <div class="col-lg-4">
          <div class="card">
            <div id="IndexChartOne" style="height: 320px;" ></div>
          </div>
        </div>
        <!-- end charts -->

        <!-- start chatts -->
        <div class="col-lg-4">
          <div class="card">
            <div id="IndexChartTwo" style="height: 320px;" ></div>
          </div>
        </div>
        <!-- end charts -->

      </div>
    </div>
    <!-- end the real content -->
  </div>
  <!-- end content -->
</section>
<!-- end admin -->
<!-- start screpting -->
<script src="js/jquery.min.js"></script>
<script src="js/tether.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/highcharts.js"></script>
<script src="js/chart.js"></script>
<script src="js/app.js"></script>
<!-- end screpting -->
</body>
</html>
