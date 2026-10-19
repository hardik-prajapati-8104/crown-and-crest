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
            ><span class="cur">Gallery</span>
          </div>
          <h1>Gallery</h1>
          <p>A look at the kinds of events we design and deliver.</p>
        </div>
      </section>
      <section class="section">
        <div class="wrap">
          <div class="sec-head center" data-aos="fade-up">
            <span class="eyebrow">Our Portfolio</span>
            <h2>Moments we create</h2>
            <p>A preview of the categories of events we deliver.</p>
          </div>
          <div class="filters" role="group" aria-label="Filter gallery">
            <button class="on" data-f="all">All</button
            ><button data-f="wedding">Weddings</button
            ><button data-f="corporate">Corporate</button
            ><button data-f="festival">Festivals & Shows</button
            ><button data-f="outdoor">Outdoor</button>
          </div>
          <div class="tiles">
            <div class="tile" data-c="wedding">
              <img
                class="ph"
                src="https://images.unsplash.com/photo-1519167758481-83f550bb49b3?auto=format&fit=crop&w=800&q=80"
                alt="Event gallery"
                loading="lazy"
                onerror="this.remove()"
              /><svg
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="1.6"
                stroke-linecap="round"
                stroke-linejoin="round"
                aria-hidden="true"
                class="ti"
              >
                <path
                  d="M12 20.5s-8-4.9-8-11A4.6 4.6 0 0 1 12 6.8a4.6 4.6 0 0 1 8 2.7c0 6.1-8 11-8 11z"
                />
              </svg>
              <div><small>Weddings</small><b>Garden Reception</b></div>
            </div>
            <div class="tile t2" data-c="corporate">
              <img
                class="ph"
                src="https://images.unsplash.com/photo-1540575467063-178a50c2df87?auto=format&fit=crop&w=800&q=80"
                alt="Event gallery"
                loading="lazy"
                onerror="this.remove()"
              /><svg
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="1.6"
                stroke-linecap="round"
                stroke-linejoin="round"
                aria-hidden="true"
                class="ti"
              >
                <rect x="3" y="4.5" width="18" height="16" rx="2.5" />
                <path d="M3 9.5h18M8 2.5v4M16 2.5v4M8 14h2M14 14h2M8 17h2" />
              </svg>
              <div><small>Corporate</small><b>Product Launch</b></div>
            </div>
            <div class="tile t3" data-c="festival">
              <img
                class="ph"
                src="https://images.unsplash.com/photo-1429962714451-bb934ecdc4ec?auto=format&fit=crop&w=800&q=80"
                alt="Event gallery"
                loading="lazy"
                onerror="this.remove()"
              /><svg
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="1.6"
                stroke-linecap="round"
                stroke-linejoin="round"
                aria-hidden="true"
                class="ti"
              >
                <path d="M9 18V6l11-2v12" />
                <circle cx="6.5" cy="18" r="2.5" />
                <circle cx="17.5" cy="16" r="2.5" />
              </svg>
              <div><small>Festivals & Shows</small><b>Open-Air Concert</b></div>
            </div>
            <div class="tile t4" data-c="outdoor">
              <img
                class="ph"
                src="https://images.unsplash.com/photo-1504280390367-361c6d9f38f4?auto=format&fit=crop&w=800&q=80"
                alt="Event gallery"
                loading="lazy"
                onerror="this.remove()"
              /><svg
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="1.6"
                stroke-linecap="round"
                stroke-linejoin="round"
                aria-hidden="true"
                class="ti"
              >
                <path d="M3 20.5L12 4l9 16.5H3z" />
                <path d="M12 4v16.5M9.5 20.5l2.5-5 2.5 5" />
              </svg>
              <div><small>Outdoor</small><b>Desert Camp Evening</b></div>
            </div>
            <div class="tile t2" data-c="wedding">
              <img
                class="ph"
                src="https://images.unsplash.com/photo-1469371670807-013ccf25f16a?auto=format&fit=crop&w=800&q=80"
                alt="Event gallery"
                loading="lazy"
                onerror="this.remove()"
              /><svg
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="1.6"
                stroke-linecap="round"
                stroke-linejoin="round"
                aria-hidden="true"
                class="ti"
              >
                <path d="M4 20l4.5-12 7.5 7.5L4 20z" />
                <path
                  d="M13 5l.6-1.6M17 8.5l1.7-.5M16 3.5v2M20 12l1.5.4M10.5 5.5l-1-1.5"
                />
              </svg>
              <div><small>Weddings</small><b>Sangeet Night</b></div>
            </div>
            <div class="tile t4" data-c="festival">
              <img
                class="ph"
                src="https://images.unsplash.com/photo-1501281668745-f7f57925c3b4?auto=format&fit=crop&w=800&q=80"
                alt="Event gallery"
                loading="lazy"
                onerror="this.remove()"
              /><svg
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="1.6"
                stroke-linecap="round"
                stroke-linejoin="round"
                aria-hidden="true"
                class="ti"
              >
                <path
                  d="M12 2.5v6M12 15.5v6M2.5 12h6M15.5 12h6M5.5 5.5l4 4M14.5 14.5l4 4M18.5 5.5l-4 4M9.5 14.5l-4 4"
                />
                <circle cx="12" cy="12" r="1.6" />
              </svg>
              <div><small>Festivals & Shows</small><b>Laser Spectacle</b></div>
            </div>
            <div class="tile t3" data-c="corporate">
              <img
                class="ph"
                src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=800&q=80"
                alt="Event gallery"
                loading="lazy"
                onerror="this.remove()"
              /><svg
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="1.6"
                stroke-linecap="round"
                stroke-linejoin="round"
                aria-hidden="true"
                class="ti"
              >
                <path d="M6.5 4h11l4 5.5L12 21 2.5 9.5l4-5.5z" />
                <path d="M2.5 9.5h19M9 4l-1.5 5.5L12 21l4.5-11.5L15 4" />
              </svg>
              <div><small>Corporate</small><b>Gala Dinner</b></div>
            </div>
            <div class="tile" data-c="festival">
              <img
                class="ph"
                src="https://images.unsplash.com/photo-1464366400600-7168b8af9bc3?auto=format&fit=crop&w=800&q=80"
                alt="Event gallery"
                loading="lazy"
                onerror="this.remove()"
              /><svg
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="1.6"
                stroke-linecap="round"
                stroke-linejoin="round"
                aria-hidden="true"
                class="ti"
              >
                <path d="M4 5h16v6.5a8 8 0 0 1-16 0V5z" />
                <path
                  d="M8.5 10h.01M15.5 10h.01M8.5 14.5c1 1.2 2.2 1.8 3.5 1.8s2.5-.6 3.5-1.8"
                />
              </svg>
              <div>
                <small>Festivals & Shows</small><b>Theatrical Showcase</b>
              </div>
            </div>
            <div class="tile t2" data-c="outdoor">
              <img
                class="ph"
                src="https://images.unsplash.com/photo-1469371670807-013ccf25f16a?auto=format&fit=crop&w=800&q=80"
                alt="Event gallery"
                loading="lazy"
                onerror="this.remove()"
              /><svg
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="1.6"
                stroke-linecap="round"
                stroke-linejoin="round"
                aria-hidden="true"
                class="ti"
              >
                <path d="M3 20.5L12 4l9 16.5H3z" />
                <path d="M12 4v16.5M9.5 20.5l2.5-5 2.5 5" />
              </svg>
              <div><small>Outdoor</small><b>Sunset Picnic</b></div>
            </div>
          </div>
          <div class="note">
            <b>Photo gallery coming soon.</b> These tiles are category
            placeholders. Add your real event photographs to
            <code>assets/images/gallery/</code> and swap them in, or send them
            to us and we will place them.
          </div>
        </div>
      </section>
      <section class="cta">
        <div class="wrap">
          <div class="" data-aos="fade-up">
            <span class="eyebrow">Start Planning</span>
            <h2>Let's create an event your guests will remember.</h2>
            <p>
              Tell us about your date, guest count and vision. We'll respond
              with a tailored proposal.
            </p>
          </div>
          <div
            class=""
            data-aos="fade-up"
            style="display: flex; gap: 14px; flex-wrap: wrap"
          >
            <a class="btn btn-primary" href="contact.php"
              >Request a Proposal
              <svg
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="1.6"
                stroke-linecap="round"
                stroke-linejoin="round"
                aria-hidden="true"
              >
                <path d="M4 12h15M13 6l6 6-6 6" /></svg></a
            ><a class="btn btn-line" href="tel:+971528716837"
              >+971 52 871 6837</a
            >
          </div>
        </div>
      </section>
    </main>

<?php
	include_once ('elements/footer.php')
?>
