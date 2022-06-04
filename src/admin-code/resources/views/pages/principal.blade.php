<!DOCTYPE html>
<html lang="en">
@include('pages.layouts.head')
<body>
<!-- start admin -->
@include('pages.layouts.header')
			<main>
				@yield('content')
			</main>
			
		</div>
      <!-- end content -->
    </div>
    <!-- end the real content -->
  </div>
  <!-- end content -->
</section>
<!-- end admin -->
<!-- start screpting -->
<script src="https://cdn.jsdelivr.nets/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="{{asset('js/scripts.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
<script src="{{asset('js/datatables-simple-demo.js')}}"></script>

<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/tether.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/highcharts.js')}}"></script>
<script src="{{asset('js/chart.js')}}"></script>
<script src="{{asset('js/app.js')}}"></script>
<!-- end screpting -->
</body>
</html>
