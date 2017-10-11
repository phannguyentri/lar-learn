@extends('admin.master')
@section('title',"Danh Sách")
@section('content')

@php
  if (Session::has('flash_message')) {
    echo '<div class="alert alert-success">';
    echo   '<label>'.Session::get('flash_message').'</label>';
    echo '</div>';
  }
@endphp

<table class="list_table">
    <tr class="list_heading">
        <td>Danh Mục</td>
        <td class="action_col">Quản lý</td>
    </tr>
    @php
      listCate($dataCates);
    @endphp
</table>
@endsection

<script type="text/javascript">
  function func_confirm($message){
    if (!confirm($message)) {
      return false;
    }

  }
</script>
