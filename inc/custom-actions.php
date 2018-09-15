<?php 

function setup_particles() { ?>

<script>
jQuery(document).ready(function($) {

    particlesJS.load( 'home-hero-particles', 'wp-content/themes/browniandev/js/particles.json', function() {
        console.log( 'callback - particles.js config loaded' );
    });

});

</script>
<?php 
} 
add_action( 'setup_particles', 'setup_particles' );