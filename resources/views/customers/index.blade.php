<html>
  <body>
  	<table>
  	<thead>
  		<tr>
  			<th>Last Name</th>
  			<th>First Name</th>
  			<th>Middle Name</th>
  		</tr>
  	</thead>
  	<tbody>
  		@foreach ($customers as $customer)
  		<tr>
  			<td>{{$customer->last_name}}</td>
  			<td>{{$customer->first_name}}</td>
  			<td>{{$customer->middle_name}}</td>
  		</tr>
  		@endforeach
  	</tbody>
  </table>
</body>

</html>
