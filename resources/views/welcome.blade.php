<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        
        <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400,400i|Nunito:300,300i" rel="stylesheet">
        <link rel="stylesheet" href="css/app.css">
        <link rel="shortcut icon" type="image/png" href="img/favicon.png">
        
        <title>nexter &mdash; your home, your freedom</title>
    </head>
    <body class="container">
        
        <div class="sidebar">
           <button class="nav-btn"></button>
        </div>

        <header class="header">
            <img src="img/logo.png" alt="Nextor logo" class="header__logo">
            <h3 class="heading-3">Your own home:</h3>
            <h1 class="heading-1">The ultimate personal freedom</h1>
            <button class="btn header__btn">View our properties</button>
            <div class="header__seenon-text">Seen on</div>
            <div class="header__seenon-logos">
                <img src="img/logo-bbc.png" alt="Seen on logo">
                <img src="img/logo-forbes.png" alt="Seen on logo">
                <img src="img/logo-techcrunch.png" alt="Seen on logo">
                <img src="img/logo-bi.png" alt="Seen on logo">
            </div>
        </header>

        <div class="realtors">
            <h3 class="heading-3">Top 3 REaltors</h3>
            <div class="realtors__list">
                <img src="img/realtor-1.jpeg" alt="Realtors 1" class="realtors__img">
                <div class="realtors__details">
                    <h4 class="heading-4 heading-4--light">Erik Feinman</h4>
                    <p class="realtors__sold">245 houses sold</p>
                </div>

                <img src="img/realtor-2.jpeg" alt="Realtors 1" class="realtors__img">
                <div class="realtors__details">
                    <h4 class="heading-4 heading-4--light">Kim Brown</h4>
                    <p class="realtors__sold">212 houses sold</p>
                </div>

                <img src="img/realtor-3.jpeg" alt="Realtors 1" class="realtors__img">
                <div class="realtors__details">
                    <h4 class="heading-4 heading-4--light">Toby Ramsey</h4>
                    <p class="realtors__sold">198 houses sold</p>
                </div>
            </div>
        </div>

        <section class="features">
            <div class="feature">
                <svg class="feature__icon">
                    <use xlink:href="img/sprite.svg#icon-global"></use>
                </svg>
                <h4 class="heading-4 heading-4--dark">World's best luxury homes</h4>
                <p class="feature__text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tenetur distinctio necessitatibus pariatur voluptatibus.</p>
            </div>
            <div class="feature">
                <svg class="feature__icon">
                    <use xlink:href="img/sprite.svg#icon-trophy"></use>
                </svg>
                <h4 class="heading-4 heading-4--dark">Only the best properties</h4>
                <p class="feature__text">Voluptatum mollitia quae. Vero ipsum sapiente molestias accusamus rerum sed a eligendi aut quia..</p>
            </div>
            <div class="feature">
                <svg class="feature__icon">
                    <use xlink:href="img/sprite.svg#icon-map-pin"></use>
                </svg>
                <h4 class="heading-4 heading-4--dark">All homes in top location</h4>
                <p class="feature__text">
                    Tenetur distinctio necessitatibus pariatur voluptatibus quidem consequatur harum.
                    </p>
            </div>
            <div class="feature">
                <svg class="feature__icon">
                    <use xlink:href="img/sprite.svg#icon-key"></use>
                </svg>
                <h4 class="heading-4 heading-4--dark">New home in one week</h4>
                <p class="feature__text">Vero ipsum sapiente molestias accusamus rerum. Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
            <div class="feature">
                <svg class="feature__icon">
                    <use xlink:href="img/sprite.svg#icon-presentation"></use>
                </svg>
                <h4 class="heading-4 heading-4--dark">Top 1% realtors</h4>
                <p class="feature__text">Quidem consequatur harum, voluptatum mollitia quae. Tenetur distinctio necessitatibus pariatur voluptatibus..</p>
            </div>
            <div class="feature">
                <svg class="feature__icon">
                    <use xlink:href="img/sprite.svg#icon-lock"></use>
                </svg>
                <h4 class="heading-4 heading-4--dark">Secure payments on nexter</h4>
                <p class="feature__text">Pariatur voluptatibus quidem consequatur harum, voluptatum mollitia quae.</p>
            </div>
        </section>

        <div class="story__pictures">
            <img src="img/story-1.jpeg" alt="Courple with new house" class="story__img--1">
            <img src="img/story-2.jpeg" alt="This is a new house" class="story__img--2">
        </div>

        <div class="story__content">
            <h3 class="heading-3 mb-sm">Happy Customers</h3>
            <h2 class="heading-2 heading-2--dark mb-md">&ldquo; The best decision of our lives&rdquo;</h2>
            <p class="story__text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tenetur distinctio necessitatibus pariatur voluptatibus. Quidem consequatur harum volupta!</p>
            <button class="btn">Find your own home</button>
        </div>

        <section class="homes">
                @include('homes.home-1')
                @include('homes.home-2')
                @include('homes.home-3')
                @include('homes.home-4')
                @include('homes.home-5')
                @include('homes.home-6')
        </section>

        <section class="gallery">
                <figure class="gallery__item gallery__item--1">

                        <img src="img/gal-1.jpeg" alt="GAllery image 1" class="gallery__img">
                </figure>
                <figure class="gallery__item gallery__item--2">

                        <img src="img/gal-2.jpeg" alt="GAllery image 1" class="gallery__img">
                </figure>
                <figure class="gallery__item gallery__item--3">

                        <img src="img/gal-3.jpeg" alt="GAllery image 1" class="gallery__img">
                </figure>
                <figure class="gallery__item gallery__item--4">

                        <img src="img/gal-4.jpeg" alt="GAllery image 1" class="gallery__img">
                </figure>
                <figure class="gallery__item gallery__item--5">

                        <img src="img/gal-5.jpeg" alt="GAllery image 1" class="gallery__img">
                </figure>
                <figure class="gallery__item gallery__item--6">

                        <img src="img/gal-6.jpeg" alt="GAllery image 1" class="gallery__img">
                </figure>
                <figure class="gallery__item gallery__item--7">

                        <img src="img/gal-7.jpeg" alt="GAllery image 1" class="gallery__img">
                </figure>
                <figure class="gallery__item gallery__item--8">

                        <img src="img/gal-8.jpeg" alt="GAllery image 1" class="gallery__img">
                </figure>
                <figure class="gallery__item gallery__item--9">

                        <img src="img/gal-9.jpeg" alt="GAllery image 1" class="gallery__img">
                </figure>
                <figure class="gallery__item gallery__item--10">

                        <img src="img/gal-10.jpeg" alt="GAllery image 1" class="gallery__img">
                </figure>
                <figure class="gallery__item gallery__item--11">

                        <img src="img/gal-11.jpeg" alt="GAllery image 1" class="gallery__img">
                </figure>
                <figure class="gallery__item gallery__item--12">

                        <img src="img/gal-12.jpeg" alt="GAllery image 1" class="gallery__img">
                </figure>
                <figure class="gallery__item gallery__item--13">

                        <img src="img/gal-13.jpeg" alt="GAllery image 1" class="gallery__img">
                </figure>
                <figure class="gallery__item gallery__item--14">

                        <img src="img/gal-14.jpeg" alt="GAllery image 1" class="gallery__img">
                </figure>
        </section>
        
        <footer class="footer">
            <ul class="nav">
                    <li class="nav__item"><a href="#" class="nav__link">Find your dream home</a></li>
                    <li class="nav__item"><a href="#" class="nav__link">REquest Proposal</a></li>
                    <li class="nav__item"><a href="#" class="nav__link">Download home planner</a></li>
                    <li class="nav__item"><a href="#" class="nav__link">Contact us</a></li>
                    <li class="nav__item"><a href="#" class="nav__link">Submit your property</a></li>
                    <li class="nav__item"><a href="#" class="nav__link">Com work with us</a></li>
            </ul>

            <p class="copyright">
                &copy; Copyright 2019 by JEremie Beluche. Feel free to use this project for your own purposes. 
                This does not apply if you plan to produce your own video course or tutorials based on this project.
            </p>
        </footer>
    </body>
</html>