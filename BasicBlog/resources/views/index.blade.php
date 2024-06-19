<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @extends('tema')
    @section('ustAlan')
    <div class="col-12">
        <h2>ANASAYFA</h2>
    </div>
    <div class="col-12">
        @guest
            <h5>
                Üye değilsiniz. İçeriği görmek için login olmalısınız.
            </h5>    
        @endguest

        @auth
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur neque vel ducimus rem veritatis animi odit, quo quaerat, quia pariatur quisquam repellat eveniet laboriosam eaque eos ipsa ad. Illum, cupiditate eveniet quas consectetur omnis repellat labore quasi voluptatibus explicabo voluptate est unde optio sapiente facilis rem repellendus ex, dolore, reprehenderit ab incidunt praesentium. Magni sint eos facere laboriosam omnis laborum soluta vero, reprehenderit eaque, consequuntur veniam tenetur autem fuga reiciendis id accusamus accusantium numquam nam.</p> 
        @endauth
    </div>    
    @endsection
    @section('altAlan')
    <div class="col-12">
        @auth
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In earum, labore esse delectus culpa qui saepe, debitis libero voluptatibus quasi laborum iste inventore obcaecati sed id repellat adipisci harum illum ipsum et error aut itaque ab molestiae. Dignissimos aliquid earum provident! Aliquam eaque eius sint culpa unde officia! Minima reprehenderit ipsam ut alias fuga voluptatum veritatis dolorum enim, similique, atque ipsum blanditiis sunt neque autem debitis! Rerum, alias temporibus a architecto nulla quo libero labore hic, repudiandae cumque doloribus praesentium maxime. Reiciendis mollitia obcaecati quo ipsam, alias exercitationem eveniet earum itaque voluptatem laudantium, illo voluptatibus tempora reprehenderit? Qui corrupti adipisci cumque excepturi beatae aliquid mollitia? Exercitationem ipsum commodi labore nam aspernatur modi enim veniam! Voluptatum ab omnis facere sit itaque quis aut vel laudantium possimus ad excepturi ipsa nostrum reiciendis architecto unde corporis expedita ea totam blanditiis illum nihil rem, aperiam quidem debitis? Ratione aut non voluptatem at id neque! Et iste, eos quisquam tempora in ipsa, facilis sint aperiam quidem aliquam accusantium itaque eius obcaecati provident, explicabo iure quis consequuntur asperiores. Inventore, fuga tenetur, aliquid accusantium corrupti veniam suscipit vitae aut qui perspiciatis dicta recusandae consequuntur aliquam! Consectetur quasi et labore dolore dolorem nisi laborum ullam asperiores, minus ea.</p>
        @endauth
    </div>    
    @endsection 
</body>
</html>