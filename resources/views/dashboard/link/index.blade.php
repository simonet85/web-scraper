@extends('layout')

@section('content')
	<div class="row">
		<div class="col-md-12">
			<h2>Links</h2>
            <div class="alert alert-success" style="display: none"></div>
			<a href="{{ route('links.create') }}" class="btn btn-warning pull-right">Add new</a>
			@if(count($links) > 0)
				<table class="table table-bordered">
					<tr>
						<td>Url</td>
						<td>Main Filter Selector</td>
						<td>Website</td>
						<td>Assigned To Category</td>
                        <td><strong>Item Schema</strong></td>
                        <td><strong>Scrape Link</strong></td>
                        <td>Actions</td>
					</tr>
					@foreach($links as $link)
						<tr data-id="{{ $link->id }}">
							<td>{{ $link->url }}</td>
							<td>{{ $link->main_filter_selector }}</td>
                            <td>{{ $link->website->title }}</td>
                            <td><strong><span class="label label-info">{{ $link->category->title }}</span></strong></td>
                            <td>
                                <select class="item_schema" data-id="{{ $link->id }}" data-original-schema="{{ $link->item_schema_id }}">
                                    <option value="" disabled selected>Select</option>
                                </select>
                            </td>
						</tr>
					@endforeach
				</table>
				@if(count($websites) > 0)
					<div class="pagination">
						{{ $websites->render() }}
					</div>
				@endif
				@else
					<i>No websites found</i>
				@endif
		</div>
	</div>
@endsection