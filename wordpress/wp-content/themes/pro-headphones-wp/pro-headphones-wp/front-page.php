<?php

get_header();
?>

<section id="range">
    <div class="row">
    <div class="large-12 columns">
            <h3>Next Generation Headphone Range:</h3><hr>
        </div>
        <div class="large-4 columns">
            <img src="<?php bloginfo('template_directory'); ?>/images/1.jpg" alt="">
            <p>Starter</p>
            <p>Great value budget headphones</p><hr>
            <p>$69</p>
        </div>
        <div class="large-4 columns">
            <img src="<?php bloginfo('template_directory'); ?>/images/2.jpg" alt="">
            <p>Pro</p>
            <p>Professional headphones for the serious</p><hr>
            <p>$89</p>
        </div>
        <div class="large-4 columns">
            <img src="<?php bloginfo('template_directory'); ?>/images/3.jpg" alt="">
            <p>Elite</p>
            <p>When only the best will do</p><hr>
            <p>$119</p>
        </div>
    </div>
</section>

<section id="newsletter">
    <div class="row">
        <div class="large-6 columns">
            <p>Sign up to our newsletter</p>
        </div>
        <div class="large-6 columns">
            <form>
                <div class="row">
                    <div class="small-3 columns">
                        <label for="middle-label" class="text-right middle">Email</label>
                    </div>
                    <div class="small-9 columns">
                        <input type="text" id="middle-label" placeholder="example@example.com">
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

<?php

get_footer();
