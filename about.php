<html>
    <article class="flow">
  <h1>Our Team</h1>
  <p>The people who made the dream into reality, presenting you the Boys, founder of Animal Planet</p>
  <div class="team">
    <ul class="auto-grid" role="list">
      <li>
        <a href="https://swop.link/cool" target=_blank" class="profile">
          <h2 class="profile__name">Alen Mathews</h2>
          <p>Front-End | Backend</p>
          <img alt="Alen" src="https://res.cloudinary.com/tribune-blog/image/upload/v1711880749/WhatsApp_Image_2024-03-31_at_3.53.40_PM_q7mc43.jpg" />
        </a>
      </li>
      <li>
        <a href="https://swop.link/cool" target=_blank" class="profile">
          <h2 class="profile__name">Siddharth Chattre</h2>
          <p>Front-End</p>
          <img alt="Sid" src="https://res.cloudinary.com/tribune-blog/image/upload/v1711908427/WhatsApp_Image_2024-03-31_at_10.22.30_PM_tsfgsf.jpg"/>
        </a>
      </li>
      <li>
        <a href="https://swop.link/cool" target=_blank" class="profile">
          <h2 class="profile__name">Vighnesh V</h2>
          <p>Front-End | Backend</p>
          <img alt="Vighnesh" src="https://res.cloudinary.com/tribune-blog/image/upload/v1711874877/WhatsApp_Image_2024-03-31_at_2.06.03_PM_ong95y.jpg" />
        </a>
      </li>
    </ul>
  </div>
</article>
</html>

<style>
    /* Globals */
body {
  font-family: "Inter", sans-serif;
  max-width: 55rem;
  padding: 2rem 1.5rem;
  margin: 0 auto;
  color: #241623;
  background: #eef2f4;
}

h1 {
  font-weight: 900;
  font-size: 2.7rem;
  max-width: 20ch;
}

p {
  max-width: 60ch;
}

a {
  color: currentcolor;
}

/* Utilities */
.auto-grid {
  display: grid;
  grid-template-columns: repeat(
    auto-fill,
    minmax(var(--auto-grid-min-size, 14rem), 1fr)
  );
  grid-gap: var(--auto-grid-gap, 0);
  padding: 0;
}

.flow > * + * {
  margin-top: var(--flow-space, 1em);
}

/* Composition */
.team {
  --flow-space: 2em;
}

/* Blocks */
.profile {
  display: flex;
  flex-direction: column;
  justify-content: flex-end;
  aspect-ratio: 1/1;
  position: relative;
  padding: 1.5rem;
  color: #ffffff;
  backface-visibility: hidden;
  text-decoration: none;
  overflow: hidden;
}

.profile::before,
.profile::after {
  content: "";
  width: 100%;
  height: 100%;
  position: absolute;
  /*inset: 0;*/
  top: 0;
  left: 0;
}



.profile img {
  width: 100%;
  height: 150%;
  position: absolute;
  top: 0;
  left: 0;
  margin: 0;
  z-index: -1;
  object-fit: cover;
  filter: grayscale(1);
  transition: filter 200ms ease, transform 250ms linear;
}


.profile h2,
.profile p {
  transform: translateY(2ex);
}

.profile h2 {
  font-size: 1.7rem;
  line-height: 1.2;
  font-weight: 900;
  letter-spacing: 0.03ch;
  transition: 300ms transform ease;
}

.profile p {
  font-size: 1.2rem;
  font-weight: 500;
}

.profile p {
  opacity: 0;
  transition: 300ms opacity linear, 300ms transform ease-in-out;
}

.profile:focus {
  outline: 0.5rem solid white;
  outline-offset: -0.5rem;
}

.profile:hover :is(h2, p),
.profile:focus :is(h2, p) {
  transform: none;
}

.profile:hover::after,
.profile:focus::after,
.profile:hover::before,
.profile:focus::before {
  opacity: 0.7;
}

.profile:hover p,
.profile:focus p {
  opacity: 1;
  transition-delay: 200ms;
}

.profile:hover img,
.profile:focus img {
  filter: grayscale(0);
  transform: scale(1.05) rotate(1deg);
}

    </style>