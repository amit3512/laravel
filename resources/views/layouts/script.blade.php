<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  <!-- Jarallax -->
  <script src="/jarallax/dist/jarallax.min.js"></script>
  <!-- Include it if you want to parallax any element -->
  <!-- Jarallax -->
  <script src="https://unpkg.com/jarallax@1.10/dist/jarallax.min.js"></script>
  <script src="https://unpkg.com/jarallax@1.10/dist/jarallax-element.min.js"></script>

  <script src="/js/stellarnav.min.js"></script>
  <script src="/js/js/owlcarousel/owl.carousel.min.js"></script>
  <script src="/js/plugins.js"></script>
  <!-- cdnjs -->
  <!-- <script src="js/jquery.lazy.min.js"> </script> -->
  <script src="https://code.jquery.com/jquery-migrate-3.0.1.js"></script>
  <!-- for wow js -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
  <!-- <script type="text/javascript" src="http://www.exchange-rates.org/GetCustomContent.aspx?sid=RT000BSCS&amp;type=RatesTable&amp;stk=0TRN5X56O5" charset="utf-8">
</script> -->
  <script>
    $('.additional-menu').on('click', 'li', function() {
      $(this).addClass('active').siblings().removeClass('active');
    });
  </script>
  <script>
    $(document).ready(function() {

      var counters = $(".count");
      var countersQuantity = counters.length;
      var counter = [];

      for (i = 0; i < countersQuantity; i++) {
        counter[i] = parseInt(counters[i].innerHTML);
      }

      var count = function(start, value, id) {
        var localStart = start;
        setInterval(function() {
          if (localStart < value) {
            localStart++;
            counters[id].innerHTML = localStart;
          }
        }, 40);
      }

      for (j = 0; j < countersQuantity; j++) {
        count(0, counter[j], j);
      }
    });
  </script>