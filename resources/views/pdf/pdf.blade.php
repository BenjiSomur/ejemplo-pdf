<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Información de la serie</title>
  </head>
  <body>
    <style type="text/css" media="screen">
      .header{
        border-bottom-style: solid;
        border-bottom-color: #A9ADCC;
        padding: 12px;
    }
    .table {
      width: 100%;
      margin-bottom: 1rem;
      background-color: transparent;
    }

    .table th,
    .table td {
      padding: 0.75rem;
      vertical-align: top;
      border-top: 1px solid #dee2e6;
    }

    .table thead th {
      vertical-align: bottom;
      border-bottom: 2px solid #dee2e6;
    }

    .table tbody + tbody {
      border-top: 2px solid #dee2e6;
    }

    .table .table {
      background-color: #fff;
    }

    </style>
    <h1 class="header">Información de la serie</h2>
    <table class="table table-bordered">
    <thead>
      <tr>
        <td><b>Show Name</b></td>
        <td><b>Series</b></td>
        <td><b>Lead Actor</b></td>
      </tr>
      </thead>
      <tbody>
      <tr>
        <td>
          {{$show->show_name}}
        </td>
        <td>
          {{$show->series}}
        </td>
        <td>
          {{$show->lead_actor}}
        </td>
      </tr>
      </tbody>
    </table>
  </body>
</html>