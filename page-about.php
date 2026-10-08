<?php get_header(); ?>

<section class="page-hero">
    <div class="container">
        <span class="page-hero__label">ABOUT US</span>
        <h1 class="page-hero__title">A clinic where pets are treated like family</h1>
        <p class="page-hero__text">Labka Vet is a small clinic in Bratislava for dogs, cats and small pets. We keep visits unhurried and explain everything in plain words.</p>
    </div>
</section>

<section class="story">
    <div class="container story__inner">
        <div class="story__content">
            <span class="story__label">OUR STORY</span>
            <h2 class="story__title">Why we opened Labka Vet</h2>
            <p>[CLINIC STORY: who founded the clinic, in what year and why.]</p>
            <p>A vet visit is stressful for the animal and for the owner. So we built the clinic around calm: quiet rooms, enough time for each appointment and a clear plan at the end of every visit.</p>
            <a href="<?php echo home_url('/our-team/'); ?>" class="btn btn--secondary">Meet the team</a>
        </div>

        <img class="story__image" src="<?php echo get_template_directory_uri(); ?>/assets/images/about-cat.png" alt="Vet examining a cat">
    </div>
</section>

<section class="promises">
    <div class="container">
        <h2 class="promises__title">Four things we promise every owner</h2>

        <div class="promises__grid">
            <div class="promise-card">
                <h3>Separate waiting areas</h3>
                <p>Dogs and cats wait apart, so nervous animals stay calmer before the exam.</p>
            </div>

            <div class="promise-card">
                <h3>Prices before treatment</h3>
                <p>You see the cost and approve the plan before we start anything.</p>
            </div>

            <div class="promise-card">
                <h3>In-house laboratory</h3>
                <p>Blood and urine tests are done at the clinic, with most results the same day.</p>
            </div>

            <div class="promise-card">
                <h3>Follow-up by phone</h3>
                <p>After surgery we call to check how your pet is recovering at home.</p>
            </div>
        </div>
    </div>
</section>

<section class="steps">
    <div class="container">
        <h2 class="steps__title">What happens when you come in</h2>

        <div class="steps__grid">
            <div class="step">
                <span class="step__number">1</span>
                <h3>Book a time</h3>
                <p>Call us or send the form. We confirm the appointment by phone.</p>
            </div>

            <div class="step">
                <span class="step__number">2</span>
                <h3>Exam</h3>
                <p>The vet examines your pet and asks about food, habits and symptoms.</p>
            </div>

            <div class="step">
                <span class="step__number">3</span>
                <h3>Plan and price</h3>
                <p>We explain what we found, what we recommend and what it costs.</p>
            </div>

            <div class="step">
                <span class="step__number">4</span>
                <h3>Aftercare</h3>
                <p>You leave with written instructions and a number to call with questions.</p>
            </div>
        </div>
    </div>
</section>

<section class="about-cta">
    <div class="container about-cta__inner">
        <div>
            <h2 class="about-cta__title">Come and see the clinic</h2>
            <p class="about-cta__text">Book a first check-up and meet the vet who will look after your pet.</p>
        </div>

        <a href="<?php echo home_url('/contact/'); ?>" class="about-cta__button">Book appointment</a>
    </div>
</section>

<?php get_footer(); ?>