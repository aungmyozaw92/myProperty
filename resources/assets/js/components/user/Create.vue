<template>
	<div>
	<h2>Add New User</h2>
		<form action="/users" method="post"> 
		  <div class="form-group" >
		    <label for="name">Name</label>
		    <input type="text" class="form-control" id="name" placeholder="Enter name" v-model="name">
		    <span v-if="errors.name" class="error">{{errors.name[0]}}</span>
		  </div>
		  <div class="form-group">
		    <label for="email"></label>
		    <input type="text" class="form-control" id="email" placeholder="Enter Email" name="email" v-model="email">
		    <span v-if="errors.email" class="error">{{errors.email[0]}}</span>
		  </div>
		  <div class="form-check">
		   <label for="password"></label>
		    <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" v-model="password"> 
		    <span v-if="errors.password" class="error">{{errors.password[0]}}</span>
		  </div>
		  <button type="button" class="btn btn-primary" v-on:click="addNewUser()">Submit</button>
		</form>
	</div>
</template>
 
<script>
export default{
	data(){
		return {
			name: '',
			email: '',
			password: '',
			errors: []
		}
	},
	methods: {
		addNewUser() {
			this.errors = []
			//passing data to api
			axios.post('/api/users', {
				name: this.name,
				email: this.email,
				password: this.password,
			}).then(response=>{
				this.name = ''
				this.email = ''
				this.password = ''
			}).catch(error=>{
				console.log(error)
				if(error.response.status = 422){
					this.errors = error.response.data.errors
				}
			})
		}
	}
}
</script>

<style>
	
</style>