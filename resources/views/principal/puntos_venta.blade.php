@extends('welcome')
@section('contenido')
<div class="jumbotron jumbotron-fluid" data-center="background-size: 100%;"
   data-top-bottom="background-size: 110%;">
   <div class="container" >
      <div class="jumbo-heading" data-aos="fade-up">
         <h1>Puntos de venta</h1>
         <!-- Breadcrumbs -->
         <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
               <li class="breadcrumb-item"><a href="/">Inicio</a></li>
               <li class="breadcrumb-item active" aria-current="page">Puntos de venta </li>
            </ol>
         </nav>
      </div>
   </div>
   <!-- /jumbo-heading -->
</div>
<!-- /jumbotron -->
<!-- ==== Page Content ==== -->
<div class="page container">
   <div class="row">
      <div class="col-lg-7">
         <h2>Doggo puntos de venta</h2>
         <p class="mt-4">Buscamos más puntos de venta para que tengas más cerca y puedas darle a tus amigos los premios que más les encanta. </p>
         <p class="font-weight-bold">Si te gustaría, vender nuestros productos,<a href="/contacto">contáctanos y te daremos más información</a>
         </p>
      </div>
	  <!-- /col-lg -->
      {{--<div class="col-lg-5 card" style="background-color: #f4f4f4">
         <h5>Ready for adoption</h5>
         <ul class="checkmark pl-0 font-weight-bold">
            <li>All pets are neutered and vaccinated</li>
            <li>All pets are examined by a vet and treated as required</li>
            <li>We help to match you with a pet that meet you needs</li>
         </ul>
      </div>--}}
	  <!-- /col-lg -->
   </div>
   <!-- centered Gallery navigation -->
   <ul class="nav nav-pills category-isotope center-nav mt-5">
      <li class="nav-item">
         <a class="nav-link active" href="#" data-toggle="tab" data-filter="*">Todos</a>
      </li>
      <li class="nav-item">
         <a class="nav-link" href="#" data-toggle="tab" data-filter=".sal">Salamanca</a>
      </li>
      <li class="nav-item">
         <a class="nav-link" href="#" data-toggle="tab" data-filter=".corta">Cortazar</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="tab" data-filter=".cel">Celaya</a>
     </li>
     <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="tab" data-filter=".sma">San Miguel de Allende</a>
     </li>
     <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="tab" data-filter=".quer">Querétaro</a>
     </li>
     <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="tab" data-filter=".mor">Morelia</a>
     </li>
   </ul>
   <!-- /ul -->
   <!-- Gallery -->
   <div id="gallery-isotope" class="row row-eq-height mt-lg-5">
      <!-- Adopt 1 -->
      <div class="sal col-lg-6">
         <div class="isotope-item">
            <div class="adopt-card res-margin row pattern2" style="background-color: #f4f4f4">
               <div class="col-md-5">
                  <!-- Image -->
                  <div class="adopt-image d-flex flex-wrap align-items-center ">
                     <a href="adoption-single.php">
                     <img src="img/adoption/adoption1.jpg" class="img-fluid" alt="">
                     </a>
                  </div>
               </div>
               <div class="col-md-7 res-margin">
                  <!-- Name -->
                  <div class="caption-adoption">
                     <h5 class="adoption-header"><a href="adoption-single.php">Veterinario Orozco</a></h5>
                     <!-- List -->
                     <ul class="list-unstyled">
                        <li><strong>Gender:</strong> Female</li>
                        <li><strong>Age:</strong> 2 years</li>
                        <li><strong>Breed:</strong> Poodle Mix</li>
                     </ul>
                  </div>
               </div>
               <div class="col-md-12 mt-3">
                  <!-- Button -->
                  <div class="text-center">
                     <!-- Adopt info -->
                     <ul class="adopt-card-info list-unstyled">
                        <li ><i class="flaticon-veterinarian-hospital"></i>special needs</li>
                        <li ><i class="flaticon-dog-4"></i>Friendly to other pets</li>
                     </ul>
                     <!-- button-->
                     <a href="https://www.google.com.mx/maps/place/Comunicaci%C3%B3n+Pte.+428,+Benito+Ju%C3%A1rez,+36790+Salamanca,+Gto./@20.5524615,-101.2030485,16.85z/data=!4m5!3m4!1s0x842c8570da5fe487:0x8eafeffa874cb1e6!8m2!3d20.5525!4d-101.2006658" target="_blank" class="btn btn-primary">Búscalos</a>
                  </div>
                  <!-- /text-center -->
               </div>
               <!-- /col-md -->
            </div>
            <!-- /adopt-card -->
         </div>
         <!-- /isotope-item-->
      </div>
      <!-- /col-lg- -->
      <!-- Adopt 2 -->
      <div class="cats col-lg-6">
         <div class="isotope-item">
            <div class="adopt-card res-margin row pattern2" style="background-color: #f4f4f4">
               <div class="col-md-5">
                  <!-- Image -->
                  <div class="adopt-image d-flex flex-wrap align-items-center ">
                     <a href="adoption-single.php">
                     <img src="img/adoption/adoption2.jpg" class="img-fluid" alt="">
                     </a>
                  </div>
               </div>
               <div class="col-md-7 res-margin">
                  <!-- Name -->
                  <div class="caption-adoption">
                     <h5 class="adoption-header"><a href="adoption-single.php">Leelo</a></h5>
                     <!-- List -->
                     <ul class="list-unstyled">
                        <li><strong>Gender:</strong> Male</li>
                        <li><strong>Age:</strong> 7 years</li>
                        <li><strong>Breed:</strong> Mixed</li>
                     </ul>
                  </div>
               </div>
               <div class="col-md-12 mt-3">
                  <!-- Button -->
                  <div class="text-center">
                     <!-- Adopt info -->
                     <ul class="adopt-card-info list-unstyled">
                        <li ><i class="flaticon-syringe"></i>Vaccinated</li>
                        <li ><i class="flaticon-dog-4"></i>Friendly to other pets</li>
                     </ul>
                     <!-- button-->
                     <a href="adoption-single.php" class="btn btn-primary">More Info</a>
                  </div>
                  <!-- /text-center -->
               </div>
               <!-- /col-md -->
            </div>
            <!-- /adopt-card -->
         </div>
         <!-- /isotope-item-->
      </div>
      <!-- /col-lg- -->
      <!-- Adopt 3 -->
      <div class="cats col-lg-6">
         <div class="isotope-item">
            <div class="adopt-card res-margin row pattern2" style="background-color: #f4f4f4">
               <div class="col-md-5">
                  <!-- Image -->
                  <div class="adopt-image d-flex flex-wrap align-items-center ">
                     <a href="adoption-single.php">
                     <img src="img/adoption/adoption3.jpg" class="img-fluid" alt="">
                     </a>
                  </div>
               </div>
               <div class="col-md-7 res-margin">
                  <!-- Name -->
                  <div class="caption-adoption">
                     <h5 class="adoption-header"><a href="adoption-single.php">Mimi</a></h5>
                     <!-- List -->
                     <ul class="list-unstyled">
                        <li><strong>Gender:</strong> Female</li>
                        <li><strong>Age:</strong> 3 years</li>
                        <li><strong>Breed:</strong> Mixed</li>
                     </ul>
                  </div>
               </div>
               <div class="col-md-12 mt-3">
                  <!-- Button -->
                  <div class="text-center">
                     <!-- Adopt info -->
                     <ul class="adopt-card-info list-unstyled">
                        <li ><i class="flaticon-syringe"></i>Vaccinated</li>
                        <li ><i class="flaticon-dog-20"></i>Children Friendly</li>
                     </ul>
                     <!-- button-->
                     <a href="adoption-single.php" class="btn btn-primary">More Info</a>
                  </div>
                  <!-- /text-center -->
               </div>
               <!-- /col-md -->
            </div>
            <!-- /adopt-card -->
         </div>
         <!-- /isotope-item-->
      </div>
      <!-- /col-lg- -->
      <!-- Adopt 4 -->
      <div class="dogs col-lg-6">
         <div class="isotope-item">
            <div class="adopt-card res-margin row pattern2" style="background-color: #f4f4f4">
               <div class="col-md-5">
                  <!-- Image -->
                  <div class="adopt-image d-flex flex-wrap align-items-center ">
                     <a href="adoption-single.php">
                     <img src="img/adoption/adoption4.jpg" class="img-fluid" alt="">
                     </a>
                  </div>
               </div>
               <div class="col-md-7 res-margin">
                  <!-- Name -->
                  <div class="caption-adoption">
                     <h5 class="adoption-header"><a href="adoption-single.php">Jonas</a></h5>
                     <!-- List -->
                     <ul class="list-unstyled">
                        <li><strong>Gender:</strong> Male</li>
                        <li><strong>Age:</strong> 4 years</li>
                        <li><strong>Breed:</strong> Siberian Husky</li>
                     </ul>
                  </div>
               </div>
               <div class="col-md-12 mt-3">
                  <!-- Button -->
                  <div class="text-center">
                     <!-- Adopt info -->
                     <ul class="adopt-card-info list-unstyled">
                        <li ><i class="flaticon-syringe"></i>Vaccinated</li>
                        <li ><i class="flaticon-dog-20"></i>Children Friendly</li>
                     </ul>
                     <!-- button-->
                     <a href="adoption-single.php" class="btn btn-primary">More Info</a>
                  </div>
                  <!-- /text-center -->
               </div>
               <!-- /col-md -->
            </div>
            <!-- /adopt-card -->
         </div>
         <!-- /isotope-item-->
      </div>
      <!-- /col-lg- -->
      <!-- Adopt 5 -->
      <div class="dogs col-lg-6">
         <div class="isotope-item">
            <div class="adopt-card res-margin row pattern2" style="background-color: #f4f4f4">
               <div class="col-md-5">
                  <!-- Image -->
                  <div class="adopt-image d-flex flex-wrap align-items-center ">
                     <a href="adoption-single.php">
                     <img src="img/adoption/adoption5.jpg" class="img-fluid" alt="">
                     </a>
                  </div>
               </div>
               <div class="col-md-7 res-margin">
                  <!-- Name -->
                  <div class="caption-adoption">
                     <h5 class="adoption-header"><a href="adoption-single.php">Milena</a></h5>
                     <!-- List -->
                     <ul class="list-unstyled">
                        <li><strong>Gender:</strong> Female</li>
                        <li><strong>Age:</strong> 2 years</li>
                        <li><strong>Breed:</strong> Jack Russell</li>
                     </ul>
                  </div>
               </div>
               <div class="col-md-12 mt-3">
                  <!-- Button -->
                  <div class="text-center">
                     <!-- Adopt info -->
                     <ul class="adopt-card-info list-unstyled">
                        <li ><i class="flaticon-veterinarian-hospital"></i>special needs</li>
                        <li ><i class="flaticon-dog-20"></i>Children Friendly</li>
                     </ul>
                     <!-- button-->
                     <a href="adoption-single.php" class="btn btn-primary">More Info</a>
                  </div>
                  <!-- /text-center -->
               </div>
               <!-- /col-md -->
            </div>
            <!-- /adopt-card -->
         </div>
         <!-- /isotope-item-->
      </div>
      <!-- /col-lg- -->
      <!-- Adopt 6 -->
      <div class="cats col-lg-6">
         <div class="isotope-item">
            <div class="adopt-card res-margin row pattern2" style="background-color: #f4f4f4">
               <div class="col-md-5">
                  <!-- Image -->
                  <div class="adopt-image d-flex flex-wrap align-items-center ">
                     <a href="adoption-single.php">
                     <img src="img/adoption/adoption6.jpg" class="img-fluid" alt="">
                     </a>
                  </div>
               </div>
               <div class="col-md-7 res-margin">
                  <!-- Name -->
                  <div class="caption-adoption">
                     <h5 class="adoption-header"><a href="adoption-single.php">Jonsi</a></h5>
                     <!-- List -->
                     <ul class="list-unstyled">
                        <li><strong>Gender:</strong> Male</li>
                        <li><strong>Age:</strong> 5 years</li>
                        <li><strong>Breed:</strong> Mixed</li>
                     </ul>
                  </div>
               </div>
               <div class="col-md-12 mt-3">
                  <!-- Button -->
                  <div class="text-center">
                     <!-- Adopt info -->
                     <ul class="adopt-card-info list-unstyled">
                        <li ><i class="flaticon-syringe"></i>Vaccinated</li>
                        <li ><i class="flaticon-dog-4"></i>Friendly to other pets</li>
                     </ul>
                     <!-- button-->
                     <a href="adoption-single.php" class="btn btn-primary">More Info</a>
                  </div>
                  <!-- /text-center -->
               </div>
               <!-- /col-md -->
            </div>
            <!-- /adopt-card -->
         </div>
         <!-- /isotope-item-->
      </div>
      <!-- /col-lg- -->
      <!-- Adopt 7 -->
      <div class="dogs col-lg-6">
         <div class="isotope-item">
            <div class="adopt-card res-margin row pattern2" style="background-color: #f4f4f4">
               <div class="col-md-5">
                  <!-- Image -->
                  <div class="adopt-image d-flex flex-wrap align-items-center ">
                     <a href="adoption-single.php">
                     <img src="img/adoption/adoption7.jpg" class="img-fluid" alt="">
                     </a>
                  </div>
               </div>
               <div class="col-md-5 res-margin">
                  <!-- Name -->
                  <div class="caption-adoption">
                     <h5 class="adoption-header"><a href="adoption-single.php">Gordita</a></h5>
                     <!-- List -->
                     <ul class="list-unstyled">
                        <li><strong>Gender:</strong> Female</li>
                        <li><strong>Age:</strong> 1.5 years</li>
                        <li><strong>Breed:</strong> Mixed</li>
                     </ul>
                  </div>
               </div>
               <div class="col-md-12 mt-3">
                  <!-- Button -->
                  <div class="text-center">
                     <!-- Adopt info -->
                     <ul class="adopt-card-info list-unstyled">
                        <li ><i class="flaticon-syringe"></i>Vaccinated</li>
                        <li ><i class="flaticon-dog-4"></i>Friendly to other pets</li>
                     </ul>
                     <!-- button-->
                     <a href="adoption-single.php" class="btn btn-primary">More Info</a>
                  </div>
                  <!-- /text-center -->
               </div>
               <!-- /col-md -->
            </div>
            <!-- /adopt-card -->
         </div>
         <!-- /isotope-item-->
      </div>
      <!-- /col-lg- -->
      <!-- Adopt 8 -->
      <div class="cats col-lg-6">
         <div class="isotope-item">
            <div class="adopt-card res-margin row pattern2" style="background-color: #f4f4f4">
               <div class="col-md-5">
                  <!-- Image -->
                  <div class="adopt-image d-flex flex-wrap align-items-center ">
                     <a href="adoption-single.php">
                     <img src="img/adoption/adoption8.jpg" class="img-fluid" alt="">
                     </a>
                  </div>
               </div>
               <div class="col-md-7 res-margin">
                  <!-- Name -->
                  <div class="caption-adoption">
                     <h5 class="adoption-header"><a href="adoption-single.php">Mackie</a></h5>
                     <!-- List -->
                     <ul class="list-unstyled">
                        <li><strong>Gender:</strong> Male</li>
                        <li><strong>Age:</strong> 4 years</li>
                        <li><strong>Breed:</strong> Mixed</li>
                     </ul>
                  </div>
               </div>
               <div class="col-md-12 mt-3">
                  <!-- Button -->
                  <div class="text-center">
                     <!-- Adopt info -->
                     <ul class="adopt-card-info list-unstyled">
                        <li ><i class="flaticon-syringe"></i>Vaccinated</li>
                        <li ><i class="flaticon-dog-4"></i>Friendly to other pets</li>
                     </ul>
                     <!-- button-->
                     <a href="adoption-single.php" class="btn btn-primary">More Info</a>
                  </div>
                  <!-- /text-center -->
               </div>
               <!-- /col-md -->
            </div>
            <!-- /adopt-card -->
         </div>
         <!-- /isotope-item-->
      </div>
      <!-- /col-lg- -->
   </div>
   <!-- /gallery-isotope-->
	    <div class="col-md-12 mt-5">
		   <!-- pagination -->
		   <nav aria-label="pagination">
			  <ul class="pagination">
				 <li class="page-item"><a class="page-link active" href="#">1</a></li>
				 <li class="page-item"><a class="page-link" href="#">2</a></li>
				 <li class="page-item"><a class="page-link" href="#">3</a></li>
				 <li class="page-item"><a class="page-link" href="#">Next</a></li>
			  </ul>
		   </nav>
		   <!-- /nav -->
		</div>
		<!-- /col-md -->
</div>
<!-- /page --><!-- ==== Newsletter - call to action ==== -->

<!--/container-fluid-->
@stop
