export default {
	state: {
		users: [],
		purposes: [],
		property_types: [],
		distances: []
	},
	getters: {
		users(state){
			return state.users;
		},
		purposes(state){
			return state.purposes;
		},
		property_types(state){
			return state.property_types;
		},
		distances(state){
			return state.distances
		}
	},
	mutations: {
		updateUsers(state,payload){
			state.users = payload;
		},
		updatePurposes(state,payload){
			state.purposes = payload;
		},
		updatePropertyTypes(state,payload){
			state.property_types = payload;
		},
		updateDistances(state,payload){
			state.distances = payload;
		}		
	},
	actions: {
		getUsers(context){
			axios.get('/api/users').then(response=>{
				context.commit('updateUsers',response.data.users);
			})
		},
		getPurposes(context){
			axios.get('/api/purposes').then(response=>{
				context.commit('updatePurposes',response.data.purposes);
			})
		},
		getPropertyTypes(context){
			axios.get('/api/property_types').then(response=>{
				context.commit('updatePropertyTypes',response.data.property_types);
			})
		},
		getDistances(context){
			axios.get('/api/distances').then(response=>{
				context.commit('updateDistances',response.data.distances);
			})
		}
	}
}