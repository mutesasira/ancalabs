<?= $this->extend("layout/master"); ?>
<?= $this->section("content"); ?>

<div class="container">
    <span class="d-none alert alert-success mb-3" id="res_message"></span>
    <h1 class="text-center text-4xl pb-8 font-sans text-green-600"> Hotel Booking</h1>

    <form class="w-full px-32">
    <div class="flex flex-wrap -mx-3 mb-6">
      <div class="w-full md:w-1/2 px-3">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
          Hotel
        </label>
        <input class="appearance-none block w-full  text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="">
      </div>
      <div class="w-full md:w-1/2 px-3">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
          Arrival date
        </label>
        <input class="appearance-none block w-full text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="">
      </div>
    </div>
    <div class="flex flex-wrap -mx-3 mb-6">
      <div class="w-full md:w-1/2 px-3">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
          Departure Date
        </label>
        <input class="appearance-none block w-full text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="checkbox" placeholder="">
      </div>
      <div class="w-full md:w-1/2 px-3">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
          Booking Status
        </label>
        <input class="appearance-none block w-full text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="">
      </div>
    </div>
    <div class="flex flex-wrap -mx-3 mb-6">
      <div class="w-full md:w-1/2 px-3">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
          Booking
        </label>
        <input class="appearance-none block w-full text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="file" placeholder="">
      </div>
    </div>
      
</div>
<div class="flex items-center justify-between px-32">
  <a href="lab-booking"class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button" tabindex="-1" role="button" aria-disabled="true">Back</a>

  <a href="travel-details"class="bg-green-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button" tabindex="-1" role="button" aria-disabled="true">Continue</a>

</div>
</div>
</form>
</div>

<script>

</script>
<?= $this->endSection(); ?>