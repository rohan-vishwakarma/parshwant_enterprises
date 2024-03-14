@extends('Layouts.master')
@section('title')
    Dashboard
@endsection

@section('content')


<main class="container" style="margin-top: 5%">

  
</main>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<main >

    @include('Layouts.sidebar')
    <div class="d-flex flex-column align-items-stretch flex-shrink-0 " style="width: 80%;">
      <div class="container">

        <h2 class="text-center mt-2" style="color: orange;font-family: fantasy;">
          <i class="fas fa-credit-card" style="color: #646968;margin-right: 23px;"></i>
          DASHBOARD
      </h2>
        <div class="row">
            <div class="col-sm-4">
              <div class="card">
                <div class="card-body">
                  <div>
                    <i class="fa fa-user" style="    color: salmon;font-size: 41px;" aria-hidden="true"></i>
                  </div>
                  <h5 class="card-title">{{$customerCount }}  Customers</h5>
                  <p class="card-text"></p>
                  <a href="/customers" class="btn btn-primary">View</a>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="card">
                <div class="card-body">
                  <div>
                    <i class="fa fa-file-invoice" style="    color: salmon;font-size: 41px;" aria-hidden="true"></i>
                  </div>
                  <h5 class="card-title">{{$invoiceCount}} Invoices</h5>
                  <p class="card-text"></p>
                  <a href="/invoices" class="btn btn-primary">View</a>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
  
  </main>



    
@endsection