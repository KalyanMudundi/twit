@section('content')
<div class="row">
  <div class="large-12 columns">
    <span><h1 style="display: inline;"><i class="fi-results-demographics"></h1><h2 style="display: inline;"></i> Analytics for: <span style="color: #008cba;"> {{$group->name}}</span></h2></span>
  </div>
</div>

<div id="clear" style="height: 25px"></div>

<div class="row">
  <fieldset>
    <legend>Most Used Hashtag</legend>
    <div id="piechart_3d" style="width: 900px; height: 500px;"></div>
  </fieldset>

</div>

<script type="text/javascript">
google.load("visualization", "1", {packages:["corechart"]});
google.setOnLoadCallback(drawChart);
function drawChart() {
  var data = google.visualization.arrayToDataTable([
    ['Hashtag', 'count'],
    @foreach($hashtags as $hashtag)

    {{"['$hashtag->hashtag', $hashtag->count],"}}

    @endforeach
    ]);

    var options = {
      title: 'Hashtag Analysis',
      is3D: true,
    };

    var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
    chart.draw(data, options);
  }
  </script>

@stop
