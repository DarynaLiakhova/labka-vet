<?php get_header(); ?>

<section class="page-hero">
    <div class="container">
        <span class="page-hero__label">OUR TEAM</span>
        <h1 class="page-hero__title">The people your pet will meet</h1>
        <p class="page-hero__text">Vets and nurses who take time to listen to you and to your pet.</p>
    </div>
</section>

<section class="team-list">
    <div class="container team-list__grid">

        <article class="member">
            <img class="member__image" src="<?php echo get_template_directory_uri(); ?>/assets/images/team-vet-doctor.png" alt="Lead veterinarian">

            <div class="member__content">
                <h2 class="member__name">[Vet name]</h2>
                <p class="member__role">Lead veterinarian</p>
                <p class="member__bio">[SHORT BIO: education, years in practice and what this person enjoys most about the work.]</p>

                <div class="member__tags">
                    <span>Internal medicine</span>
                    <span>Diagnostics</span>
                </div>
            </div>
        </article>

        <article class="member">
            <img class="member__image" src="<?php echo get_template_directory_uri(); ?>/assets/images/team-vet.png" alt="Veterinary surgeon">

            <div class="member__content">
                <h2 class="member__name">[Vet name]</h2>
                <p class="member__role">Veterinary surgeon</p>
                <p class="member__bio">[SHORT BIO: education, years in practice and what this person enjoys most about the work.]</p>

                <div class="member__tags">
                    <span>Surgery</span>
                    <span>Dental care</span>
                </div>
            </div>
        </article>

        <article class="member">
            <img class="member__image" src="<?php echo get_template_directory_uri(); ?>/assets/images/team-nurse.png" alt="Veterinary nurse">

            <div class="member__content">
                <h2 class="member__name">[Nurse name]</h2>
                <p class="member__role">Veterinary nurse</p>
                <p class="member__bio">[SHORT BIO: education, years in practice and what this person enjoys most about the work.]</p>

                <div class="member__tags">
                    <span>Aftercare</span>
                    <span>Laboratory</span>
                </div>
            </div>
        </article>

        <article class="member">
            <img class="member__image" src="<?php echo get_template_directory_uri(); ?>/assets/images/team-reception.png" alt="Reception and client care">

            <div class="member__content">
                <h2 class="member__name">[Name]</h2>
                <p class="member__role">Reception and client care</p>
                <p class="member__bio">[SHORT BIO: education, years in practice and what this person enjoys most about the work.]</p>

                <div class="member__tags">
                    <span>Appointments</span>
                    <span>Client questions</span>
                </div>
            </div>
        </article>

    </div>
</section>

<section class="team-cta">
    <div class="container team-cta__inner">
        <div>
            <h2 class="team-cta__title">Book a visit with our team</h2>
            <p class="team-cta__text">Tell us about your pet and we will match you with the right vet.</p>
        </div>

        <a href="<?php echo home_url('/contact/'); ?>" class="team-cta__button">Book appointment</a>
    </div>
</section>

<?php get_footer(); ?>