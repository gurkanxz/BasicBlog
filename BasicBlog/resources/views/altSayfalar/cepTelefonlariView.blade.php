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
        <div class="row">
            <div class="col-9">
                <h2>CEP TELEFONLARI</h2>
            </div>
            <div class="col-3">
                <a href="{{route('formName')}}" class="btn btn-primary">Veri Ekle</a>
            </div>
        </div>
    </div>
    <div class="col-12">
       <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cumque harum totam ratione sunt quod fugiat ducimus reiciendis minima, laborum deserunt rerum veritatis at molestias officiis suscipit quam enim nesciunt illo aliquam distinctio asperiores! Velit iste soluta praesentium officiis, quos natus omnis cumque sit autem beatae inventore quaerat ipsa cum perspiciatis?</p> 
    </div> 
    <div class="col-12">
    <!--    
    {{$cepTelefonlari[0]['model']}}
    -->
     <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Model</th>
            <th scope="col">Fiyat</th>
            <th scope="col">Gorsel</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cepTelefonlari as $kayit)
            <tr>
                <th scope="row">{{$kayit->id}}</th>
                <td>{{$kayit->model}}</td>
                <td>{{$kayit->fiyat}}</td>
                <td>{{$kayit->gorsel}}</td>
                <td><a href="{{route('guncelleFormName',$kayit->id)}}" class="btn btn-primary">Güncelle</a></td>
                <td><a href="{{route('silName',$kayit->id)}}" class="btn btn-warning">Sil</a></td>
            </tr>
            @endforeach
        </tbody>
        </table>
    </div>   
    @endsection
    @section('altAlan')
    <div class="col-12">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi, aspernatur reiciendis hic, natus nihil quisquam ex numquam assumenda soluta dolores fuga autem tempora ducimus quas aliquid. Expedita obcaecati ab adipisci ipsum facere dolores incidunt voluptates illum deserunt beatae commodi excepturi modi eius ullam quo ut ad placeat cum tenetur, in provident magni earum soluta. Asperiores illo, laborum repudiandae accusamus atque sunt quae voluptatibus ut iste voluptates consequuntur alias labore beatae eum, illum iusto aliquid suscipit et, architecto impedit. Velit, fugiat est? Veritatis debitis illo repudiandae saepe ipsam nam reiciendis assumenda totam consequatur, quos exercitationem enim consequuntur. Quos ab esse in, beatae debitis commodi dolores. Perferendis facere doloribus voluptatem laudantium dignissimos quod. Voluptatum nostrum culpa nobis molestias sapiente autem reprehenderit, labore dolores cumque repellendus at mollitia debitis? Iusto harum dolore reprehenderit ut sunt omnis. Repudiandae voluptatibus corrupti atque voluptatem assumenda, esse nulla eius eum dicta dolor quis excepturi libero praesentium aspernatur quaerat quisquam, perspiciatis odit asperiores ratione mollitia quasi officia. Dolore eaque dicta eligendi accusamus nisi. In odit iure minus ex? Ratione nulla possimus alias molestiae ex neque pariatur odit ducimus saepe ullam mollitia unde, sed magnam in a tempora eligendi voluptate accusamus? Laudantium eius tenetur aperiam, blanditiis inventore suscipit odit reiciendis, cum nam, debitis rem. Nam quo unde, soluta exercitationem eum aliquid, accusamus itaque repellat optio iure libero ad sint odit porro obcaecati alias et ducimus voluptas pariatur temporibus, delectus rem ex reprehenderit laboriosam? Earum eos deserunt laborum cupiditate alias labore velit voluptates? Accusamus modi corporis soluta, cumque unde tempora!</p>
    </div>    
    @endsection 
</body>
</html>