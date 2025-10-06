  <!-- FOOTER -->

  <?php
  require "header.php";
  ?>
  <footer class="container">
    <p class="float-end"><a href="#">Back to top</a></p>
    <p>&copy; 2017–2025 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>

    <div>
      <div class="col-md-4"></div>
      <div class="col-md-4"></div>
      <div class="col-md-4">
        <h5>Navigation</h5>
        <ul class="list-unstyled text-small">
        <?php  
        echo nav_menu(); 
        ?>
        </ul>
      </div>
    </div>
  </footer>
</main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" ></script>
  </body>
</html>