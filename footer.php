<?php
/**
 * Footer del tema.
 * @package motevedra
 */
?>
<script>
(function(a, m, o, c, r, m) {
    a[m] = {
        id: "1016053",
        hash: "90e4cfa51edcc361a03cf7dac0131d8e6e740fb56940d5f873f50b5802820376",
        locale: "es",
        setMeta: function(p) {
            this.params = (this.params || []).concat([p])
        }
    };
    a[o] = a[o] || function() {
        (a[o].q = a[o].q || []).push(arguments)
    };
    var d = a.document,
        s = d.createElement('script');
    s.async = true;
    s.id = m + '_script';
    s.src = 'https://gso.kommo.com/js/button.js';
    d.head && d.head.appendChild(s)
}(window, 0, 'crmPlugin', 0, 0, 'crm_plugin'));
</script>


</body>

<?php 
    if(wp_is_mobile()) {
      wp_enqueue_style('a-btn-imobile');
      wp_enqueue_script('a-btn-imobile');
    }
?>

<?php  get_template_part('atoms/a-btn-top/a-btn-top'); ?>
<footer class="footer">
    <?php  get_template_part( 'organism/o-footer/o-footer', null, 
        array( 
            'class' => 'o-footer' 
        ) ); ?>
</footer>

<?php wp_footer(); ?>