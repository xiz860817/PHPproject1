@extends('layouts.master')
@section('title','客戶列表')
@section('content')
<div class="row justify-content-center">
  <div class="col-md-10">
    <div class="card">
      <div class="card-header">客戶列表</div>
      <div class="card-body p-1">
        <table class="table table-hover m-0">
          <thead class="thead-darty">
            <tr>
              <th>客戶編號</th>
              <th>客戶姓名</th>
              
            </tr>
          </thead>
          <tbody>
          <?php
            foreach ($test as $t){
          ?>
            <tr>
	              <td><?php echo $t->Cus; ?></td>
	              <td><?php echo $t->Name; ?></td>
              
            </tr>
            <?php }  ?>
          </tbody>
        </table>
      </div>  
    </div>
  </div>
</div>
@stop
