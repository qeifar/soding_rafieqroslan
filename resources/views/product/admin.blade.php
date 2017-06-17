@extends('adminlte::layouts.app')

@section('htmlheader_title')
Task: Product
@endsection

@section('contentheader_title')
Task: Product
@endsection

@section('main-content')
<section class="content-header">
    <h1>
        @yield('contentheader_title', '')
        <small>@yield('contentheader_description')</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-gears"></i> CRUD</a></li>
        <li><a href="#">@yield('contentheader_title')</a></li>

    </ol>
</section>
<br><br>
<div class="container-fluid spark-screen">
    <div class="row">
        <div class="box box-primary">
            <div class="box-body " style="overflow-y:auto;" width="100%">
        
        <div class="col-xs-10 well">
            <a href="#" class="btn bg-navy"  data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i>&nbsp; Add New</a><br><br>
            <table  class="table table-bordered table-hover table-inverse" >
                <thead  style="border:solid 2px; border-color:black" class="thead-inverse">
                    <tr>
                        <td><b>No.</b></td>
                        <td><b>ID</b></td>
                        <td><b>Name</b></td>
                        <td><b>Description</b></td>
                        <td><b>Created At</b></td>
                         <td><b>Updated At</b></td>
                        <td align="center"><b>Action</b></td>
                    </tr>
                </thead>
                
                <tbody>
                    <?php $i=1; ?>
                  
                    @foreach($products as $product)
                    <tr>
                        
                        <td>{{$i++}}</td>
                        <td>{{$product->id}}</td>
                        <td>{{$product->name}}</td>
                        <td>{{$product->description}}</td>
                        <td>{{$product->created_at}}</td>
                        <td>{{$product->updated_at}}</td>


                        <td width="32%">&nbsp;&nbsp;&nbsp;<div class="pull-left"><a href="{{url('product/'.$product->id.'/edit')}}" class="btn bg-maroon"><i class="fa fa-pencil"></i>&nbsp Edit</a></div>&nbsp<div class="pull-right">{!! Form::open(['route' => ['product.destroy', $product->id],'data-confirm' => 'test','method' => 'DELETE',]) !!}{!! Form::button('<i class="fa fa-trash"></i>&nbsp;Delete',['class'=>'btn bg-green','type'=>'submit','data-confirm' => 'Are you sure you want to delete?']) !!}{!! Form::close() !!}</div>&nbsp;&nbsp;&nbsp;</td>

                    </tr>
                    @endforeach
                    
                </tbody>

            </table>
            <?php echo $products->render(); ?>

        </div>
            </div></div></div>
</div>
 @include('product.create')
@endsection
<!--<script>
    $(document).ready(function(){
        setTimeout(function() {
          $('#alert').fadeOut('slow');
        }, 900); // <-- time in milliseconds
    });
    </script>-->