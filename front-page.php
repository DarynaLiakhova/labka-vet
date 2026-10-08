<?php get_header(); ?>

<main>
    <section class="hero">
        <div class="container hero__inner">

            <div class="hero__content">
                <span class="hero__eyebrow">
                    CARE FOR DOGS, CATS AND SMALL PETS
                </span>

                <h1 class="hero__title">
                    Healthy pets,<br>
                    calmer owners.
                </h1>

                <p class="hero__text">
                    Check-ups, vaccinations, dental care and surgery in one clinic.
                    We explain every step in plain words, so you always know
                    what happens to your pet and why.
                </p>

                <div class="hero__actions">
                    <a href="http://labka-vet.local/#contact" class="btn btn--primary">
                        Book appointment
                    </a>

                    <a href="#services" class="btn btn--secondary">
                        Our services
                    </a>
                </div>
            </div>

            <div class="hero__media">
                <img
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/hero-vet-dog.png"
                    alt="Veterinarian with a dog"
                >
            </div>

        </div>
    </section>
    <section class="services" id="services">
    <div class="container">

        <div class="services__header">
            <div>
                <span class="section-label">SERVICES</span>
                <h2>What we help with</h2>
            </div>

            <a href="#" class="services__link">
                All services →
            </a>
        </div>

        <div class="services__grid">

            <article class="service-card">
                <div class="service-card__icon">✓</div>
                <h3>General check-ups</h3>
                <p>
                    Routine exams that catch problems before they become serious.
                </p>
                <a href="#">Read more →</a>
            </article>

            <article class="service-card">
                <div class="service-card__icon">✚</div>
                <h3>Vaccinations</h3>
                <p>
                    A vaccination plan built around your pet's age and lifestyle.
                </p>
                <a href="#">Read more →</a>
            </article>

            <article class="service-card">
                <div class="service-card__icon">☺</div>
                <h3>Dental care</h3>
                <p>
                    Cleaning and treatment for healthy teeth and fresh breath.
                </p>
                <a href="#">Read more →</a>
            </article>

            <article class="service-card">
                <div class="service-card__icon">✚</div>
                <h3>Surgery</h3>
                <p>
                    Planned operations with careful pain control and aftercare.
                </p>
                <a href="#">Read more →</a>
            </article>

            <article class="service-card service-card--accent">
                <div class="service-card__icon">◷</div>
                <h3>Emergency care</h3>
                <p>
                    Urgent help when it cannot wait until the next free slot.
                </p>
                <a href="#">Call the clinic →</a>
            </article>

        </div>
    </div>
    </section>
    <section class="about" id="about">
    <div class="container about__inner">

        <div class="about__media">
            <img
                src="<?php echo get_template_directory_uri(); ?>/assets/images/about-cat.png"
                alt="Veterinarian examining a cat"
            >
        </div>

        <div class="about__content">
            <span class="section-label">ABOUT US</span>

            <h2>A clinic where pets are treated like family</h2>

            <p>
                We keep appointments unhurried and the waiting room quiet.
                Every visit ends with a clear plan: what we found,
                what we recommend and what it will cost.
            </p>

            <div class="about__features">

                <div class="about-feature">
                    <h3>Separate waiting areas</h3>
                    <p>Dogs and cats wait apart.</p>
                </div>

                <div class="about-feature">
                    <h3>Prices before treatment</h3>
                    <p>You approve the plan first.</p>
                </div>

                <div class="about-feature">
                    <h3>In-house laboratory</h3>
                    <p>Most results the same day.</p>
                </div>

                <div class="about-feature">
                    <h3>Follow-up by phone</h3>
                    <p>We check in after surgery.</p>
                </div>

            </div>

            <a href="#">More about the clinic →</a>
        </div>

    </div>
</section>
<section class="team" id="team">
    <div class="container">

        <div class="team__header">
            <span class="section-label">OUR TEAM</span>

            <h2 class="team__title">
                The people your pet will meet
            </h2>

            <p class="team__text">
                Vets and nurses who take time to listen to you and to your pet.
            </p>
        </div>

        <div class="team__grid">

            <article class="team-card">
                <img
                    class="team-card__image"
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/team-vet.png"
                    alt="Lead veterinarian"
                >

                <div class="team-card__content">
                    <h3 class="team-card__name">[Dr. Sofia Novak</h3>
                    <p class="team-card__role">Lead veterinarian</p>
                </div>
            </article>

            <article class="team-card">
                <img
                    class="team-card__image"
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/team-nurse.png"
                    alt="Veterinary surgeon"
                >

                <div class="team-card__content">
                    <h3 class="team-card__name">Dr. Martin Kováč</h3>
                    <p class="team-card__role">Veterinary surgeon</p>
                </div>
            </article>

            <article class="team-card">
                <img
                    class="team-card__image"
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/team-vet-doctor.png"
                    alt="Veterinary nurse"
                >

                <div class="team-card__content">
                    <h3 class="team-card__name">Emma Horváth</h3>
                    <p class="team-card__role">Veterinary nurse</p>
                </div>
            </article>

            <article class="team-card">
                <img
                    class="team-card__image"
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/team-reception.png"
                    alt="Reception and client care"
                >

                <div class="team-card__content">
                    <h3 class="team-card__name">Laura Bielik</h3>
                    <p class="team-card__role">Reception and client care</p>
                </div>
            </article>

        </div>

    </div>
</section>
<section class="ourBlog" id="blog">
    <div class="container">
        <div class="blog_header">
            <div class="blog__info">
                <span>Blog</span>
                <h1 class="blog__title">Advice from our vets</h1>
            </div>
            <a href="#" class="header__link">All articles → </a>
        </div>
        <div class="blog_grid">
            <article class="grid__news">
                <img
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/vacination_dog.png"
                        alt="Veterinarian with a dog"
                    >
                <div class="news__meta">
                    <span class="news__name">Vaccinations</span>
                    <span class="news__date">02/10/2025</span>
                </div>
                <h2 class="news__title">Puppy's first year: which vaccines and when</h2>
                <p class="news__text">A simple timeline from the first visit to the yearly booster.</p>
                <a href="#" class="news__link">Read article →</a>
            </article>
            <article class="grid__news">
                <img
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/teath_cats.png"
                        alt="Veterinarian with a dog"
                    >
                <div class="news__meta">
                    <span class="news__name">Dental care</span>
                    <span class="news__date">04/07/2025</span>
                </div>
                <h2 class="news__title">How to brush a cat's teeth without a fight</h2>
                <p class="news__text">Small steps that make brushing a calm part of the week.</p>
                <a href="#" class="news__link">Read article →</a>
            </article>
            <article class="grid__news">
                <img
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/puppy_needs.png"
                        alt="Veterinarian with a dog"
                    >
                <div class="news__meta">
                    <span class="news__name">Emergency</span>
                    <span class="news__date">11/12/2025</span>
                </div>
                <h2 class="news__title">Five signs your pet needs a vet todayn</h2>
                <p class="news__text">What can wait until morning and what should not.</p>
                <a href="#" class="news__link">Read article →</a>
            </article>
        </div>
    </div>
</section>
<section class="appointment" id="contact">
    <div class="container appointment__inner">

        <div class="appointment__info">
            <span class="appointment__label">
                BOOK APPOINTMENT
            </span>

            <h2 class="appointment__title">
                Tell us about your pet
                and we will call you
                back
            </h2>

            <p class="appointment__text">
                Leave your details and a convenient day.
                We confirm the time by phone.
            </p>

            <div class="appointment__contacts">
                <a href="tel:+421000000000">[PHONE]</a>

                <p>[STREET ADDRESS], Bratislava</p>

                <p>Mon–Sat · 8:00–18:00</p>
            </div>
        </div>


        <form class="appointment__form" action="#" method="post">

            <div class="appointment__row">

                <div class="form-field">
                    <label for="name">Your name</label>

                    <input
                        type="text"
                        id="name"
                        name="name"
                        required
                    >
                </div>

                <div class="form-field">
                    <label for="phone">Phone</label>

                    <input
                        type="tel"
                        id="phone"
                        name="phone"
                        required
                    >
                </div>

            </div>


            <div class="appointment__row">

                <div class="form-field">
                    <label for="pet">Pet</label>
                     <div class="select-wrap">
                        <select id="pet" name="pet">
                            <option value="dog">Dog</option>
                            <option value="cat">Cat</option>
                            <option value="small-pet">Small pet</option>
                        </select>
                    </div>
                </div>

                <div class="form-field">
                    <label for="preferred-day">
                        Preferred day
                    </label>

                    <input
                        type="date"
                        id="preferred-day"
                        name="preferred_day"
                    >
                </div>

            </div>


            <div class="form-field">
                <label for="message">
                    What is the visit about?
                </label>

                <textarea
                    id="message"
                    name="message"
                    rows="5"
                ></textarea>
            </div>


            <button
                type="submit"
                class="appointment__submit"
            >
                Request appointment
            </button>

        </form>

    </div>
</section>
</main>

<?php get_footer(); ?>