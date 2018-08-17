export default {
	state: {
		users: []
	},
	getters: {
		users(state){
			return state.users;
		}
	},
	mutations: {
		updateUsers(state,payload){
			state.users = payload;
		}		
	},
	actions: {
		getUsers(context){
			axios.get('/api/users').then(response=>{
				context.commit('updateUsers',response.data.users);
			})
		}
	}
}