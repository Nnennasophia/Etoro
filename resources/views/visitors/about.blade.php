@extends("layouts.spacedcustomlayout")

@section("body")

<div class="main-container">
  <!-- Page Banner -->
        <div class="page-banner">
                <!-- Container -->
                <div class="container">
                    <h3>About</h3>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                        <li class="breadcrumb-item active">About</li>
                    </ol>
                </div><!-- Container /- -->
            </div><!-- Page Banner /- -->
<main class="site-main">	
        
  <!-- Services Section 9 -->
  <div class="services-section-9">
                <div class="container">
      <!-- Section Header -->
           <div class="section-header">
                        <h3 class="text-main">Welcome To 
{{$compd? $compd->Companyname: 'Coming soon'}}</h3>
                    </div><!-- Section Header /- -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="content-box">
              <!-- <h3>Profitable investment with LindOption</h3> -->
              <p>The Company's activities are closely related to the mining of various crypto-currencies for more than six years. Starting with Bitcoin, and ending with the most famous crypto-currencies, we constantly improve our business. The main currencies mined by the company are Litecoin, Ethereum, Dashcoin, and Bitcoin.
                 The major part of the mining goes for the first three currencies. Bitcoin has long been not the main mining currency, since the process requires more and more technical and production costs each time, and the amount of produced currency is getting smaller. Nevertheless, it is the most expensive and the most popular currency nowadays, that's why we keep producing it.
                 At the moment, we have created an investment program that provides investors with a business plan that allows them to earn due to the company's activities in the field of mining. We have a constant income, which allows us and our partners to constantly improve ourselves.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <img src="{{asset("en/assets/images/inv_img3.png")}}" alt="Image" />
                        </div>
                    </div>
                    
                </div>
            </div>
    <!-- Services Section 9 /- -->
    

            <div class="feature-section">
    <!-- Container -->
    <div class="container">
      <!-- Row -->
                <h1 class="text-center">HOW IT WORKS</h1>
      <div class="row">

        <div class="col-md-3 mb-5">
          <div class="my-color icon-content-box-0 text-center">
            <i class="fa fa-user-plus"></i>
            <h3>Sign Up</h3>
            <p>Simply fill the form provided when you click the sign up button and the far right top corner of the site page.</p>
          </div>
        </div>
        <div class="col-md-3 mb-5">
          <div class="my-color icon-content-box-0 text-center">
            <i class="fa fa-money"></i>
            <h3>Fund</h3>
            <p>Fund your account to begin your investment journey, do this by requesting for payment option from your account page, we currently support Western Union, MoneyGramm, Bank Wire, Bitcoin, Ethereum.</p>
          </div>
        </div>
        <div class="col-md-3 mt-0 mb-5">
          <div class="my-color icon-content-box-0 text-center">
            <i class="fa fa-pie-chart"></i>
            <h3>Earn</h3>
            <p>Over days, weeks, months, and even years there is no limit to our capabilities all you have to do is monitor the growth of your investment by login your profile on our website.</p>
          </div>
        </div>
                    <div class="col-md-3 mt-0 mb-5">
          <div class="my-color icon-content-box-0 text-center">
            <i class="fa fa-bank"></i>
            <h3>Withdraw</h3>
            <p>Withdrawal of profits are available weekly, monthly, and yearly. There are no time tables, you get your profits when you want. payments are sent to same detail investor made payment from when funding his/her account.</p>
          </div>
        </div>
      </div><!-- Row /- -->
    </div><!-- Container -->
  </div>
  <!-- Feature Section 1 /- -->
</main>

</div>

@endsection
