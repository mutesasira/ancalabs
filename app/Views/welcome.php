<?= $this->extend("layout/master"); ?>
<?= $this->section("content");?>

<div class="container content-area">
    <h1 class="content-head">Welcome to ANCA Biotech Laboratory</h1>
<ul class="nav nav-tabs nav-fill" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <a class="nav-link active" id="travelers-tab" data-bs-toggle="tab" href="#travelers" role="tab" aria-controls="travelers" aria-selected="true">Travelers</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" id="non-travelers-tab" data-bs-toggle="tab" href="#non-travelers" role="tab" aria-controls="non-travelers" aria-selected="false">Non-Travelers</a>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="travelers" role="tabpanel" aria-labelledby="travelers-tab">
        <h1>Are you traveling soon?</h1>

        <p>Due to the ongoing COVID-19 Pandemic and emergence of COVID-19 Variance, Government of Uganda through the Ministry of Health has put in place measures to control further spread of COVID-19 to anyone while in Uganda. </p>

        <p>As you plan to travel to Uganda, the followings are required for you to enter in the country.</p>

        <ol>
            <li>All Travellers intending to travel to Uganda shall pre-register on this platform for pre-approvals and prior planning for on-arrival COVID-19 testing at the airport</li>
            <li>All Travelers arriving at the Airport shall be re-tested regardless of a negative test result done from originating country(ies).</li>
            <li>All arriving travellers shall take madatory one Week Quarantine at designated Hotels at their own costs.</li>
        </ol>

        <p>Please refer to our official Measures <a href="#">Here</a></p>

        <p>If you are a returning traveller, <a href="#">Login</a> to submit your details. For new travellers, <a href="clients/create-client">Register</a> to proceed.</p>

        <a href="clients/create-client" class="btn btn-primary btn-lg" tabindex="-1" role="button" aria-disabled="true">Get Started</a>
  </div>
  <div class="tab-pane fade" id="non-travelers" role="tabpanel" aria-labelledby="travelers-tab">Two</div>
</div>
  </li>
</ul>


</div>



<?=$this->endSection()?>

        
