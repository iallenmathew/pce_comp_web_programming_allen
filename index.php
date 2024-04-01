<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animal Planet</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header>
        <div class="container row">
            <a href="#" class="header__logo">AnimalPlanet</a>
            <div class="nav__toggle">
                <i class="fas fa-bars"></i>
            </div>
            <nav class="header__nav">
                <ul class="nav__list row">
                    <li class="nav__item"><a href="index.php" class="nav__link">Home</a></li>
                    <li class="nav__item"><a href="about.php" class="nav__link">About</a></li>
                    <li class="nav__item"><a href="login.php" class="nav__link">Login</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <section class="intro" id="home">
        <div class="container">
            <div class="intro__content">
                <h1 class="intro__title">
                    The best of the endangered wildlife 
                </h1>
                <div class="intro__text">
                    With accurate and detail research we have found few endangered species of country
                </div>
                <a href="task.php">
                <button class="btn intro__btn">View More</button>
                </a>
            </div>
        </div>
    </section>
    <section id="explore" class="explore">
        <div class="container">
            <div class="explore__head">
                <h2 class="explore__title">
                    Explore The World
                </h2>
                <p class="explore__text">
                    Alen,Vighnesh created this website.
                </p>
            </div>
            <div class="explore__cards">
                <div class="card">
                    <h3 class="card__text">
                        Roundup at Revillagigedo, by Ralph Pace, Big Picture wildlife images, aquatic life
                    </h3>
                </div>
                <div class="card">
                    <h3 class="card__text">
                        Roundup at Revillagigedo, by Ralph Pace, Big Picture wildlife images, aquatic life
                    </h3>
                </div>
                <div class="card">
                    <h3 class="card__text">
                        Roundup at Revillagigedo, by Ralph Pace, Big Picture wildlife images, aquatic life
                    </h3>
                </div>
            </div>
        </div>
    </section>
    <section id="photography" class="photography">
        <div class="container">
            <div class="photography__content">
                <h2 class="photography__title">
                    50 Years of Endangered Species in the World
                </h2>
                <p class="photography__text">
                    Animal Planet’s new website released on Wednesday marks five decades of the WPY competition, celebrating the art of wildlife photography. Started in the 1960s, the 160 prize-winning and commended images represent 50 years of different times, styles and specialisms – showcasing some of the iconic images of wildlife on planet Earth, part of an exhibition in London from 24 October
                </p>
            </div>
        </div>
    </section>
    <section class="info">
        <div class="container">
            <div class="info__content">
                <h2 class="info__title">
                    We the students of Pillai College has made it possible by creating awareness
                </h2>
                <p class="info__text">
                   A web Programming Project for Second Year 2023-2024
                </p>
            </div>
        </div>
    </section>
    <section class="image">
    </section>
    <section class="watch">
        <div class="container">
            <div class="watch__images">
                <div class="watch__image"></div>
                <div class="watch__image"></div>
            </div>
            <div class="watch__content">
                <h2 class="watch__title">
                    Top 10 Wildlife Photographers To Watch
                </h2>
                <p class="watch__text">
                    Millions of species of fauna and flora inhabit this vibrant and diverse world we live in. Sometimes we don’t even remember that there is nature beyond our cities and our comfort zone. There is so much wildlife to captivate and capture. Thankfully photographers can share the beauty of this world and bring us the wildlife scenes of animals that we would have otherwise never known.
                </p>
            </div>
        </div>
    </section>
    <section class="photos">
        <div class="container">
            <div class="photos__images">
                <div class="photos__img"></div>
                <div class="photos__img"></div>
                <div class="photos__img"></div>
                <div class="photos__img"></div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container row">
            <a href="#" class="footer__logo">Animal Planet</a>
            <p class="footer__text">Copyright &copy; 2024 Animal Planet.</p>
        </div>
    </footer>

    <script src="./main.js"></script>
</body>
</html>


<style>
    * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
:root {
  --color-dark: #040307;
  --color-light: #ffffff;
}
html {
  scroll-behavior: smooth;
}
body {
  font-family: "Raleway", sans-serif;
  background-color: var(--color-dark);
}
.container {
  max-width: 1200px;
  width: 80%;
  margin: auto;
}
h1,
h2,
h3,
h4 {
  font-family: "Playfair Display", serif;
}
a {
  text-decoration: none;
  color: var(--color-light);
}
.row {
  display: flex;
  justify-content: space-between;
  align-items: center;
}
ul {
  list-style: none;
}
.btn {
  border: none;
  outline: none;
  cursor: pointer;
}
/* header  */
header {
  background-color: var(--color-dark);
  color: var(--color-light);
  padding: 1rem 0;
}
.header__logo {
  font-size: 1.8rem;
  font-family: "Playfair Display", serif;
}
.nav__item {
  margin-left: 3rem;
  padding: 0.5rem 0;
  position: relative;
}
.nav__item::after {
  content: "";
  height: 2px;
  width: 0;
  background-color: var(--color-light);
  position: absolute;
  bottom: 0;
  left: 0;
  transition: all 0.3s ease-in;
}
.nav__item:hover::after {
  width: 100%;
}
h2 {
  font-size: 3.75rem;
  line-height: 1.2;
}
.nav__toggle {
  display: none;
}
/* intro */
.intro {
  min-height: 90vh;
  display: flex;
  align-items: center;
  justify-content: center;
  background-color: var(--color-dark);
  text-align: center;
  color: var(--color-light);
  background: linear-gradient(0deg, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)),
    url("https://res.cloudinary.com/tribune-blog/image/upload/v1711990771/bg_fefahk.jpg");
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center center;
}
.intro__content {
  max-width: 800px;
  margin: auto;
}
.intro__title {
  font-size: 5rem;
}
.intro__text {
  font-size: 1.5rem;
  line-height: 1.5;
  margin: 2rem 0;
}
.intro__btn {
  background-color: var(--color-light);
  padding: 0.8rem 2rem;
  font-size: 1.5rem;
  border-radius: 3rem;
  font-weight: light;
  border: 2px solid var(--color-light);
  transition: 0.3s ease-in;
}
.intro__btn:hover {
  border: 2px solid var(--color-light);
  color: var(--color-light);
  background-color: transparent;
}
/* explore */
.explore {
  padding: 5rem 0;
  background-color: var(--color-dark);
  color: var(--color-light);
}
.explore__head {
  text-align: center;
  max-width: 650px;
  margin: auto;
}
.explore__title {
  font-size: 3rem;
}
.explore__text {
  font-size: 1rem;
  margin: 1.5rem 0;
  line-height: 1.5;
}

.explore__cards {
  display: flex;
  align-items: center;
  justify-content: space-between;
  flex-wrap: wrap;
  margin: 3rem 0;
  gap: 2rem;
}
.card {
  flex: 1 0 360px;
  height: 587px;
  position: relative;
}
/* .card + .card {
  margin-left: 2rem;
} */
.card:first-child {
  background: linear-gradient(0deg, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)),
    url("https://res.cloudinary.com/tribune-blog/image/upload/v1711990769/1_veprqd.jpg");
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center center;
}
.card:nth-child(2) {
  background: linear-gradient(0deg, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)),
    url("https://res.cloudinary.com/tribune-blog/image/upload/v1711990769/2_nowaaw.jpg");
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center center;
}
.card:last-child {
  background: linear-gradient(0deg, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)),
    url("https://res.cloudinary.com/tribune-blog/image/upload/v1711990770/3_yncmao.jpg");
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center center;
}
.card__text {
  font-size: 1.87rem;
  font-weight: normal;
  position: absolute;
  top: 50%;
  left: 2.5rem;
  bottom: 2.5rem;
  margin-right: 2rem;
}

/* photography */
.photography {
  min-height: 75vh;
  background: linear-gradient(0deg, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)),
    url("https://res.cloudinary.com/tribune-blog/image/upload/v1711990772/eleph_kvxgmk.jpg");
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center center;
  position: relative;
}
.photography__content {
  max-width: 800px;
  margin: auto;
  text-align: center;
  color: var(--color-light);
  position: absolute;
  top: 40%;
  left: 50%;
  transform: translateX(-50%);
}
.photography__text {
  font-size: 1rem;
  line-height: 1.8;
  margin: 2.5rem 0;
}

/* info */
.info {
  padding: 6rem 0;
  background-color: var(--color-dark);
  color: var(--color-light);
  text-align: center;
}
.info__content {
  max-width: 800px;
  margin: auto;
  text-align: center;
}
.info__title {
  font-size: 3rem;
}
.info__text {
  font-size: 1rem;
  line-height: 1.8;
  margin-top: 2.5rem;
}

/* image  */
.image {
  min-height: 50vh;
  background: linear-gradient(0deg, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)),
    url("https://res.cloudinary.com/tribune-blog/image/upload/v1711990772/horses_dlmwkl.jpg");
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center center;
}

/* watch */
.watch {
  padding: 5rem 0;
  color: var(--color-light);
}
.watch__images {
  display: grid;
  grid-template-columns: 1fr 1fr;
  grid-gap: 2.5rem;
}
.watch__image {
  height: 417px;
}
.watch__image:first-child {
  background: linear-gradient(0deg, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)),
    url("https://res.cloudinary.com/tribune-blog/image/upload/v1711990769/2-1_vy5oit.jpg");
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center center;
}
.watch__image:last-child {
  background: linear-gradient(0deg, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)),
    url("https://res.cloudinary.com/tribune-blog/image/upload/v1711990771/2-2_ryn2xo.jpg");
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center center;
}

.watch__content {
  /* max-width: 800px; */
  margin: auto;
  text-align: center;
  padding: 0 1.5rem;
  margin: 3rem 0;
}
.watch__text {
  font-size: 1.1rem;
  line-height: 1.5;
  margin: 1.7rem 0 0.7rem 0;
}

/* photos */
.photos {
  padding: 5rem;
}
.photos__images {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  grid-gap: 1rem;
}
.photos__img {
  height: 253px;
}
.photos__img:nth-child(1) {
  background: url("https://res.cloudinary.com/tribune-blog/image/upload/v1711990769/3-1_hejskp.jpg");
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center center;
}
.photos__img:nth-child(2) {
  background: url("https://res.cloudinary.com/tribune-blog/image/upload/v1711990769/3-2_b9lac0.jpg");
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center center;
}
.photos__img:nth-child(3) {
  background: url("https://res.cloudinary.com/tribune-blog/image/upload/v1711990771/3-4_ytkubo.jpg");
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center center;
}
.photos__img:nth-child(4) {
  background: url("https://res.cloudinary.com/tribune-blog/image/upload/v1711990771/3-3_nmczfb.jpg");
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center center;
}

footer {
  padding: 2rem;
  color: var(--color-light);
}
.footer__logo {
  font-size: 1.8rem;
  font-family: "Playfair Display", serif;
}

/* Responsive */

@media only screen and (max-width: 992px) {
  .container {
    width: 90%;
  }
  .intro__title {
    font-size: 4rem;
  }
  .intro__text {
    font-size: 1.2rem;
    line-height: 1.5;
    margin: 1.5rem 0;
  }
  .photography__content {
    top: 20%;
    max-width: 1000px;
  }
  .photos__images {
    grid-template-columns: repeat(2, 1fr);
    grid-gap: 1rem;
  }
  .photos__img {
    height: 253px;
  }
}

@media only screen and (max-width: 700px) {
  html {
    font-size: 95%;
  }
  .nav__toggle {
    display: block;
    font-size: 1.5rem;
    cursor: pointer;
  }
  .header__nav {
    position: fixed;
    top: 0;
    left: -100rem;
    height: 100vh;
    background-color: var(--color-dark);
    width: 70%;
    z-index: 3;
    transition: all 0.3s ease;
  }
  .nav__list {
    flex-direction: column;
    align-items: start;
    padding: 5rem;
  }
  .header__nav.show {
    left: 0;
  }
  .nav__item {
    padding: 2rem 1rem;
  }
  .watch__images {
    grid-template-columns: 1fr;
    grid-gap: 2rem;
  }
  .photos__images {
    grid-template-columns: 1fr;
    grid-gap: 1.5rem;
  }
}
@media only screen and (max-width: 700px) {
  html {
    font-size: 85%;
  }
}

</style>

<script>
    const nav__toggle = document.querySelector('.nav__toggle');
const navbar = document.querySelector('.header__nav');

nav__toggle.addEventListener('click', () => {
    navbar.classList.toggle('show');
});
    </script>