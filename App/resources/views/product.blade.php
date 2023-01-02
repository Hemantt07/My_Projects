@extends('shopify-app::layouts.default')

@section('content')
    <?php
        if( !empty( $_GET['id'] ) ){
            $id = $_GET['id'];
            echo $id;
        }
        use Illuminate\Support\Facades\Auth;
        $shop=Auth::user();
        $products=$shop->api()->rest('GET','/admin/api/2022-10/products/<?= $id ?>.json');
        print_r($products);
         ?>
@endsection


@section('scripts')
<script type="text/javascript">
    var AppBridge = window['app-bridge'];
    var actions = AppBridge.actions;
    var TitleBar = actions.TitleBar;
    var Button = actions.Button;
    var Redirect = actions.Redirect;
    var titleBarOptions = {
        title: 'Product',
    }
    var TitleBar = TitleBar.create(app, titleBarOptions);
</script>
@endsection

