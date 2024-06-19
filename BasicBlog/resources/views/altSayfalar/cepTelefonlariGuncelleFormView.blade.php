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
    <div class="col-4">
    <form action="{{route('guncelleName',$kayit->id)}}" method="post">
        @csrf
        <div class="mb-3">
            <label class="form-label">Model</label>
            <input type="text" class="form-control" value="{{$kayit->model}}" name="model" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label class="form-label">Fiyat</label>
            <input type="text" class="form-control" value="{{$kayit->fiyat}}" name="fiyat" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label class="form-label">Görsel</label>
            <input type="text" class="form-control" value="{{$kayit->gorsel}}" name="gorsel" aria-describedby="emailHelp">
        </div>
        <button type="submit" class="btn btn-primary">Gönder</button>
    </form>
        
    </div>    
    @endsection
    @section('altAlan')
    <div class="col-12">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi, aspernatur reiciendis hic, natus nihil quisquam ex numquam assumenda soluta dolores fuga autem tempora ducimus quas aliquid. Expedita obcaecati ab adipisci ipsum facere dolores incidunt voluptates illum deserunt beatae commodi excepturi modi eius ullam quo ut ad placeat cum tenetur, in provident magni earum soluta. Asperiores illo, laborum repudiandae accusamus atque sunt quae voluptatibus ut iste voluptates consequuntur alias labore beatae eum, illum iusto aliquid suscipit et, architecto impedit. Velit, fugiat est? Veritatis debitis illo repudiandae saepe ipsam nam reiciendis assumenda totam consequatur, quos exercitationem enim consequuntur. Quos ab esse in, beatae debitis commodi dolores. Perferendis facere doloribus voluptatem laudantium dignissimos quod. Voluptatum nostrum culpa nobis molestias sapiente autem reprehenderit, labore dolores cumque repellendus at mollitia debitis? Iusto harum dolore reprehenderit ut sunt omnis. Repudiandae voluptatibus corrupti atque voluptatem assumenda, esse nulla eius eum dicta dolor quis excepturi libero praesentium aspernatur quaerat quisquam, perspiciatis odit asperiores ratione mollitia quasi officia. Dolore eaque dicta eligendi accusamus nisi. In odit iure minus ex? Ratione nulla possimus alias molestiae ex neque pariatur odit ducimus saepe ullam mollitia unde, sed magnam in a tempora eligendi voluptate accusamus? Laudantium eius tenetur aperiam, blanditiis inventore suscipit odit reiciendis, cum nam, debitis rem. Nam quo unde, soluta exercitationem eum aliquid, accusamus itaque repellat optio iure libero ad sint odit porro obcaecati alias et ducimus voluptas pariatur temporibus, delectus rem ex reprehenderit laboriosam? Earum eos deserunt laborum cupiditate alias labore velit voluptates? Accusamus modi corporis soluta, cumque unde tempora!</p>
    </div>    
    @endsection 
</body>
</html>