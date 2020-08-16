@php
	$id = 4367;
@endphp

<div><a href="{{ route('admin.users.create') }}">User Create</a></div>

<div>
	<form method="post" action="{{ route('admin.users.store') }}">
		@csrf
		<button>User Store</button>
	</form>
</div>

<div><a href="{{ route('admin.users.edit', ['user' => $id]) }}">User Edit</a></div>

<div>
	<form method="post" action="{{ route('admin.users.update', $id) }}">
		@csrf
		@method('PUT')
		<button>User Update</button>
	</form>
</div>

<div>
	<form method="post" action="{{ route('admin.users.destroy', $id) }}">
		@csrf
		@method('DELETE')
		<button>User Delete</button>
	</form>
</div>
