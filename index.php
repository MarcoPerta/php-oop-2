<?php 

include_once __DIR__ . './classi/category.php';
include_once __DIR__ . '/classi/cibo.php';
include_once __DIR__ . '/classi/accessori.php';

$categoria = [
    'cane' => new Category ('cane', 'icon-font-awesome-cane'),
    'gatto' => new Category ('gatto', 'icon-font-awesome-gatto'),
    'uccello' => new Category ('uccello', 'icon-font-awesome-uccello')
  ];

$prodotti = [
     new Cibo ('https://picsum.photos/id/237/200/300', 'Royal Canin', 43.99, $categoria['cane'], 545, 'prosciutto, riso' ),
     new Cibo ('https://picsum.photos/id/237/200/300', 'Almo Nature', 44.99, $categoria['cane'],  600, 'manzo, cereali' ),
     new Accessori ('https://picsum.photos/id/237/200/300', 'Voliera Ferplsat Bella Casa', $categoria['uccello'], 184.99, 'Legno', 'M: L83 x P 67 x h 153 cm' ),
     new Accessori ('https://picsum.photos/id/237/200/300', 'Topini di Peluche', $categoria['gatto'], 4.99, 'morbido con codina in corda', '8,5 cm x 10 cm' )
];
var_dump( $prodotti );

?>

<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Spotify con Php e vue</title>
    <!-- FontAwesome 6.2 -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css'
        integrity='sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=='
        crossorigin='anonymous' referrerpolicy='no-referrer' />
    <!-- Bootstrap 5.2 css -->
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css' rel='stylesheet'
        integrity='sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi' crossorigin='anonymous'>
    <link rel='stylesheet' href='./assets/css/style.css'>
</head>

<body>
    <div id='app'>
        <h2>Boolshop</h2>
        <h5>I nostri prodotti</h5>

    </div>



    <!-- Bootstrap 5 script -->
    <script src='https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js'
        integrity='sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3' crossorigin='anonymous'>
        </script>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js'
        integrity='sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk' crossorigin='anonymous'>
        </script>
    <!-- vue 2 -->
    <script src='https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js'></script>
    <!-- axios 1.1.3 -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/axios/1.1.3/axios.min.js'
        integrity='sha512-0qU9M9jfqPw6FKkPafM3gy2CBAvUWnYVOfNPDYKVuRTel1PrciTj+a9P3loJB+j0QmN2Y0JYQmkBBS8W+mbezg=='
        crossorigin='anonymous' referrerpolicy='no-referrer'></script>
    <!-- Mio script -->
    <script src='./assets/js/main.js'></script>
</body>

</html>