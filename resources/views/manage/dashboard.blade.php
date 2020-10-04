@extends('layouts.manage')

@section('content')
<div class="alert alert-info">Привет, <strong>{{ Auth::user()->name }}</strong>!</div>
<div class="container">
    <div class="row mt-3 pt-3" style="background-color: #eeeeee">
      <div class="col-md-6">
        <!-- Card group -->
        <div class="card-group">

          <!-- Card -->
          <div class="card mb-4">

            <!-- Card content -->
            <div class="card-body">

              <!-- Title -->
              <h6 class="card-title">Потребители днес:</h6>
              <!-- Text -->
              
              
              <p class="card-text blue-text"><i class="fas fa-user fa-2x"></i><span class="ml-2" style="font-size: 30px;">20</span></p>

            </div>
            <!-- Card content -->

          </div>
          <!-- Card -->

          <!-- Card -->
          <div class="card mb-4">

            <!-- Card content -->
            <div class="card-body">
              <!-- Title -->
              <h6 class="card-title">Потребители изобщо: </h6>
              <!-- Text -->
              <p class="card-text red-text"><i class="fas fa-user fa-2x"></i></i><span class="ml-2" style="font-size: 30px;">60</span></p>
            </div>
            <!-- Card content -->

          </div>
          <!-- Card -->

        </div>
        <!-- Card group -->
      </div>

      

      <div class="col-md-6">
          <!-- Card group -->
          <div class="card-group">
  
            <!-- Card -->
            <div class="card mb-4">
  
              <!-- Card content -->
              <div class="card-body">
  
                <!-- Title -->
                <h6 class="card-title">Изпълнени заявки:</h6>
                <!-- Text -->
                
                
                <p class="card-text green-text"><i class="fas fa-plus-square fa-2x"></i><span class="ml-2" style="font-size: 30px;">100</span></p>
  
              </div>
              <!-- Card content -->
  
            </div>
            <!-- Card -->
  
            <!-- Card -->
            <div class="card mb-4">
  
              <!-- Card content -->
              <div class="card-body">
                <!-- Title -->
                <h6 class="card-title">Оставащи заявки:</h6>
                <!-- Text -->
                <p class="card-text red-text"><i class="fas fa-plus-square fa-2x"></i><span class="ml-2" style="font-size: 30px;">36</span></p>
              </div>
              <!-- Card content -->
  
            </div>
            <!-- Card -->
  
          </div>
          <!-- Card group -->
        </div>
    </div>
  </div>
@endsection
