<template>
	<div>
		<div class="row">
		<div class="col-lg-12 margin-tb">
			<div class="pull-left">
				<h2>Users Management</h2>
			</div>
			<div class="pull-right">
				      
			</div>
		</div>
	</div>

	<table class="table table-bordered">
		<tr>
			<th>No</th>
			<th>Name</th>
			<th>Email</th>
			<th>Roles</th>
			<th width="280px">Action</th>
		</tr>
		 <tr v-for="user in users">
			<td>{{user.id}}</td>
			<td>{{user.id}}</td>
			<td>{{user.id}}</td>
			
			<td>
			{{user.id}}
			</td>
		</tr>
		
	</table>
	</div>

</template>


<script>
	export default {
		data() {
           return {
           	users: [],
           	user: {
           		id: 0,
           		name: '',
           		email: ''
           	}
           }
        },
        mounted() {
           this.getUsers()
        },
        methods: {
        	getUsers(){
        		axios.get('/api/users').then(response=>{
        			console.log(response)
        			this.users = response.data
        		})
        	}
        }
	}
</script>

<style>
	
</style>