@extends('admin.master')
@section('title',"Danh Sách")
@section('content')
@php
  echo "<pre>";
  print_r($dataCates);
  echo "</pre>";
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
