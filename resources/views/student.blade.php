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
																border-radius: 5px;
												}
								</style>
				</head>

				<body>
								<h1>Student List</h1>

								<ul>

												@foreach ($student as $item)
																<li>
																				<div class="item">
																								<p>Name : {{ $item->name }} </p>
																								<p>Remark : {{ $item->remark }} </p>
																								<p>Age : {{ $item->age }} </p>
																								<!--<a href="student/{{ $item->id }}" class="link">View More</a>-->
																								<a href="{{ route('student.show', [$item->id]) }}" class="link">View More</a>
																				</div>
																</li>
												@endforeach

								</ul>

				</body>

</html>
