<?php

/*
* Template Name: About Us
*/

get_header();
?>

<div class="callout">
    <div class="row column text-center">
        <h1>About Us</h1>
    </div>
</div>

<div class="row" id="content">
    <div class="medium-12 columns">
        <p>Pro Headphones are the market leading manufacturers of headphones, currently available in over 25 countries. Our products have been used by professionals and enthusiasts for over 10 years.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vel maximus lorem, nec dignissim lectus. Quisque tempor odio facilisis ligula varius condimentum. Mauris nec magna fermentum, rutrum ipsum ut, consectetur neque. Phasellus ultrices nibh et lectus ultricies, in vestibulum tortor vulputate. Donec sagittis ligula purus. Pellentesque convallis scelerisque ipsum, condimentum facilisis ex suscipit vel. Fusce sed augue vel ligula sagittis rutrum nec ut tellus.</p>
        <p>Phasellus vel laoreet massa. Aliquam aliquet mauris nec lectus blandit, convallis tristique mauris tincidunt. Etiam nec dolor nunc. Aliquam facilisis quis nulla sit amet euismod. Nunc vulputate tincidunt interdum. Nunc maximus tristique efficitur. Morbi lacinia augue tortor, non tempor risus dapibus non. Vestibulum elementum diam quis convallis tincidunt. Quisque aliquam enim vel elit imperdiet iaculis. Fusce eget metus porta, sodales ante eget, vulputate nisi. Suspendisse sagittis purus ac purus vestibulum, et ullamcorper magna placerat. Etiam neque lacus, dignissim sit amet magna sit amet, hendrerit auctor velit. Nulla vitae tellus fermentum, pretium leo nec, mattis diam.</p>
    </div>
</div>

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
