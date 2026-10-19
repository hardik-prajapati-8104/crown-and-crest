<?php
	include_once ('elements/header.php')
?>

    <main id="main">
      <section
        class="page-hero"
        style="
          --hero-img: url(https://images.unsplash.com/photo-1519167758481-83f550bb49b3?auto=format&fit=crop&w=1600&q=80);
        "
      >
        <div class="wrap">
          <div class="crumbs">
            <a href="index.php">Home</a><span>/</span
            ><span class="cur">Contact</span>
          </div>
          <h1>Contact Us</h1>
          <p>
            Tell us about your event. We typically reply within one working day.
          </p>
        </div>
      </section>
      <section class="section">
        <div class="wrap">
          <div class="contact-grid">
            <div>
              <span class="eyebrow">Contact</span>
              <h2 style="margin-bottom: 28px">
                Let's plan something exceptional
              </h2>
              <div class="info-list">
                <div class="info" data-aos="fade-up">
                  <div class="icon-box">
                    <svg
                      viewBox="0 0 24 24"
                      fill="none"
                      stroke="currentColor"
                      stroke-width="1.6"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      aria-hidden="true"
                    >
                      <path
                        d="M12 21.5s7-6.2 7-12a7 7 0 0 0-14 0c0 5.8 7 12 7 12z"
                      />
                      <circle cx="12" cy="9.5" r="2.5" />
                    </svg>
                  </div>
                  <div>
                    <h4>Visit Our Office</h4>
                    <p>
                      Office 203-258, Hamad Mohammed Abdulrahman Al Bahar
                      Building, Al Khabaisi, Dubai, UAE
                    </p>
                  </div>
                </div>
                <div class="info" data-aos="fade-up">
                  <div class="icon-box">
                    <svg
                      viewBox="0 0 24 24"
                      fill="none"
                      stroke="currentColor"
                      stroke-width="1.6"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      aria-hidden="true"
                    >
                      <path
                        d="M5 4h4l1.8 4.6-2.4 1.5a11 11 0 0 0 5.5 5.5l1.5-2.4L20 15v4a2 2 0 0 1-2 2C9.7 21 3 14.3 3 6a2 2 0 0 1 2-2z"
                      />
                    </svg>
                  </div>
                  <div>
                    <h4>Call Us</h4>
                    <a href="tel:+971528716837">+971 52 871 6837</a>
                  </div>
                </div>
                <div class="info" data-aos="fade-up">
                  <div class="icon-box">
                    <svg
                      viewBox="0 0 24 24"
                      fill="none"
                      stroke="currentColor"
                      stroke-width="1.6"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      aria-hidden="true"
                    >
                      <rect x="3" y="5" width="18" height="14" rx="2.5" />
                      <path d="M3.5 7l8.5 6 8.5-6" />
                    </svg>
                  </div>
                  <div>
                    <h4>Email Us</h4>
                    <a href="mailto:shwetarroy@gmail.com"
                      >shwetarroy@gmail.com</a
                    >
                  </div>
                </div>
                <div class="info" data-aos="fade-up">
                  <div class="icon-box">
                    <svg
                      viewBox="0 0 24 24"
                      fill="none"
                      stroke="currentColor"
                      stroke-width="1.6"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      aria-hidden="true"
                    >
                      <circle cx="12" cy="12" r="9" />
                      <path d="M12 7v5l3.5 2" />
                    </svg>
                  </div>
                  <div>
                    <h4>Working Hours</h4>
                    <p>Saturday – Thursday · 9:00 AM – 6:00 PM</p>
                  </div>
                </div>
              </div>
            </div>
            <form
              class="enquiry"
              data-aos="fade-up"
              data-mail="shwetarroy@gmail.com"
              data-wa="971528716837"
              novalidate
            >
              <h3>Event Enquiry</h3>
              <p>Share a few details and we'll prepare a tailored proposal.</p>
              <div class="fields">
                <div>
                  <label for="name">Full name *</label
                  ><input id="name" name="name" required autocomplete="name" />
                </div>
                <div>
                  <label for="email">Email *</label
                  ><input
                    id="email"
                    name="email"
                    type="email"
                    required
                    autocomplete="email"
                  />
                </div>
                <div>
                  <label for="phone">Phone / WhatsApp</label
                  ><input
                    id="phone"
                    name="phone"
                    type="tel"
                    autocomplete="tel"
                  />
                </div>
                <div>
                  <label for="type">Event type *</label
                  ><select id="type" name="type" required>
                    <option value="">Select…</option>
                    <option>Event Planning &amp; Management</option>
                    <option>Wedding Planning</option>
                    <option>Parties &amp; Entertainment</option>
                    <option>Artistic Talent Contracting</option>
                    <option>Performing Arts &amp; Music Festivals</option>
                    <option>Live Theatrical Show Production</option>
                    <option>Laser &amp; Light Shows</option>
                    <option>Picnics &amp; Camping</option>
                    <option>Other</option>
                  </select>
                </div>
                <div>
                  <label for="date">Preferred date</label
                  ><input id="date" name="date" type="date" />
                </div>
                <div>
                  <label for="guests">Estimated guests</label
                  ><input
                    id="guests"
                    name="guests"
                    type="number"
                    min="1"
                    placeholder="e.g. 150"
                  />
                </div>
                <div class="full">
                  <label for="message">Tell us about your event *</label
                  ><textarea id="message" name="message" required></textarea>
                </div>
              </div>
              <div class="form-actions">
                <button class="btn btn-primary" type="submit">
                  Send by Email
                  <svg
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="1.6"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    aria-hidden="true"
                  >
                    <path d="M4 12h15M13 6l6 6-6 6" />
                  </svg></button
                ><button class="btn btn-dark" type="button" data-wa>
                  Send on WhatsApp
                </button>
              </div>
              <div class="form-msg" role="status" aria-live="polite"></div>
            </form>
          </div>
          <div class="map" data-aos="fade-up">
            <iframe
              title="Map of Al Khabaisi, Dubai"
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"
              src="https://www.google.com/maps?q=Al+Khabaisi,+Dubai&amp;output=embed"
            ></iframe>
          </div>
        </div>
      </section>
    </main>
    
    <?php
      include_once ('elements/footer.php')
    ?>

