<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>404 Not Found</title>
    <style>
        body {
            color: #777;
            background-color: #efefef;
            text-align: center;
        }

        .page-not-found {
            margin: 50px 0;
            display: flex;
            justify-content: center;

        }

        a {
            color: red;
        }

        .page-not-found h2 {
            font-size: 140px;
            font-weight: 600;
            letter-spacing: -10px;
            line-height: 140px;
        }

        .page-not-found h4 {
            color: #777;
        }

        .page-not-found p {
            font-size: 1.4em;
            line-height: 36px;
        }

        /* Responsive */
        @media (max-width: 479px) {
            .page-not-found {
                margin: 0;
            }

            .page-not-found h2 {
                font-size: 100px;
                letter-spacing: 0;
                line-height: 100px;
            }
        }

    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="container">
        <section class="page-not-found">
            <div class="row">
                <div class="col-md-6 col-md-offset-1">
                    <div class="page-not-found-main">
                        <h2><i class="fa fa-wrench"></i></h2>
                        <p>
                            Oops!, Página no encontrada (404)
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <h4 class="heading-primary">
                        Puedes enviarnos
                        <a href="mailto:grupo18sc@tecnoweb.org.bo"> un mensaje</a>
                        para informarnos del problema
                        ó <a href={{ route('home') }}>volver al Inicio</a>
                    </h4>
                </div>
            </div>
        </section>

    </div>
</body>

</html>
