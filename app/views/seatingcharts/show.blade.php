@extends('layouts.scaffold')

@section('main')

<h1>Show Seating Chart</h1>

<p>{{ link_to_route('seatingcharts.index', 'Return to All seating_charts', null, array('class'=>'btn btn-lg btn-primary')) }}</p>

<table class="table table-striped">
	<thead>
		<tr>
			<th>Name</th>
				<th>Width</th>
				<th>Height</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $seatingchart->name }}}</td>
					<td>{{{ $seatingchart->width }}}</td>
					<td>{{{ $seatingchart->height }}}</td>
                    <td>
                        {{ Form::open(array('style' => 'display: inline-block;', 'method' => 'DELETE', 'route' => array('seating_charts.destroy', $seating_chart->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                        {{ link_to_route('seating_charts.edit', 'Edit', array($seating_chart->id), array('class' => 'btn btn-info')) }}
                    </td>
		</tr>
	</tbody>
</table>

@stop
