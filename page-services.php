<?php get_header(); ?>

<section class="page-hero">
    <div class="container">
        <span class="page-hero__label">SERVICES</span>
        <h1 class="page-hero__title">Care for every stage of your pet's life</h1>
        <p class="page-hero__text">From the first puppy visit to care in old age. Each service starts with an exam and a clear explanation of what your pet needs.</p>
    </div>
</section>

<section class="service-list">
    <div class="container">

        <article class="service-row">
            <div class="service-row__main">
                <h2>General check-ups</h2>
                <p>Routine exams that catch problems before they become serious.</p>
            </div>

            <ul class="service-row__items">
                <li>Full physical exam</li>
                <li>Weight and diet review</li>
                <li>Advice on parasites and prevention</li>
            </ul>

            <div class="service-row__price">
                <span>Price from</span>
                <strong>[PRICE] €</strong>
                <a href="<?php echo home_url('/contact/'); ?>" class="btn btn--primary">Book</a>
            </div>
        </article>

        <article class="service-row">
            <div class="service-row__main">
                <h2>Vaccinations</h2>
                <p>A vaccination plan built around your pet's age and lifestyle.</p>
            </div>

            <ul class="service-row__items">
                <li>Puppy and kitten courses</li>
                <li>Yearly boosters</li>
                <li>Pet passport and microchip</li>
            </ul>

            <div class="service-row__price">
                <span>Price from</span>
                <strong>[PRICE] €</strong>
                <a href="<?php echo home_url('/contact/'); ?>" class="btn btn--primary">Book</a>
            </div>
        </article>

        <article class="service-row">
            <div class="service-row__main">
                <h2>Dental care</h2>
                <p>Cleaning and treatment for healthy teeth and fresh breath.</p>
            </div>

            <ul class="service-row__items">
                <li>Dental exam</li>
                <li>Scale and polish under anaesthesia</li>
                <li>Extractions when needed</li>
            </ul>

            <div class="service-row__price">
                <span>Price from</span>
                <strong>[PRICE] €</strong>
                <a href="<?php echo home_url('/contact/'); ?>" class="btn btn--primary">Book</a>
            </div>
        </article>

        <article class="service-row">
            <div class="service-row__main">
                <h2>Surgery</h2>
                <p>Planned operations with careful pain control and aftercare.</p>
            </div>

            <ul class="service-row__items">
                <li>Neutering and spaying</li>
                <li>Soft-tissue surgery</li>
                <li>Follow-up call after the operation</li>
            </ul>

            <div class="service-row__price">
                <span>Price from</span>
                <strong>[PRICE] €</strong>
                <a href="<?php echo home_url('/contact/'); ?>" class="btn btn--primary">Book</a>
            </div>
        </article>

        <article class="service-row service-row--accent">
            <div class="service-row__main">
                <h2>Emergency care</h2>
                <p>Urgent help when it cannot wait until the next free slot. Call first, so we can prepare before you arrive.</p>
            </div>

            <a href="<?php echo home_url('/contact/'); ?>" class="service-row__call">Call [PHONE]</a>
        </article>

        <p class="service-list__note">Prices are a starting point. The final cost depends on your pet's size and condition, and we always confirm it with you before treatment.</p>

    </div>
</section>

<section class="services-cta">
    <div class="container services-cta__inner">
        <div>
            <h2 class="services-cta__title">Not sure which service you need?</h2>
            <p class="services-cta__text">Describe the problem and we will suggest the right appointment.</p>
        </div>

        <a href="<?php echo home_url('/contact/'); ?>" class="services-cta__button">Book appointment</a>
    </div>
</section>

<?php get_footer(); ?>