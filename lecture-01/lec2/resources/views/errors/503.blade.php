<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        html,
        body {
            width: 100%;
            height: 100%;
        }

        body {
            background-color: #26292d;
        }

        .container {
            width: 100%;
            height: 100%;

            padding-right: 15px;
            padding-left: 15px;
            margin-right: auto;
            margin-left: auto;

            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .title {
            text-align: center;
        }

        .white-font {
            color: #fff;
        }

        @media (min-width: 576px) {
            .container {
                max-width: 540px;
            }
        }

        @media (min-width: 768px) {
            .container {
                max-width: 720px;
            }
        }

        @media (min-width: 992px) {
            .container {
                max-width: 960px;
            }
        }

        @media (min-width: 1200px) {
            .container {
                max-width: 1140px;
            }
        }

        .text-justify {
            text-align: justify;
        }

        .copyright {
            text-align: center;
            margin-top: 1rem;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1 class="title white-font">NCTU CSCC</h1>
        <div class="nes-container is-dark with-title is-centered">
            <p class="title">503</p>
            <p>Service update</p>
            <p class="text-justify">The server is currently unavailable (because it is overloaded or down for
                maintenance). Please wait and try again later.</p>
        </div>
        <p class="copyright white-font">© Copyright NCTU CSCC. All Rights Reserved</p>
    </div>
</body>

</html>