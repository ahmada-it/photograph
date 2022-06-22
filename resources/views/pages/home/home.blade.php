@extends('layouts.main')

@section('breadcrumbs')
<div class="breadcrumbs">
  <div class="col-sm-4">
    <div class="page-header float-left">
      <div class="page-title">
        <h1>Dashboard</h1>
      </div>
    </div>
  </div>
</div>

@section('content')
<div class="container" style="background-color: white;">
  <table class="table table-striped table-bordered table-hover">
    <thead style="background-color: black; color: white;">
      <tr>
        <th><abbr title="Position">Pos</abbr></th>
        <th>Team</th>
        <th><abbr title="Played">Pld</abbr></th>
        <th><abbr title="Won">W</abbr></th>
        <th>Qualification or relegation</th>
      </tr>
    </thead>
    <tfoot style="background-color: black; color: white;">
      <tr>
        <th><abbr title="Position">Pos</abbr></th>
        <th>Team</th>
        <th><abbr title="Played">Pld</abbr></th>
        <th><abbr title="Won">W</abbr></th>
        <th>Qualification or relegation</th>
      </tr>
    </tfoot>
    <tbody>
      <tr>
        <th>1</th>
        <td><a href="https://en.wikipedia.org/wiki/Leicester_City_F.C." title="Leicester City F.C.">Leicester City</a>
          <strong>(C)</strong>
        </td>
        <td>38</td>
        <td>Qualification for the <a
            href="https://en.wikipedia.org/wiki/2016%E2%80%9317_UEFA_Champions_League#Group_stage"
            title="2016–17 UEFA Champions League">Champions League group stage</a></td>
      </tr>
      <tr>
        <th>2</th>
        <td><a href="https://en.wikipedia.org/wiki/Arsenal_F.C." title="Arsenal F.C.">Arsenal</a></td>
        <td>38</td>
        <td>Qualification for the <a
            href="https://en.wikipedia.org/wiki/2016%E2%80%9317_UEFA_Champions_League#Group_stage"
            title="2016–17 UEFA Champions League">Champions League group stage</a></td>
      </tr>
      <tr>
        <th>3</th>
        <td><a href="https://en.wikipedia.org/wiki/Tottenham_Hotspur_F.C." title="Tottenham Hotspur F.C.">Tottenham
            Hotspur</a></td>
        <td>70</td>
        <td>Qualification for the <a
            href="https://en.wikipedia.org/wiki/2016%E2%80%9317_UEFA_Champions_League#Group_stage"
            title="2016–17 UEFA Champions League">Champions League group stage</a></td>
      </tr>
      <tr class="is-selected">
        <th>4</th>
        <td><a href="https://en.wikipedia.org/wiki/Manchester_City_F.C." title="Manchester City F.C.">Manchester
            City</a></td>
        <td>38</td>
        <td>Qualification for the <a
            href="https://en.wikipedia.org/wiki/2016%E2%80%9317_UEFA_Champions_League#Play-off_round"
            title="2016–17 UEFA Champions League">Champions League play-off round</a></td>
      </tr>
      <tr>
        <th>5</th>
        <td><a href="https://en.wikipedia.org/wiki/Manchester_United_F.C." title="Manchester United F.C.">Manchester
            United</a></td>
        <td>38</td>
        <td>Qualification for the <a href="https://en.wikipedia.org/wiki/2016%E2%80%9317_UEFA_Europa_League#Group_stage"
            title="2016–17 UEFA Europa League">Europa League group stage</a></td>
      </tr>
    </tbody>
  </table>
  @endsection
  @endsection