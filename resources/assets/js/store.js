import {getLocalUser} from "./helpers/auth";

const user = getLocalUser();

export default {
	state: {
 		currentUser: user,
 		isLoggedIn: !!user,
 		loading: false,
 		auth_error: null,
		users: [],
		purposes: [],
		property_types: [],
		distances: []
	},
	getters: {
		isLoading(state){
			return state.loading;
		},
		isLoggedIn(state){
			return state.isLoggedIn;
		},
		currentUser(state){
			return state.currentUser;
		},
		authError(state){
			return state.auth_error;
		},
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
		login(state){
			state.loading = true;
			state.auth_error = null;
		},
		loginSuccess(state,payload){
			state.auth_error = null;
			state.isLoggedIn = true;
			state.loading = false;
			state.currentUser = Object.assign({}, payload.user, {token: payload.access_token});

			localStorage.setItem("user", JSON.stringify(state.currentUser));

		},
		logininFailed(state, payload){
			state.loading = false;
			state.auth_error = payload.error;
		},
		logout(state){
			localStorage.removeItem("user");
			state.isLoggedIn = false;
			state.currentUser = null;
		},
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
		login(context){
			context.commit("login");
		},
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