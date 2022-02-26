<footer class="container-fluid bg-dark text-center py-5 text-gray">
  <div class="mb-3 py-3">

    <a class="text-decoration-none text-gray " href="https://www.youtube.com/channel/UCYZ2YcGbV97dfbBA20QZwrg" target="_blank">Youtube</a>
    <a class="text-decoration-none text-gray mx-3" href="" target="_blank">Twitter</a>
    <a class="text-decoration-none text-gray " href="https://www.facebook.com/cafeconlechefb" target="_blank">Facebook</a>

  </div>
  <p class="m-0 py-3">&copy;<span id="year"></span> 카페콘레체</p>
</footer>

<script>
  const yearElement = document.querySelector('#year');
  const year = new Date().getFullYear();
  yearElement.textContent = year;
</script>


<?php wp_footer(); ?>

</body>
</html>