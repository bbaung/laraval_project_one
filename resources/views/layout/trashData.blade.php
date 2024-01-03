<div>
				<!-- Smile, breathe, and go slowly. - Thich Nhat Hanh -->
</div>

<!DOCTYPE html>
<html lang="en">

				<head>
								<meta charset="UTF-8">
								<meta name="viewport" content="width=device-width, initial-scale=1.0">
								<meta http-equiv="X-UA-Compatible" content="ie=edge">
								<title>Document</title>

								<style>
												.item {
																background-color: gray;
																color: #000;
																margin: 10px;
																padding: 10px;
												}

												.link {
																display: inline-block;
																background-color: greenyellow;
																color: #000;
																text-decoration: none;
																padding: 5px;
																margin-right: 2px;
																border-radius: 5px;
												}
								</style>
				</head>

				<body>
								<h1>Student List</h1>

								<div>
												<a href="{{ route('student.index') }}" class="link">Sort by ID</a>

												<a href="{{ route('student.sortAge') }}" class="link">Sort by Age</a>

												<a href="{{ route('student.trash_data') }}" class="link">Trash Data</a>
								</div>

								<div>
												<p>Oldest Age : {{ $student->max('age') }}</p>
												<p>Youngest Age : {{ $student->min('age') }}</p>
												<p>Average Age:{{ $student->avg('age') }}
												<p>Total Student:{{ $student->count() }}</p>
								</div>

								<ul>

												@foreach ($student as $item)
																<li>
																				<div class="item">
																								<p>Name : {{ $item->name }} </p>
																								<p>Remark : {{ $item->remark }} </p>
																								<p>Age : {{ $item->age }} </p>
																								<!--<a href="student/{{ $item->id }}" class="link">View More</a>-->
																								<a href="{{ route('student.restore', [$item->id]) }}" class="link">Restore</a>

																				</div>
																</li>
												@endforeach

								</ul>

				</body>

</html>
