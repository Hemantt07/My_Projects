@extends('shopify-app::layouts.default')

@section('content')

<div class="products mt-5">
    <?php
        use Illuminate\Support\Facades\Auth;
        $shop = Auth::user();
        $products = $shop->api()->rest('GET','/admin/api/2022-10/products.json');
        $body = $products['body'];
        $cont = $body->container;
    ?>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Sr no.</th>
                <th scope="col">Product</th>
                <th scope="col">Created at</th>
                <th scope="col">View</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $a = 1;
                  foreach ( $cont['products'] as $product ) :?>
                <tr>
                    <td><?= $a ?></td>
                    <td><?php echo($product['title']) ?></td>
                    <td><?php echo($product['created_at']) ?></td>
                    <td><a href="/product?id=<?= $product['id'] ?>"><img src="<?= $product['images'][0]['src'] ?>" height="100px!important"></a></td>

                </tr>
            <?php $a++; endforeach; ?>
        </tbody>
    </table>
    <div class="container">
    </div>
</div>

@endsection


@section('scripts')
<script type="text/javascript">
    var AppBridge = window['app-bridge'];
    var actions = AppBridge.actions;
    var TitleBar = actions.TitleBar;
    var Button = actions.Button;
    var Redirect = actions.Redirect;
    var titleBarOptions = {
        title: 'Products',
    }
    var TitleBar = TitleBar.create(app, titleBarOptions);
</script>
@endsection
