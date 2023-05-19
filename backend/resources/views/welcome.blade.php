<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <style>
        article {
            --img-scale: 1.001;
            --title-color: black;
            --link-icon-translate: -20px;
            --link-icon-opacity: 0;
            position: relative;
            width: 29em;
            border-radius: 16px;
            box-shadow: none;
            background: #fff;
            transform-origin: center;
            transition: all 0.4s ease-in-out;
            overflow: hidden;
            box-shadow: rgba(0, 0, 0, 0.1) 0px 5px 20px 0px, rgba(0, 0, 0, 0.02) 0px 0px 0px .5px;
        }

        article a::after {
            position: absolute;
            inset-block: 0;
            inset-inline: 0;
            cursor: pointer;
            content: "";

        }

        /* basic article elements styling */
        article h2 {
            margin: 0 0 18px 0;
            /* font-family: "Bebas Neue", cursive; */
            font-size: 1.9rem;
            letter-spacing: 0.06em;
            color: var(--title-color);
            transition: color 0.3s ease-out;
        }

        figure {
            margin: 0;
            padding: 0;
            /* aspect-ratio: 16 / 9; */
            overflow: hidden;
        }

        article img {
            min-width: 100%;
            transform-origin: center;
            transform: scale(var(--img-scale));
            transition: transform 0.4s ease-in-out;
            object-fit: cover;
        }

        .article-body {
            padding: 24px;
        }

        article a {
            display: inline-flex;
            align-items: center;
            text-decoration: none;
            color: #28666e;
        }

        article a:focus {
            outline: 1px dotted #28666e;
        }

        article a .icon {
            min-width: 24px;
            width: 24px;
            height: 24px;
            margin-left: 5px;
            transform: translateX(var(--link-icon-translate));
            opacity: var(--link-icon-opacity);
            transition: all 0.3s;
        }

        /* using the has() relational pseudo selector to update our custom properties */
        article:has(:hover, :focus) {
            --img-scale: 1.1;
            --title-color: #28666e;
            --link-icon-translate: 0;
            --link-icon-opacity: 1;
            box-shadow: rgba(0, 0, 0, 0.16) 0px 10px 36px 0px, rgba(0, 0, 0, 0.06) 0px 0px 0px 1px;
        }


            /************************
             Generic layout (demo looks)
             **************************/

        *,
        *::before,
        *::after {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 48px 0;
            font-family: "Figtree", sans-serif;
            font-size: 1.2rem;
            line-height: 1.6rem;
            /* background-image: linear-gradient(45deg, #7c9885, #b5b682); */
            min-height: 100vh;
        }

        .img {
            object-fit: 'cover';
        }

        .articles {
            display: grid;
            width: 29em;
            margin-inline: auto;
            padding-inline: 24px;
            /* grid-template-columns: repeat(auto-fill, minmax(320px, 1fr)); */
            gap: 24px;
        }

        @media screen and (max-width: 960px) {
            article {
                /* container: card/inline-size; */
            }

            .article-body p {
                display: none;
            }
        }

        @container card (min-width: 380px) {
            .article-wrapper {
                display: grid;
                grid-template-columns: 100px 1fr;
                gap: 16px;
            }

            /* .article-body {
                padding-left: 0;
            } */

            figure {
                width: 100%;
                height: 100%;
                */ overflow: hidden;
            }

            figure img {
                height: 100%;
                width: 100%;
                aspect-ratio: 1;
                object-fit: cover;
            }
        }

        /* .sr-only:not(:focus):not(:active) {
  clip: rect(0 0 0 0);
  clip-path: inset(50%);
  height: 1px;
  overflow: hidden;
  position: absolute;
  white-space: nowrap;
  width: 1px;
} */
    </style>
</head>

<body class="antialiased">
    @foreach ($news as $new)
        <section class="articles">
            <article>
                <div class="article-wrapper">
                    <figure>
                        @if (!empty($new['img']))
                            <img src='{{ $new['img'] }}' alt="" class='img' />
                        @endif
                    </figure>
                    <div class="article-body">
                        <h2>{{ $new['title'] }}</h2>
                        <p>
                            {{ $new['niveauetude'] }}
                        </p>
                        <p>Localisation{{ $new['location'] }}</p>
                        <p>Salaire{{ $new['salaire'] }}</p>

                        <a href="#" class="read-more">
                            <span class="sr-only"></span>
                            Read more
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>
            </article>
    @endforeach

</body>

</html>
