@extends("layouts.spacedcustomlayout")

@section('body')

<div class="main-container">
	
  <!-- Page Banner -->
  <div class="page-banner">
    <!-- Container -->
    <div class="container">
      <h3>Frequently Asked Questions</h3>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                  <li class="breadcrumb-item active">Faqs</li>
      </ol>
    </div><!-- Container /- -->
  </div><!-- Page Banner /- -->

  <main class="site-main">
    
    <!-- Accordian And Tabs Section -->
    <div class="accordian-tab-section">
      <!-- Container -->
      <div class="container">
        <!-- Row -->
        <div class="row">
          <div class="col-md-12">
            <div id="b-accordion" role="tablist" class="b-accordians-block">
              <div class="card">
                <div class="card-header" role="tab" id="headingOne">
                  <h5 class="mb-0">
                    <a class="collapsed" data-toggle="collapse" href="#unique-design" aria-expanded="true" aria-controls="unique-design">Is this backed by the SEC?</a>
                  </h5>
                </div>
                <div id="unique-design" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#b-accordion">
                  <div class="card-body">
                    <p>No NM company is required to be a part of the SEC. We aren’t an investment company. We provide financial tools and software on how to invest your money. You aren’t investing IN the company but through the company.</p>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" role="tab" id="headingTwo">
                  <h5 class="mb-0">
                    <a data-toggle="collapse" href="#layout" aria-expanded="false" aria-controls="layout">How many reps?</a>
                  </h5>
                </div>
                <div id="layout" class="collapse " role="tabpanel" aria-labelledby="headingTwo" data-parent="#b-accordion">
                  <div class="card-body">
                    <p>Around 15,000 right now.</p>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" role="tab" id="headingThree">
                  <h5 class="mb-0">
                    <a class="collapsed" data-toggle="collapse" href="#bootstrap" aria-expanded="false" aria-controls="bootstrap">How long has this company been publicly traded?</a>
                  </h5>
                </div>
                <div id="bootstrap" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#b-accordion">
                  <div class="card-body">
                                          <p>5 years! Complete transparency required as they have share holders. A+ Rating with the Better Business Bureau.</p>
                                      </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" role="tab" id="headingFour">
                  <h5 class="mb-0">
                    <a class="collapsed" data-toggle="collapse" href="#uf-admin" aria-expanded="false" aria-controls="uf-admin">How many contracts sold?</a>
                  </h5>
                </div>
                <div id="uf-admin" class="collapse" role="tabpanel" aria-labelledby="headingFour" data-parent="#b-accordion">
                  <div class="card-body">
                    <p>Around 1,500 since we launched crypto in December, 2017. True ground floor.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div><!-- Row /- -->
      </div><!-- Container /- -->
    </div><!-- Accordian And Tabs Section -->
    
  </main>
  
</div>

@endsection()
