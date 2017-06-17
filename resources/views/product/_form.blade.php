@if($errors->any())
    <div class="alert alert-danger">
        @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
@endif
<table width="80%">
    
    
    <tr>
        <td width="25% ">{!! Form::label('name', 'Name')!!}</td>
        <td> {!!  Form::text('name',null,['class'=>'form-control']) !!}</td>
    </tr>
    <tr>
        <td width="25% ">&nbsp;</td>
        <td> &nbsp;</td>
    </tr>
     
    <tr>
        <td width="25% ">{!! Form::label('description', 'Description')!!}</td>
        <td> {!!  Form::textarea('description',null,['class'=>'form-control']) !!}</td>
    </tr>
    <tr>
        <td width="25% ">&nbsp;</td>
        <td> &nbsp;</td>
    </tr>
   

</table>




{!! Form::button('<i class="fa fa-floppy-o"></i>&nbsp;Simpan',['class'=>'btn btn-primary','type'=>'submit']) !!}
{!! Form::button('<i class="fa fa-refresh"></i>&nbsp;Set Semula',['class'=>'btn btn-warning','type'=>'reset']) !!}
<a href="{{url('product')}}" class="btn btn-danger"><i class="fa fa-arrow-left"></i>&nbsp;Kembali</a>

