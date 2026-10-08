<?php get_header(); ?>

<section class="page-hero">
    <div class="container">
        <nav class="breadcrumbs">
            <a href="<?php echo home_url('/'); ?>">Home</a>
            <span>/</span>
            <span class="breadcrumbs__current">Contact</span>
        </nav>

        <span class="page-hero__label">CONTACT</span>
        <h1 class="page-hero__title">Book a visit or ask a question</h1>
        <p class="page-hero__text">Leave your details and a convenient day. We confirm the time by phone.</p>
    </div>
</section>

<section class="contact">
    <div class="container contact__inner">

        <div class="contact__info">
            <div class="contact-card">
                <div class="contact-card__row">
                    <span class="contact-card__icon"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M6 3h3l1.5 4.5-2 1.5a11 11 0 0 0 5.5 5.5l1.5-2L20 14v3a3 3 0 0 1-3 3C10 20 4 14 4 7a3 3 0 0 1 2-4z"/></svg></span>
                    <div>
                        <span class="contact-card__label">Phone</span>
                        <strong class="contact-card__value">+421 900 000 000</strong>
                    </div>
                </div>
                <div class="contact-card__row">
                    <span class="contact-card__icon"><svg viewBox="0 0 24 24" aria-hidden="true"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="M3.5 7l8.5 6 8.5-6"/></svg></span>
                    <div>
                        <span class="contact-card__label">Email</span>
                        <strong class="contact-card__value">labkaVet@gmail.com</strong>
                    </div>
                </div>
                <div class="contact-card__row">
                    <span class="contact-card__icon"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 21s-6.5-5.6-6.5-10.5a6.5 6.5 0 0 1 13 0C18.5 15.4 12 21 12 21z"/><circle cx="12" cy="10.5" r="2.5"/></svg></span>
                    <div>
                        <span class="contact-card__label">Address</span>
                        <strong class="contact-card__value">Drienova 1H, Bratislava</strong>
                    </div>
                </div>
            </div>

            <div class="contact-card">
                <h2 class="contact-card__title">Opening hours</h2>

                <div class="hours__row">
                    <span>Monday – Saturday</span>
                    <strong>8:00–18:00</strong>
                </div>

                <div class="hours__row">
                    <span>Sunday</span>
                    <strong>Closed</strong>
                </div>
            </div>
        </div>

        <form id="appointment-form" class="appointment__form" method="post" action="<?php echo esc_url(admin_url('admin-post.php')); ?>">

            <h2 class="contact__form-title">Request an appointment</h2>

            <?php if (isset($_GET['sent'])) : ?>
                <p class="contact__message">Thank you! We will call you back to confirm the time.</p>
            <?php endif; ?>

            <input type="hidden" name="action" value="labka_appointment">
            <?php wp_nonce_field('labka_appointment'); ?>

            <div class="appointment__row">
                <div class="form-field">
                    <label for="name">Your name</label>
                    <input type="text" id="name" name="name" required>
                </div>

                <div class="form-field">
                    <label for="phone">Phone</label>
                    <input type="tel" id="phone" name="phone" required>
                </div>
            </div>

            <div class="appointment__row">
                <div class="form-field">
                    <label for="pet">Pet</label>
                    <div class="select-wrap">
                        <select id="pet" name="pet">
                            <option>Dog</option>
                            <option>Cat</option>
                            <option>Other</option>
                        </select>
                    </div>
                </div>

                <div class="form-field">
                    <label for="date">Preferred day</label>
                    <input type="date" id="date" name="date">
                </div>
            </div>

            <div class="form-field">
                <label for="message">What is the visit about?</label>
                <textarea id="message" name="message" rows="4"></textarea>
            </div>

            <button type="submit" class="appointment__submit">Request appointment</button>

            <p class="contact__note">We use your details only to arrange the appointment.</p>
        </form>

    </div>
</section>

<section class="find-us">
    <div class="container">
        <span class="find-us__label">FIND US</span>
        <h2 class="find-us__title">How to get to the clinic</h2>

        <div class="find-us__map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2661.440206020405!2d17.143519076477478!3d48.15959654962787!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476c8ecdf4d24b99%3A0x44832da77d3fc9ee!2sDrie%C5%88ov%C3%A1%201h%2C%20821%2001%20Bratislava!5e0!3m2!1sru!2ssk!4v1791461492755!5m2!1sru!2ssk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin"></iframe>
        </div>

        <div class="find-us__grid">
            <div class="find-us__card">
                <h3>By car</h3>
                <p>Free parking for clients in the courtyard behind the clinic. Enter from the side street and look for the green Labka Vet sign.</p>
            </div>

            <div class="find-us__card">
                <h3>By public transport</h3>
                <p>The nearest tram and bus stop is a 3-minute walk away. Pets travel free on Bratislava public transport if they are on a lead or in a carrier.</p>
            </div>

            <div class="find-us__card">
                <h3>Emergency</h3>
                <p>Call +421 900 000 000 before you leave home, so we can prepare.</p>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>