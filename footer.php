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
<script>
document.addEventListener('DOMContentLoaded', () => {
    const slider = document.querySelector('.achievements-slider');
    const items  = document.querySelectorAll('.achievements-item');
    const dots   = document.querySelectorAll('.achievements-dots .dot');

    if (!slider || items.length === 0) return;

    slider.addEventListener('scroll', () => {
        const itemWidth = items[0].offsetWidth + 40; // gap分
        const index = Math.round(slider.scrollLeft / itemWidth);

        dots.forEach(dot => dot.classList.remove('active'));
        if (dots[index]) {
            dots[index].classList.add('active');
        }
    });
});
</script>

</body>
</html>
