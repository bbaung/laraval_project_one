@extends('layout.app')

@section('content')
				<div class="item">
								<p>Name : {{ $student->name }}</p>
								<p>Remark : {{ $student->remark }}</p>
								<p>Age : {{ $student->age }}</p>
				</div>
@endsection
