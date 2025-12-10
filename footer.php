<footer>
  <div class="footer-area">
    <p >@<?php echo date('Y'); ?> <?php bloginfo('name'); ?>Gibble</p>

  </div>
</footer>
<?php wp_footer(); ?>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    const hamburger = document.getElementById('hamburger');
    const nav = document.getElementById('nav');

    hamburger.addEventListener('click', () => {
      nav.classList.toggle('open');
    });
  });
</script>

</body>
</html>
